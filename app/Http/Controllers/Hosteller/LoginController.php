<?php

namespace myRoommie\Http\Controllers\Hosteller;


use myRoommie\Repository\AuthenticatesHostellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use myRoommie\Hosteller;
use myRoommie\Http\Controllers\Controller;

class LoginController extends Controller
{

    use AuthenticatesHostellers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/hosteller';


    public function __construct()
    {
        $this->middleware('guest:hosteller')->except('logout', 'destroy');
    }

    public function showLoginForm()
    {
        return view('hosteller.login');
    }

    public function authenticate(Request $request)

    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        } else {

        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('hosteller')->attempt($credentials, $request->remember)) {

            /*
             * Check to see if hosteller's status is not active
             * if active redirect to the hosteller's dashboard
             * if inactive redirect hosteller to the hostel registration
             * */
            /*if (! (Auth::guard('hosteller')->user()->status == true)){

            return redirect()->intended(route('hostel.registration'));
       }
        else{*/
            return redirect()->intended(route('dashboard.hostel'));

            /* }*/
        }

        return redirect()->back()
            ->withInput($request->only('email', 'remember')
            )->withErrors(['email' => 'These credentials do not match our records']);
    }
}

    public function destroy()
    {
        auth()->guard('hosteller')->logout();
        return redirect()->home();
    }


}
