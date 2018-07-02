<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/13/18
 * Time: 10:06 PM
 */
namespace myRoommie\Wizard\Steps\HostelRegistration;

use Illuminate\Support\Facades\Auth;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Modules\Hostel\RoomDescription;
use Smajti1\Laravel\Step;
use myRoommie\Modules\HostelRegistration;
use Illuminate\Http\Request;

class HostelDetailsStep extends Step
{

    public static $label = 'HostelDetails';
    public static $slug = '02';
    public static $view = 'hostelRegistration.02_hostelDetails';


    public function process(Request $request)
    {
        /*
         * Create new hostel
         * Begin insert hostel details
         * */
        $hostel = new Hostel;
        $hostel ->name = $request->get('name');
        $hostel ->alias = $request->get('alias');
        $hostel ->number_of_blocks = $request->get('number_of_blocks');
        $hostel ->city = $request->get('city');
        $hostel ->hosteller_id = Auth::guard('hosteller')->user()->id;
        $hostel ->region = 'Ashanti';
        $hostel ->country = 'Ghana';
        $hostel ->latitude = '';
        $hostel ->longitude = '';
        $hostel->save();

        /*
         * Insert the prices associated with the room types
         * and the number of beds
         * */
        $roomType = new RoomDescription;
        $roomTypes =$request->get('roomType')['roomType'];
        $beds =$request->get('roomType')['beds'];
        $prices =$request->get('roomType')['price'];

        $arr1 = [];
        for ($i = 0; $i < count($roomTypes); $i++) {
            array_push($arr1, [
                'hostel_id'     => $hostel->id,
                'room_type'     => $roomTypes[$i],
                'number_of_beds'=> $beds[$i],
                'price'         => $prices[$i],

            ]);
        }
        $roomType->insert($arr1);

        /*
         * Update the hostel registration records
         * */

        $registerHostel = new HostelRegistration;
        $registerHostel->update([
            'hosteller_id' => Auth::guard('hosteller')->user()->id,
            '2_hostel_details' => true
        ]);





        // next if you want save one step progress to session use
        $this->saveProgress($request);
    }

    public function rules(Request $request = null): array
    {

        return [
            'name' =>               'required|string|min:3|max:255|unique:hostels',
            'alias' =>              'nullable|string|max:255',
            'street_address' =>     'required|string|max:255',
            'city' =>               'required|string|max:255',
            'number_of_blocks'=>    'required',
            'roomType'  => 'array|required',
            'roomType.roomType.*'=> 'required|string|min:3',
            'roomType.beds.*'=>     'required|integer|min:1',
            'roomType.price.*'=>    'required|numeric',
        ];
    }

    public function progress()
    {
        return view('hostelRegistration._partials.02progress');
    }
}
