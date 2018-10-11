<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/13/18
 * Time: 10:06 PM
 */
namespace myRoommie\Wizard\Steps\HostelRegistration;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use myRoommie\Hosteller;
use myRoommie\Jobs\GenerateMap;
use myRoommie\Modules\Hostel\HostellerHostel;
use Smajti1\Laravel\Step;
use Illuminate\Http\Request;
use myRoommie\Modules\Hostel\Hostel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use myRoommie\Modules\HostelRegistration;
use myRoommie\Modules\Hostel\RoomDescription;



class HostelDetailsStep extends Step
{

    public static $label = 'HostelDetails';
    public static $slug = '02';
    public static $view = 'hostelRegistration.02_hostelDetails';


    public function process(Request $request)
    {



        $hosteller = Auth::guard('hosteller')->user()->id;

        /*
         * Create new hostel
         * Begin insert hostel details
         * */
        $hostel = new Hostel;
        $hostel ->name = $request->get('name');
        $hostel ->alias = $request->get('alias');
        $hostel ->slug = $hostel->slugHostel($request);
        $hostel ->street_address = $request->get('street_address');
        //$hostel ->number_of_blocks = $request->get('number_of_blocks');
        $hostel ->city = $request->get('city');
        //$hostel ->hosteller_id = Auth::guard('hosteller')->user()->id;
        $hostel ->region = 'Ashanti';
        $hostel ->country = 'Ghana';
        //$hostel ->latitude = $coordinates['lat'];
        //$hostel ->longitude = $coordinates['lng'];
        if ($request->has('hostel_email')){
            $hostel ->hostel_email = $request->get('hostel_email');
        }
        if ($request->has('hostel_phone')){
            $hostel ->hostel_phone = $request->get('hostel_phone');
        }
        $hostel->save();




        /*
         * Associated the created hostellers with the the just
         * created hostel
         *
         * */
        Hosteller::find($hosteller)->hostel()->attach($hostel->id,['creation_state'=>'CREATOR']);


            $hostellers = DB::table('hostellers_creation_states')->where(['creator' => $hosteller])->get();
            foreach ($hostellers->pluck('created') as $host) {
                (new HostelRegistration)::create([
                    'hosteller_id'=> $host,
                    'hostel_id'=> $hostel->id,
                    'basic_info'=>true,
                    'hostel_details'=>true,
                    'add_media'=>true,
                    'amenities'=>true,
                    'layout_n_pricing' =>true,
                    'policies' =>true,
                    'payment' =>true,
                    'confirmation' =>true,
                ]);

                Hosteller::find($host)->hostel()->attach($hostel->id, ['creation_state' => 'CREATED']);

            }
        DB::table('hostellers_creation_states')->where(['creator' => $hosteller])->delete();



        /*$assocHosteller = new HostellerHostel;
        $auth =[
            'hosteller_id' => \auth('hosteller')->id(),
            'hostel_id'     => $hostel->id,
            'creation_state'=> 'CREATOR',
        ];
        $assocHosteller->create($auth);

        if (session()->has('hostellersId')){

            $hostellers =session()->get('hostellersId');
            foreach ($hostellers as $hostellier) {
               $hostellier->hostel()->attach($hostel->id,['creation_state'=>'CREATED']);
            }
            $host = [];
            for ($i =0; $i < count($hostellers); $i++){
                array_push($host,[
                    'hosteller_id'=>$hostellers[$i],
                    'hostel_id'     => $hostel->id,
                    'creation_state'=> 'CREATED',
                    //'status'    =>true,
                ]);
            }
            $assocHosteller->insert($host);
        }*/


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
                'room_token'    => str_random(12),

            ]);
        }
        $roomType->insert($arr1);

        /*
         * Update the hostel registration records
         * */



        (new HostelRegistration)::create([
            'hosteller_id' => $hosteller,
            'hostel_id' =>$hostel->id,
            'basic_info' => true,
            'hostel_details' => true
        ]);





        $request->session()->put('hosteller',['hostel_id'=> $hostel->id,]);
        $request->session()->regenerate();

        // next if you want save one step progress to session use
        $this->saveProgress($request);
        //GenerateMap::dispatch($hostel)->onQueue('default');
        return true;
    }

    public function rules(Request $request = null): array
    {

        return [
            'name' =>               'required|string|min:3|max:255|uniqueHostelName:{$request->name}|uniqueSlug',
            'alias' =>              'nullable|string|max:255|uniqueSlug',
            'street_address' =>     'required|string|max:255',
            'city' =>               'required|string|max:255',

            'roomType'  =>          'array|required',
            'roomType.roomType.*'=> 'required|string|min:3',
            'roomType.beds.*'=>     'required|integer|min:1',
            'roomType.price.*'=>    'required|numeric',
            'hostel_email'   =>     'email|nullable',
            'hostel_phone'  =>      'digits:10|nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'A hostel name is required',
            'name.unique_hostel_name' => 'The hostel name provided exists already in our database',
            'name.unique_slug' => 'The hostel name provided exists already in our database',
            'alias.unique_slug' => 'The slang provided exists already in our database',
        ];
    }
    public function customAttributes()
    {
        return [

        ];
    }

}
