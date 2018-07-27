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
use myRoommie\Repository\GoogleMaps;
use myRoommie\Modules\Hostel\Hostel;
use Illuminate\Support\Facades\Auth;
use myRoommie\Modules\HostelRegistration;
use myRoommie\Modules\Hostel\RoomDescription;



class HostelDetailsStep extends Step
{

    public static $label = 'HostelDetails';
    public static $slug = '02';
    public static $view = 'hostelRegistration.02_hostelDetails';


    public function process(Request $request)
    {

        /*
         Get the Latitude and Longitude returned from the Google Maps Address.
       */
        $coordinates =GoogleMaps::geocodeAddress( $request->get('name'),$request->get('street_address'), $request->get('city'), $request->get('region'),$request->get('country') );

        /*
         * Create new hostel
         * Begin insert hostel details
         * */
        $hostel = new Hostel;
        $hostel ->name = $request->get('name');
        $hostel ->alias = $request->get('alias');
        $hostel ->street_address = $request->get('street_address');
        $hostel ->number_of_blocks = $request->get('number_of_blocks');
        $hostel ->city = $request->get('city');
        $hostel ->hosteller_id = Auth::guard('hosteller')->user()->id;
        $hostel ->region = 'Ashanti';
        $hostel ->country = 'Ghana';
        $hostel ->latitude = $coordinates['lat'];
        $hostel ->longitude = $coordinates['lng'];
        if ($request->has('hostel_email')){
            $hostel ->hostel_email = $request->get('hostel_email');
        }
        if ($request->has('hostel_phone')){
            $hostel ->hostel_phone = $request->get('hostel_phone');
        }
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
        $registerHostel->create([
            'hosteller_id' => Auth::guard('hosteller')->user()->id,
            'hostel_id' =>$hostel->id,
            '1_basic_info' => true,
            '2_hostel_details' => true
        ]);



        $request->session()->put('hosteller',['hostel_id'=> $hostel->id,]);
        $request->session()->regenerate();

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
            'roomType'  =>          'array|required',
            'roomType.roomType.*'=> 'required|string|min:3',
            'roomType.beds.*'=>     'required|integer|min:1',
            'roomType.price.*'=>    'required|numeric',
            'hostel_email'   =>     'nullable',
            'hostel_phone'  =>      'nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'A hostel name is required',
        ];
    }
    public function customAttributes()
    {
        return [

        ];
    }

}
