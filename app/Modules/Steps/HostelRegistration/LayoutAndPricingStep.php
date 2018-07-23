<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/13/18
 * Time: 10:06 PM
 */

namespace myRoommie\Wizard\Steps\HostelRegistration;


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
        if (Session::has('hosteller.hostel_id')){
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
        $blocks = $request['block'];
        $arr1 =[];
        foreach ($blocks as $block) {
            array_push($arr1,[
                'hostel_id' =>$hostelId,
                'name'      =>$block,
            ]);
        }
        new Block(insert($arr1));

        /*
         *  Retrieve the ID's of the just
         * created blocks
         * */
        $hostel =(new Hostel)::findOrFail($hostelId);
        $createdBlock=[];
           array_push($createdBlock,$hostel->blocks->id);
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
        new Floor(insert($arr2));


        /*
         *  Retrieve the ID's of the just
         * created floors
         * */

        $createdFloors =[];
        array_push($createdFloors,$hostel->floors->id);

        /*
         *  Create all the room associated with the
         *  hostel
         *  block
         *  floor
         * */
        /*
         * Split the array
         * */

        $unsortedRooms = $request['room'];
        [$bk,$bValues] = array_divide($unsortedRooms);

        [$fk1,$fValues]= array_divide($bValues);

        [$rk1,$rValues] = array_divide($fValues);

        /*
         * Recombine the array with its respective
         * hostel id
         * block id
         * floor id
         *
         * */
        $rooms = array_combine(
            $createdBlock,
                array_combine(
                    $createdFloors,$rValues));


        $arr3 = [];
        foreach ($rooms as $cbk => $blockV) {
            foreach ($blockV as $cfk => $floorV) {
                foreach ($floorV as $rk => $room) {
                    array_push($arr3,[
                        'hostel_id'           =>$hostelId,
                        'block_id'            =>$cbk,
                        'floor_id'            =>$cfk,
                        'room_description_id' =>$room['room_description'],
                        'name'                =>$room['name'],
                        'number'              =>$rk,
                        'sexType'             =>$room['sexType'],
                    ]);
                }
            }
        }
        new Room(insert($arr3));
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

        ];
    }

}
