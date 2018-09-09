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
use Smajti1\Laravel\Wizard;
use Validator;

class LayoutAndPricingStep extends Step
{


    public static $label = 'LayoutAndPricing';
    public static $slug = '05';
    public static $view = 'hostelRegistration.05_layoutAndPricing';



    public function process(Request $request)
    {



                /*
         *  Check for data consistency
         *
         *
         * */

                $blocks = $request['block'];
                $unsortedFloors = $request['floor'];
                $unsortedRooms = $request['room'];
                [$fk,$floorValues]=array_divide($unsortedFloors);
                [$fk1,$rValues] = array_divide($unsortedRooms);



                if ( (count($blocks)==count($fk)) && (count(array_flatten($floorValues))==count($fk1)) )
                {

                    $hostellerId = Auth::guard('hosteller')->user()->id;
                    if ($request->session()->has('hosteller.hostel_id')==true){
                        $hostelId = session('hosteller.hostel_id');
                    }else{
                        $hostelId = DB::table('hostel_registrations')->where([
                            'hosteller_id'=> $hostellerId,
                            'basic_info'=>true,
                            'hostel_details'=>true,
                            'add_media'=>true,
                            'amenities'=>true,
                            'layout_n_pricing' =>false,
                            'policies' =>false,
                            'payment' =>false,
                            'confirmation' =>false,
                        ])->orderByRaw('created_at - updated_at DESC')->value('hostel_id');
                    }
                /*
         *  Create new block
         * */


                if (count($blocks)==1){
                    Block::firstOrCreate([
                        'hostel_id' =>$hostelId,
                        'name'      =>implode('',array_values($request['block'])),
                    ]);
                }else{
                    $arr1 =[];
                    for ($i = 0; $i < count($blocks); $i++) {
                        array_push($arr1,[
                            'hostel_id' =>$hostelId,
                            'name'      =>$blocks[$i],
                        ]);
                    }
                    $brr1 = collect($arr1)->unique()->toArray(); //= array_flatten(array_unique($arr1));
                    (new Block)::insert($brr1);
                }


                /*
                 *  Retrieve the ID's of the just
                 * created blocks
                 * */


                $b = Hostel::findOrFail($hostelId)->blocks()->pluck('id')->toArray();

                /*
                 * Create all the floor associated with each block
                 * of a hostel
                 *
                 * */
                /*
                 * Request for the floors
                 * */

                /*
                 * Separate the keys from the requested array
                 * and merge it with the Block ID's retrieved
                 * */

                $floors =array_combine($b,$floorValues);

                if (count($blocks) ==1){
                    $f1 =array_flatten($floorValues);
                    $arr2 =[];

                    for ($i = 0; $i < count($f1); $i++) {
                        array_push($arr2,[
                            'hostel_id' =>$hostelId,
                            'block_id'  =>implode('',array_values($b)),
                            'name'      =>$f1[$i],
                        ]);
                    }
                    $brr2 = array_unique($arr2,SORT_REGULAR);//collect($arr2)->unique()->toArray();

                    (new Floor)::insert($brr2);
                }
                else{
                    $arr2 =[];

                    foreach ($floors as $key => $floor) {
                        foreach ($floor as $floorName) {
                            array_push($arr2,[
                                'hostel_id' =>$hostelId,
                                'block_id'  =>$key,
                                'name'      =>$floorName
                            ]);
                        }unset($floorName);
                    }unset($floor);
                    $brr2 = array_unique($arr2,SORT_REGULAR);//collect(array_unique($arr2))->unique()->toArray();
                    (new Floor)::insert($brr2);

                }



                /*
                 *  Retrieve the ID's of the just
                 * created floors
                 * */
                $f =Hostel::findOrFail($hostelId)->floors()->pluck('id')->toArray();
/*

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




                $rooms = array_combine($f, $rValues);
                $arr3 = [];

                foreach ($rooms as $cfk => $floorV) {
                    foreach ($floorV as $rk => $room) {
                        array_push($arr3, [
                            'hostel_id' => $hostelId,
                            'floor_id' => $cfk,
                            'room_description_id' => $room['roomType'],
                            'name' => $room['name'],
                            'number' => $rk,
                            'sex_type' => $room['gender'],
                        ]);
                    }
                }
                    $brr3 = collect($arr3)->unique()->toArray(); // = array_unique($arr3);
                $abode = new Room;
                $abode->insert($brr3);

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
                            ->update(['layout_n_pricing' => true]);



                    $this->saveProgress($request);
                return true;

                }
                    return false;
                //return redirect()->back()->withErrors(['message'=>'The data provided is inconsistent']);


}




    public function rules(Request $request = null): array
    {

        return [
                'block'         =>  'required|array',
                'floor'         =>  'required|array',
                'room'          =>  ['required','array',
                    /*function ($attribute, $value=[((count(['block'])==count(['floor'])) && (count(['floor.*'])==count(['room.*'])))], $fail){

                    if($value ){
                        return $fail('The provided data is inconsistent.');
                    }

                }*/
        ],
            'room.*.*.roomType'   =>  'required',
            'room.*.*.gender'   =>  'nullable|string|max:1',
            'room.*.*.name'   =>  'nullable|string|max:255',
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
