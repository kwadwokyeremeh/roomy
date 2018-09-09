<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/13/18
 * Time: 10:06 PM
 */
namespace myRoommie\Wizard\Steps\HostelRegistration;

use myRoommie\Modules\HostelRegistration;
use Smajti1\Laravel\Step;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PoliciesStep extends Step
{

    public static $label = 'Policies';
    public static $slug = '06';
    public static $view = 'hostelRegistration.06_policies';



    public function process(Request $request)
    {
        $hostellerId = Auth::guard('hosteller')->user()->id;
        if ($request->session()->has('hosteller.hostel_id')==true){
            $hostelId = session('hosteller.hostel_id');
        }else{
            $hostelId = DB::table('hostel_registrations')->where([
                'hosteller_id'=> $hostellerId,
                'basic_info'=>true,
                'hostel_details'=>true,
                'add_media'=>true,
                'amenities'=>true,
                'layout_n_pricing' =>true,
                'policies' =>false,
                'payment' =>false,
                'confirmation' =>false,
            ])->orderByRaw('created_at - updated_at DESC')->value('hostel_id');
        }
        // for example, create user

        // next if you want save one step progress to session use
        if (HostelRegistration::where(['hosteller_id'=>$hostellerId,'layout_n_pricing'=>false])){
            redirect()->back();
        }
        $this->saveProgress($request);
        return true;
    }

    public function rules(Request $request = null): array
    {
        return [

        ];
    }

    public function messages()
    {
        return [

        ];
    }

    public function customAttributes()
    {
        return [

        ];
    }
}
