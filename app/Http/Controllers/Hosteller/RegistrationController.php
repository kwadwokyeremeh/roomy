<?php

namespace myRoommie\Http\Controllers\Hosteller;

use Illuminate\Support\Facades\Auth;
use myRoommie\Hosteller;
use Illuminate\Http\Request;
use myRoommie\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Contracts\Auth\Authenticatable;

class RegistrationController extends Controller
{
    //
    public function showRegistrationform()
    {
        return view('hosteller.register');
    }

    /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new hostellers as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */


    /**
     * Where to redirect hostellers after registration.
     *
     * @var string
     */
    protected $redirectTo = '/hosteller';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:hosteller');
    }


    /**
     * Create a new hostellers instance after a valid registration.
     *
     * @param  Request $request
     * @return \myRoommie\Hosteller
     */
    protected function register(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:hostellers',
            'phone' => 'required|max:10|unique:hostellers',
            'role' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'g-recaptcha-response' => 'required|captcha',
        ]);

         $hosteller = new Hosteller;
        $hosteller->create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),
        ]);

        $credentials = $request->only(['email','password']);


        Auth::guard('hosteller')->attempt($credentials, $remember =false);

        return redirect()->route('hostel.registration','00');
    }



}







