<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/17/18
 * Time: 12:07 PM
 */

namespace myRoommie\Wizard\Steps\HostelRegistration;


use Illuminate\Support\Facades\Auth;
use myRoommie\Modules\HostelRegistration;
use Smajti1\Laravel\Step;
use Illuminate\Http\Request;
use myRoommie\Hosteller;
use Illuminate\Support\Facades\Hash;


class BasicInfoStep extends Step

{
    public static $label = 'BasicInfoStep';
    public static $slug = '01';
    public static $view = 'hostelRegistration.01_basicInfo';

    public function process(Request $request)
    {
        if (!is_null($request['email'] && $request['email_3'])) {
            //  create user
            $hosteller = new Hosteller;
            $hosteller->create([
                'firstName' => $request['firstName'],
                'lastName' => $request['lastName'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'password' => Hash::make(str_random(10)),
                'role' => $request['role'],
                /*'password' => Hash::make('password'),*/
            ]);
            $hosteller->create([
                'firstName' => $request['firstName_3'],
                'lastName' => $request['lastName_3'],
                'email' => $request['email_3'],
                'phone' => $request['phone_3'],
                'password' => Hash::make(str_random(10)),
                'role' => $request['role_3'],
                ]);


            $registerHostel = new HostelRegistration;
            $registerHostel-> firstOrCreate([
                'hosteller_id' => Auth::guard('hosteller')->user()->id,
                '1_basic_info' => true
            ]);

        }

        elseif (!(is_null($request['email'])) && is_null($request['email_3']))
        {

        $hosteller = new Hosteller;

            $hosteller->create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'email' => $request['email'],
            'phone' => $request['phone'],
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
        elseif (is_null($request['email']) && !is_null($request['email_3']))
        {

            $hostellers = new Hosteller;

            $hostellers->create([
                'firstName' => $request['firstName_3'],
                'lastName' => $request['lastName_3'],
                'email' => $request['email_3'],
                'phone' => $request['phone_3'],
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
        else {
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
            'firstName' => 'nullable|string|max:255',
            'lastName' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255|unique:hostellers',
            'phone' => 'nullable|max:10|unique:hostellers',
            'role' => 'nullable',

            /* Validate hostel portal if available*/

            /*'firstName_3' => 'nullable|string|max:255',
            'lastName_3' => 'nullable|string|max:255',
            'email_3' => 'nullable|string|email|max:255|unique:hostellers',
            'phone_3' => 'nullable|max:10|unique:hostellers',
            'role_3' => 'nullable',*/
           ];


    }

    public function progress()
    {
        return view('hostelRegistration._partials.01progress');
    }
}
