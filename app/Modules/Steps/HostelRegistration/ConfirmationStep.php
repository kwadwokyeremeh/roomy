<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/13/18
 * Time: 10:06 PM
 */
namespace myRoommie\Wizard\Steps\HostelRegistration;

use Smajti1\Laravel\Step;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class ConfirmationStep extends Step
{

    public static $label = 'Confirmation';
    public static $slug = '08';
    public static $view = 'hostelRegistration.08_confirmation';

    public function process(Request $request)
    {
        $hostellerId = Auth::guard('hosteller')->user()->id;
        if (Session::has('hosteller.hostel_id')){
            $hostelId = session('hosteller.hostel_id');
        }else{
            $hostelId = DB::table('hostel_registrations')->where([
                'hosteller_id'=> $hostellerId,
                '1_basic_info'=>true,
                '2_hostel_details'=>true,
                '3_add_media'=>true,
                '4_amenities'=>true,
                '5_layout_n_pricing' =>true,
                '6_policies' =>true,
                '7_payment' =>true,
                '8_confirmation' =>false,
            ])->orderByRaw('created_at - updated_at DESC')->value('hostel_id');
        }
        // for example, create user

        // next if you want save one step progress to session use
        $this->saveProgress($request);
    }

    public function rules(Request $request = null): array
    {
        return [
            'username' => 'required|min:4|max:255',
        ];
    }

    public function progress()
    {
        return view('hostelRegistration._partials.08progress');
    }
}
