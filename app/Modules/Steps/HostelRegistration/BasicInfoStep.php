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


        $messages = [
            'email.unique' => 'The email address already exist in our database',
            'array' => 'The email address already exist in our database',
            'required' => 'The :attribute field is required.',
        ];


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


            $registerHostel = new HostelRegistration;
            $registerHostel-> firstOrCreate([
                'hosteller_id' => Auth::guard('hosteller')->user()->id,
                '1_basic_info' => true
            ]);

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
            $registerHostel = new HostelRegistration;
            $registerHostel->create([
                'hosteller_id' => Auth::guard('hosteller')->user()->id,
                '1_basic_info' => true
            ]);

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
            $registerHostel = new HostelRegistration;
            $registerHostel->create([
                'hosteller_id' => Auth::guard('hosteller')->user()->id,
                '1_basic_info' => true
            ]);

        }
        elseif (is_null($request->get('email')['manager'] && $request->get('email')['portal'])) {
            // next if you want save one step progress to session use
            $registerHostel = new HostelRegistration;
            $registerHostel->create([
                'hosteller_id' => Auth::guard('hosteller')->user()->id,
                '1_basic_info' => true
            ]);
        }
            return $this->saveProgress($request);

    }


    public function rules(Request $request = null): array
    {


           return [
            'firstName' => 'sometimes|string|max:255',
            'lastName' => 'sometimes|string|max:255',
            'role' => 'sometimes',
            'firstName_3' => 'sometimes|string|max:255',
            'lastName_3' => 'sometimes|string|max:255',
            'email' => 'sometimes|array|email|unique:hostellers',
            'phone' => 'sometimes|array|max:10|unique:hostellers',
            'role_3' => 'sometimes',
           ];


    }





}
