<?php

namespace myRoommie\Http\Controllers\Hosteller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use myRoommie\Hosteller;
use myRoommie\Http\Controllers\Controller;

class LoginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest:hosteller')->except('logout','destroy');
    }

    public function showLoginForm()
    {
        return view('hosteller.login');
    }

    public function authenticate(Request $request)

    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $credentials = $request->only(['email','password']);

        if (Auth::guard('hosteller')->attempt($credentials,$request->remember)){

            return redirect()->intended(route('dashboard.hostelmanager'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function destroy()
    {
        auth()->guard('hosteller')->logout();
        return redirect()->home();
    }

}
