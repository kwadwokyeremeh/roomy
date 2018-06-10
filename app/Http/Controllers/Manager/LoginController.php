<?php

namespace myRoommie\Http\Controllers\Manager;

use Illuminate\Http\Request;
use myRoommie\Http\Controllers\Controller;

class LoginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest:manager')->except('logout');
    }

    public function showLoginForm()
    {
        return view('manager_auth.login');
    }

    public function authenticate(Request $request)

    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $credentials = $request->only(['email','password']);

        if (Auth::guard('manager')->attempt($credentials,$request->remember)){

            return redirect()->intended('m_dashboard');
        }
        return redirect()->back()->withErrors([
            'message' => 'Please check your credentials'
        ])->withInput($request->only('email','remember'));
    }
}
