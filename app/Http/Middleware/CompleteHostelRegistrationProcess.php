<?php

namespace myRoommie\Http\Middleware;

use Closure;
use Smajti1\Laravel\Wizard;
use myRoommie\Http\Controllers\HostelRegistrationController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use myRoommie\Hosteller;
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
     * @param  Wizard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $hostel_registration =HostelRegistration::where(['hosteller_id'=>Auth::guard('hosteller')->id()])->first();
        $step = \Smajti1\Laravel\Step::$slug;
        switch ($step){
            case '08':
                if ($hostel_registration->confirmation ==false){
                    return redirect()->intended(route('hostel.registration'));
                }
                break;
            case '07':
                if ($hostel_registration->payment ==false){
                    return redirect()->intended(route('hostel.registration','06'));
                }
                break;
            case '06':
                if ($hostel_registration->policies ==false){
                    return redirect()->intended(route('hostel.registration','05'));
                }
                break;
            case '05' :
                if ($hostel_registration->layout_n_pricing == false ){
                    return redirect()->intended(route('hostel.registration','04'));
                }
                break;
            case '04':
                if ($hostel_registration->amenities == false){
                    return redirect()->intended(route('hostel.registration','03'));
                }
                break;
            case '03':
                if ($hostel_registration->add_media == false){
                    return redirect()->intended(route('hostel.registration','02'));
                }
                break;
            case '02':
                if ($hostel_registration->hostel_details == false){
                    return redirect()->intended(route('hostel.registration'));
                }
                default;
        }



        /*




        */

        return $next($request);
    }
}
