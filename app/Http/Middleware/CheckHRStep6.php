<?php

namespace myRoommie\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use myRoommie\Modules\HostelRegistration;

class CheckHRStep6
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $hostellerId = Auth::guard('hosteller')->user()->id;
        if (HostelRegistration::where(['hosteller_id'=>$hostellerId,'layout_n_pricing'=>false])){

            return redirect()->back();
        }
        return $next($request);
    }
}
