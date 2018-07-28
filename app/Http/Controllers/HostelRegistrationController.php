<?php

namespace myRoommie\Http\Controllers;

//use myRoommie\Modules\HostelRegistration;
use Illuminate\Http\Request;

use Closure;
use myRoommie\Modules\Hostel\Block;
use myRoommie\Modules\HostelRegistration;
use Smajti1\Laravel\Step;
use Smajti1\Laravel\Wizard;
use Illuminate\Support\Facades\DB;
use myRoommie\Modules\Hostel\Hostel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Smajti1\Laravel\Exceptions\StepNotFoundException;
use myRoommie\Wizard\Steps\HostelRegistration\Instruction;
use myRoommie\Wizard\Steps\HostelRegistration\AddMediaStep;
use myRoommie\Wizard\Steps\HostelRegistration\PoliciesStep;
use myRoommie\Wizard\Steps\HostelRegistration\AmenitiesStep;
use myRoommie\Wizard\Steps\HostelRegistration\BasicInfoStep;
use myRoommie\Wizard\Steps\HostelRegistration\ConfirmationStep;
use myRoommie\Wizard\Steps\HostelRegistration\HostelDetailsStep;
use myRoommie\Wizard\Steps\HostelRegistration\LayoutAndPricingStep;
use myRoommie\Wizard\Steps\HostelRegistration\PaymentProtocolsStep;


class HostelRegistrationController extends Controller
{

    protected $wizard;



    public function __construct()
    {
        $this->middleware('auth:hosteller')->except('logout','destroy');
        /*$this->middleware('chrp');*/

        $this->wizard = new Wizard($this->steps, $sessionKeyName = 'user');



    }



public $steps = [
    'set-username-key'     => Instruction::class,
                              BasicInfoStep::class,
                              HostelDetailsStep::class,
                              AddMediaStep::class,
                              AmenitiesStep::class,
                              LayoutAndPricingStep::class,
                              PoliciesStep::class,
                              PaymentProtocolsStep::class,
                              ConfirmationStep::class,

];






public function wizard($step = null)
{


    try {
        if (is_null($step)) {
            $step = $this->wizard->firstOrLastProcessed();
        }
        else {
            $step = $this->wizard->getBySlug($step);
        }

    } catch (StepNotFoundException $e) {
        abort(404);
    }



    /*
     * Retrieve the hostel Id
     * */
    $hostellerId = Auth::guard('hosteller')->user()->id;



   /* if ($register2 !==true && $register5==true){
 $register2 =HostelRegistration::find($hostellerId)->where(['1_basic_info'=>true, '2_hostel_details'=>true, '3_add_media'=>false]);
    $register5 = HostelRegistration::find($hostellerId)->where(['4_amenities'=>true,'5_layout_n_pricing' =>false]);
        $hostelId = DB::table('hostel_registrations')->where([
            'hosteller_id'=> $hostellerId,
            '1_basic_info'=>true,
            '2_hostel_details'=>true,
            '3_add_media'=>true,
            '4_amenities'=>true,
            '5_layout_n_pricing' =>false,
            '6_policies' =>false,
            '7_payment' =>false,
            '8_confirmation' =>false,
        ])->orderByRaw('created_at - updated_at DESC')->value('hostel_id');


    }elseif ($register2 == true && $register5 !==true) {


        $hostelId = DB::table('hostel_registrations')->where([
                'hosteller_id'=> $hostellerId,
                '1_basic_info'=>true,
                '2_hostel_details'=>true,
                '3_add_media'=>false,
                '4_amenities'=>false,
                '5_layout_n_pricing' =>false,
                '6_policies' =>false,
                '7_payment' =>false,
                '8_confirmation' =>false,
            ])->orderByRaw('created_at - updated_at DESC')->value('hostel_id');

    }else{
        return view('hostelRegistration.master', compact('step','data'));
}*/
    if ($this->wizard->dataHas('02')|| $this->wizard->dataHas('04'))  {


       if (Session::exists('hosteller.hostel_id')) {
           $hostelId = session('hosteller.hostel_id');

       } elseif ((HostelRegistration::find($hostellerId)->where(['amenities' => true, 'layout_n_pricing' => false])) == true) {
           $hostelId = DB::table('hostel_registrations')->where([
               'hosteller_id' => $hostellerId,
               'basic_info' => true,
               'hostel_details' => true,
               'add_media' => true,
               'amenities' => true,
               'layout_n_pricing' => false,
               'policies' => false,
               'payment' => false,
               'confirmation' => false,
           ])->orderByRaw('created_at - updated_at DESC')->value('hostel_id');
       } else {
           $hostelId = DB::table('hostel_registrations')->where([
               'hosteller_id' => $hostellerId,
               'basic_info' => true,
               'hostel_details' => true,
               'add_media' => false,
               'amenities' => false,
               'layout_n_pricing' => false,
               'policies' => false,
               'payment' => false,
               'confirmation' => false,
           ])->orderByRaw('created_at - updated_at DESC')->value('hostel_id');
       }
       $data = Hostel::find($hostelId);

   }

    return view('hostelRegistration.master', compact('step','data'));
}







public function wizardPost(Request $request, $step = null)
{

    try {
        $step = $this->wizard->getBySlug($step);
    } catch (StepNotFoundException $e) {
        abort(404);
    }

    $request->session()->regenerate();
    $this->validate($request, $step->rules($request),$step->messages(),$step->customAttributes());
    $step->process($request);


    return redirect()->route('hostel.registration', [$this->wizard->nextSlug()]);
}



}
