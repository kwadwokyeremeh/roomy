<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/13/18
 * Time: 10:06 PM
 */

namespace myRoommie\Wizard\Steps\HostelRegistration;


use myRoommie\Http\Requests\LayoutRequest;
use myRoommie\Repository\Helper;
use Smajti1\Laravel\Step;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use myRoommie\Modules\Hostel\Room;
use myRoommie\Modules\Hostel\Floor;
use myRoommie\Modules\Hostel\Block;
use myRoommie\Modules\Hostel\Hostel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LayoutAndPricingStep extends Step
{

    public static $label = 'LayoutAndPricing';
    public static $slug = '05';
    public static $view = 'hostelRegistration.05_layoutAndPricing';

    public function process(Request $request)
    {
        $hostellerId = Auth::guard('hosteller')->user()->id;
        if (Session::exists('hosteller.hostel_id')){
            $hostelId = session('hosteller.hostel_id');
        }else{
            $hostelId = DB::table('hostel_registrations')->where([
                'hosteller_id'=> $hostellerId,
                '1_basic_info'=>true,
                '2_hostel_details'=>true,
                '3_add_media'=>true,
                '4_amenities'=>true,
                '5_layout_n_pricing' =>false,
                '6_policies' =>false,
                '7_payment' =>false,
                '8_confirmation' =>false,
            ])->orderByRaw('created_at - updated_at DESC')->value('hostel_id');
        }


        /*
         *  Create new block
         * */
        $apartment = new Block;
        $blocks = $request['block'];
        $arr1 =[];
        foreach ($blocks as $block) {
            array_push($arr1,[
                'hostel_id' =>$hostelId,
                'name'      =>$block,
            ]);
        }
        $apartment->insert($arr1);

        /*
         *  Retrieve the ID's of the just
         * created blocks
         * */
        $hostel = new Hostel;
        $createdBlock=[];
        $b =$hostel->findOrFail($hostelId)->blocks()->get();
        foreach ($b as $item) {
            array_push($createdBlock,$item->id);
            }

        /*
         * Create all the floor associated with each block
         * of a hostel
         *
         * */
        /*
         * Request for the floors
         * */
        $unsortedFloors = $request['floor'];
        /*
         * Separate the keys from the requested array
         * and merge it with the Block ID's retrieved
         * */
        [$fk,$floorValues]=array_divide($unsortedFloors);
        $floors =array_combine($createdBlock,$floorValues);


        $arr2 =[];

        foreach ($floors as $key => $floor) {
            foreach ($floor as $floorName) {
                array_push($arr2,[
                    'hostel_id' =>$hostelId,
                    'block_id'  =>$key,
                    'name'      =>$floorName
                ]);
            }
        }
        $floorPlan = new Floor;
        $floorPlan->insert($arr2);


        /*
         *  Retrieve the ID's of the just
         * created floors
         * */

        $createdFloors =[];
        $f =$hostel->find($hostelId)->floors()->get();

        foreach($f as $item){
            array_push($createdFloors,$item->id);
        }


        /*
         *  Create all the room associated with the
         *  hostel
         *  block
         *  floor
         * */
        /*
         * Split the array
         * */

        /*$unsortedRooms = $request['room'];
        $flk =$request['room.']
        [$bk,$bValues] = array_divide($unsortedRooms);
        $sortedRoomsWithBlocks = array_combine($createdBlock,$bValues);

        $helper =new Helper;
        $rooms = $helper->replaceKey($sortedRoomsWithBlocks,$createdFloors,);
        foreach ($sortedRoomsWithBlocks as $sortedRoomsWithBlock )
        {
            foreach ($sortedRoomsWithBlock as $k => $v) {
                $sortedRoomsWithBlock[$k] = array_set($sortedRoomsWithBlock,$k,$createdFloors);
                unset($sortedRoomsWithBlock[$k]);
            }

        }
        [$fk1,$fValues]= array_divide($bValues);

        [$rk1,$rValues] = array_divide($fValues);*/

        /*
         * Recombine the array with its respective
         * hostel id
         * block id
         * floor id
         *
         * */

        /*$rooms =
                array_combine($createdFloors,$rValues);*/

        /*foreach ($rooms as $cbk => $blockV) {
            foreach ($blockV as $cfk => $floorV) {
                foreach ($floorV as $rk => $room) {
                    array_push($arr3,[
                        'hostel_id'           =>$hostelId,
                        'block_id'            =>$cbk,
                        'floor_id'            =>$cfk,
                        'room_description_id' =>$room['roomType'],
                        'name'                =>$room['name'],
                        'number'              =>$rk,
                        'sexType'             =>$room['gender'],
                    ]);
                }
            }
        }*/

        $unsortedRooms = $request['room'];
        [$fk1,$rValues] = array_divide($unsortedRooms);
        $rooms = array_combine($createdFloors,$rValues);
        $arr3 = [];

        foreach ($rooms as $cfk => $floorV) {
                foreach ($floorV as $rk => $room) {
                    array_push($arr3,[
                        'hostel_id'           =>$hostelId,
                        'floor_id'            =>$cfk,
                        'room_description_id' =>$room['roomType'],
                        'name'                =>$room['name'],
                        'number'              =>$rk,
                        'sexType'             =>$room['gender'],
                    ]);
                }
        }
        $abode = new Room;
        $abode -> insert($arr3);
        /*
         * End of room array
         * */

        /*
         * Create all the beds associated
         * with the hostel
         * */



        /*
         * End of bed array
         * */
        // next if you want save one step progress to session use
        DB::table('hostel_registrations')
            ->where(['hosteller_id'=> $hostellerId,
                'hostel_id' =>$hostelId])
            ->update(['5_layout_n_pricing' => true]);
        $this->saveProgress($request);
    }

    public function rules(Request $request = null): array
    {
        return [
                'block'         =>  'required|array',
                'floor'         =>  'required|array',
                'room'          =>  'required|array',
            'room.*.*.roomType'   =>  'required',
            'room.*.gender'   =>  'nullable',
            'room.*.name'   =>  'nullable',
        ];
    }

    public function messages()
    {
        return [
            'block.required' => 'At least one block is required',
            'floor.required' => 'At least one floor is required',
            'room.required' => 'At least one room is required',
            'room.*.*.roomType.required'=>'Please select the type of room for :attribute'
        ];
    }

    public function customAttributes()
    {
        return [

        ];
    }
}
