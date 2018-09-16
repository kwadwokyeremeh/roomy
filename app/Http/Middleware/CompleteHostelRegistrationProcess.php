<?php

namespace myRoommie\Http\Middleware;

use Closure;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use myRoommie\Modules\HostelRegistration;

class CompleteHostelRegistrationProcess
{


    public function boot(Router $router)
    {
        parent::boot($router);

        $router->model('hostel_registration', HostelRegistration::class);


    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $hostel_registration =HostelRegistration::where(['hosteller_id'=>Auth::guard('hosteller')->id()])->latest()->first();
        $step = $request->getRequestUri();

        switch ($step){
            case $step =='/hosteller/hostelRegistration/08':
                if (! isset($hostel_registration->confirmation)){
                    return redirect()->intended(route('hostel.registration','00'));
                }
                elseif ($hostel_registration->confirmation ==false && $hostel_registration->payment == true  && $hostel_registration->policies == true   && $hostel_registration->layout_n_pricing == true && $hostel_registration->amenities == true && $hostel_registration->add_media == true){
                    return $next($request);
                }else{
                    return redirect()->intended(route('hostel.registration','07'));
                }
                break;
            case $step == '/hosteller/hostelRegistration/07':
                if (! isset($hostel_registration->confirmation)){
                    return redirect()->intended(route('hostel.registration','00'));
                }
                elseif ($hostel_registration->confirmation ==false && $hostel_registration->payment == false  && $hostel_registration->policies == true   && $hostel_registration->layout_n_pricing == true && $hostel_registration->amenities == true && $hostel_registration->add_media == true){
                    return $next($request);
                }else{
                    return redirect()->intended(route('hostel.registration','06'));
                }
                break;
            case $step == '/hosteller/hostelRegistration/06':
                if (! isset($hostel_registration->confirmation)){
                    return redirect()->intended(route('hostel.registration','00'));
                }
                elseif ($hostel_registration->confirmation ==false && $hostel_registration->payment == false && $hostel_registration->policies == false   && $hostel_registration->layout_n_pricing == true && $hostel_registration->amenities == true && $hostel_registration->add_media == true){
                    return $next($request);
                }else{
                    return redirect()->intended(route('hostel.registration','05'));
                }
                break;
            case $step == '/hosteller/hostelRegistration/05' :
                if (! isset($hostel_registration->confirmation)){
                    return redirect()->intended(route('hostel.registration','00'));
                }
                elseif ($hostel_registration->confirmation == false  && $hostel_registration->payment==false  && $hostel_registration->policies ==false   && $hostel_registration->layout_n_pricing ==false && $hostel_registration->amenities == true && $hostel_registration->add_media == true){
                    return $next($request);
                }else{
                    return redirect()->intended(route('hostel.registration','04'));
                }
                break;
            case $step == '/hosteller/hostelRegistration/04':
                if (! isset($hostel_registration->confirmation)){
                    return redirect()->intended(route('hostel.registration','00'));
                }
                elseif ($hostel_registration->confirmation == false && $hostel_registration->payment==false  && $hostel_registration->policies ==false   && $hostel_registration->layout_n_pricing ==false && $hostel_registration->amenities ==false && $hostel_registration->add_media ==true){
                   return $next($request);
                }else{
                    return redirect()->intended(route('hostel.registration','03'));
                }
                break;
            case $step == '/hosteller/hostelRegistration/03':
                if (! isset($hostel_registration->confirmation)){
                    return redirect()->intended(route('hostel.registration','00'));
                }
                elseif ($hostel_registration->confirmation == false && $hostel_registration->payment==false  && $hostel_registration->policies ==false   && $hostel_registration->layout_n_pricing ==false && $hostel_registration->amenities ==false && $hostel_registration->add_media ==false && $hostel_registration->hostel_details == true){
                    return $next($request);
                }else{
                    return redirect()->intended(route('hostel.registration','02'));
                }
                break;
            case $step == '/hosteller/hostelRegistration/02':

                if (! isset( $hostel_registration->hostel_details)){
                    return $next($request);
                }else{
                    return redirect()->intended(route('hostel.registration','08'));
                }
                break;
            case $step == '/hosteller/hostelRegistration/01':
                if (! isset( $hostel_registration->hostel_details)){
                    return $next($request);
                }else{
                    return redirect()->intended(route('hostel.registration','08'));
                }
                break;
            case $step == '/hosteller/hostelRegistration/00':
                return $next($request);
                break;

            case $step == '/hosteller/hostelRegistration':
                return $next($request);
                break;
                default;
        }

        return abort(499);
    }
}
