<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/17/18
 * Time: 12:07 PM
 */

namespace myRoommie\Wizard\Steps\HostelRegistration;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use myRoommie\Modules\HostelRegistration;
use Smajti1\Laravel\Step;
use Illuminate\Http\Request;
use myRoommie\Hosteller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation;


class BasicInfoStep extends Step

{
    public static $label = 'BasicInfoStep';
    public static $slug = '01';
    public static $view = 'hostelRegistration.01_basicInfo';

    public function process(Request $request)
    {
        /**
         * Get the error messages for the defined validation rules.
         *
         * @return array
         */




        if (($request->get('email')['manager'] && $request->get('email')['portal'])!= null) {

            //  register Hostel manager or owner and portal
            $hosteller = new Hosteller;
            $hosteller->create([
                'firstName' => $request['firstName'],
                'lastName' => $request['lastName'],
                'email' => $request->get('email')['manager'],
                'phone' => $request->get('phone')['manager'],
                'password' => Hash::make(str_random(10)),
                'role' => $request['role'],
                /*'password' => Hash::make('password'),*/
            ]);
            $hosteller->create([
                'firstName' => $request['firstName_3'],
                'lastName' => $request['lastName_3'],
                'email' => $request->get('email')['portal'],
                'phone' => $request->get('phone')['portal'],
                'password' => Hash::make(str_random(10)),
                'role' => $request['role_3'],
                ]);

            $request->session()->put(['hostellersId'=> []]);
            foreach ($hosteller as $hostellerId) {
                $request->session()->put(['hostellersId' => $hostellerId->id,]);
            }
            /*$registerHostel = new HostelRegistration;
            $registerHostel-> firstOrCreate([
                'hosteller_id' => Auth::guard('hosteller')->user()->id,
                '1_basic_info' => true
            ]);*/

        }

        elseif ((($request->get('email')['manager']) != null) && is_null($request->get('email')['portal']))
        {

        $hosteller = new Hosteller;

            $hosteller->create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'email' => $request->get('email')['manager'],
            'phone' => $request->get('phone')['manager'],
            'password' => Hash::make(str_random(10)),
            'role' => $request['role'],

            /*'password' => Hash::make($request['password']),*/

        ]);
            $request->session()->put(['hostellersId'=> []]);
            foreach ($hosteller as $hostellerId) {
                $request->session()->put(['hostellersId' => $hostellerId->id,]);
            }
            /*$registerHostel = new HostelRegistration;
            $registerHostel->create([
                'hosteller_id' => Auth::guard('hosteller')->user()->id,
                '1_basic_info' => true
            ]);*/

        }
        elseif (is_null($request->get('email')['manager']) && ($request->get('email')['portal'] !=null))
        {

            $hostellers = new Hosteller;

            $hostellers->create([
                'firstName' => $request['firstName_3'],
                'lastName' => $request['lastName_3'],
                'email' => $request->get('email')['portal'],
                'phone' => $request->get('phone')['portal'],
                'password' => Hash::make(str_random(10)),
                'role' => $request['role_3'],

                /*'password' => Hash::make($request['password']),*/

            ]);
            /*$registerHostel = new HostelRegistration;
            $registerHostel->create([
                'hosteller_id' => Auth::guard('hosteller')->user()->id,
                '1_basic_info' => true
            ]);*/
            $request->session()->put(['hostellersId'=> []]);
            foreach ($hostellers as $hostellerId) {
                $request->session()->put(['hostellersId' => $hostellerId->id,]);
            }

        }
        elseif (is_null($request->get('email')['manager'] && $request->get('email')['portal'])) {
            // next if you want save one step progress to session use
           /* $registerHostel = new HostelRegistration;
            $registerHostel->create([
                'hosteller_id' => Auth::guard('hosteller')->user()->id,
                '1_basic_info' => true
            ]);*/
           return $this->saveProgress($request);
        }
            return $this->saveProgress($request);

    }


    public function rules(Request $request = null): array
    {


           return [
            'firstName' => 'string|min:3|max:255|nullable',
            'lastName' => 'string|min:3|max:255|nullable',
            'role' => 'sometimes',
            'firstName_3' => 'string|min:3|max:255|nullable',
            'lastName_3' => 'string|min:3|max:255|nullable',
            'email' => 'array|required',
            'email.manager' => 'uniqueManagerEmail:{$request->email.manager}',
            'email.portal' => 'uniqueManagerEmail:{$request->email.portal}',
            'phone' => 'present|array',
            'phone.manager' => 'uniqueManagerPhone:{$request->phone.manager}|nullable|digits:10',
            'phone.portal' => 'uniqueManagerPhone:{$request->phone.portal}|nullable|digits:10',
            'role_3' => 'sometimes',
           ];


    }

    public function messages()
    {
        return [
            'uniqueManagerEmail' => 'The email address already exist in our database',
            'uniqueManagerPhone' => 'The phone number already exist in our database',
            'array' => 'The email address already exist in our database',
            'phone.required' => 'The :attribute field is required.',
            'firstName_3' =>'The portal first name field must be provided',
            'lastName_3' =>'The portal last name field must be provided'
        ];
    }

    public function customAttributes()
    {
        return [

        ];
    }



}
