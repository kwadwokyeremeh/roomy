<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/17/18
 * Time: 12:07 PM
 */

namespace myRoommie\Wizard\Steps\HostelRegistration;

use Smajti1\Laravel\Step;
use Illuminate\Http\Request;
use myRoommie\Hosteller;


class BasicInfoStep extends Step

{
    public static $label = 'BasicInfoStep';
    public static $slug = '01';
    public static $view = 'hostelRegistration.01_basicInfo';

    public function process(Request $request)
    {
        if (!($request['email']==null)) {
            //  create user
            $hosteller = new Hosteller;
            $hosteller->create([
                'firstName' => $request['firstName'],
                'lastName' => $request['lastName'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'role' => $request['role'],
                /*'password' => Hash::make('password'),*/
            ]);

        }elseif (!($request['email_3']==null)){

        $hosteller = new Hosteller;
            $hosteller->create([
            'firstName' => $request['firstName_3'],
            'lastName' => $request['lastName_3'],
            'email' => $request['email_3'],
            'phone' => $request['phone_3'],
            'role' => $request['role_3'],
            /*'password' => Hash::make($request['password']),*/

        ]);

        }else{
        // next if you want save one step progress to session use
        return $this->saveProgress($request);
    }
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

            'firstName_3' => 'nullable|string|max:255',
            'lastName_3' => 'nullable|string|max:255',
            'email_3' => 'nullable|string|email|max:255|unique:hostellers',
            'phone_3' => 'nullable|max:10|unique:hostellers',
            'role_3' => 'nullable',
           ];


    }
}
