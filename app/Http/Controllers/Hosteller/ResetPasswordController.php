<?php

namespace myRoommie\Http\Controllers\Hosteller;

use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Routing\Route;
use myRoommie\Hosteller;
use myRoommie\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;


class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect hostellers after resetting their password.
     *
     * @var string
     * @return Route
     */
    protected function redirectTo()
    {
        return route('dashboard.hostel');
    }

    protected $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:hosteller');
        $this->user = Auth::guard('hosteller');

    }

    protected function broker()
    {
        return Password::broker('hostellers');
     }

    protected function guard()
    {
        return Auth::guard('hosteller');
     }



    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetForm(Request $request, $token = null)
    {
        return view('hosteller.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }



}
