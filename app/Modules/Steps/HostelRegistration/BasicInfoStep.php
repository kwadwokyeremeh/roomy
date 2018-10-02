<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/17/18
 * Time: 12:07 PM
 */

namespace myRoommie\Wizard\Steps\HostelRegistration;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            $id1 =$hosteller->insertGetId([
                'firstName' => $request['firstName'],
                'lastName' => $request['lastName'],
                'email' => $request->get('email')['manager'],
                'phone' => $request->get('phone')['manager'],
                'password' => Hash::make(str_random(10)),
                'role' => $request['role'],
                'email_verified_at' => now()->toDateTimeString(),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),

            ]);

            $request->session()->put(['hostellersId'=> [$id1]]);

            DB::table('hostellers_creation_states')->insert([
                'creator'=>Auth::guard('hosteller')->id(),
                'created'=>$id1,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ]);

            $id2 =$hosteller->insertGetId([
                'firstName' => $request['firstName_3'],
                'lastName' => $request['lastName_3'],
                'email' => $request->get('email')['portal'],
                'phone' => $request->get('phone')['portal'],
                'password' => Hash::make(str_random(10)),
                'role' => $request['role_3'],
                'email_verified_at' => now()->toDateTimeString(),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
                ]);

            $request->session()->put(['hostellersId'=> [$id2]]);
            DB::table('hostellers_creation_states')->insert([
                'creator'=>Auth::guard('hosteller')->id(),
                'created'=>$id2,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ]);

            return true;

        }

        elseif ((($request->get('email')['manager']) != null) && is_null($request->get('email')['portal']))
        {

        $hosteller = new Hosteller;

            $id =$hosteller->insertGetId([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'email' => $request->get('email')['manager'],
            'phone' => $request->get('phone')['manager'],
            'password' => Hash::make(str_random(10)),
            'role' => $request['role'],
            'email_verified_at' => now()->toDateTimeString(),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),

            /*'password' => Hash::make($request['password']),*/

        ]);
            $request->session()->put(['hostellersId'=> [$id]]);
            DB::table('hostellers_creation_states')->insert([
                'creator'=>Auth::guard('hosteller')->id(),
                'created'=>$id,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ]);

            return true;
        }
        elseif (is_null($request->get('email')['manager']) && ($request->get('email')['portal'] !=null))
        {

            $hostellers = new Hosteller;

            $id =$hostellers->insertGetId([
                'firstName' => $request['firstName_3'],
                'lastName' => $request['lastName_3'],
                'email' => $request->get('email')['portal'],
                'phone' => $request->get('phone')['portal'],
                'password' => Hash::make(str_random(10)),
                'role' => $request['role_3'],
                'email_verified_at' => now()->toDateTimeString(),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),


            ]);

            $request->session()->put(['hostellersId'=> [$id]]);
            DB::table('hostellers_creation_states')->insert([
                'creator'=>Auth::guard('hosteller')->id(),
                'created'=>$id,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ]);

            return true;
        }
        elseif (is_null($request->get('email')['manager'] && $request->get('email')['portal'])) {


           $this->saveProgress($request);

           return true;
        }
            return true;//$this->saveProgress($request);

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
            'email.manager.unique_manager_email' => 'The email address already exists in our database',
            'email.portal.unique_manager_email' => 'The email address already exists in our database',
            'phone.manager.unique_manager_phone' => 'The phone number already exists in our database',
            'phone.portal.unique_manager_phone' => 'The phone number already exists in our database',
            'array' => 'The email address already exists in our database',
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
