<?php

namespace myRoommie\Http\Controllers;

//use myRoommie\Modules\HostelRegistration;
use Illuminate\Http\Request;

use myRoommie\Modules\Hostel\Hostel;
use Smajti1\Laravel\Wizard;
use myRoommie\Wizard\Steps\HostelRegistration\BasicInfoStep;
use myRoommie\Wizard\Steps\HostelRegistration\HostelDetailsStep;
use myRoommie\Wizard\Steps\HostelRegistration\AddMediaStep;
use myRoommie\Wizard\Steps\HostelRegistration\AmenitiesStep;
use myRoommie\Wizard\Steps\HostelRegistration\LayoutAndPricingStep;
use myRoommie\Wizard\Steps\HostelRegistration\PoliciesStep;
use myRoommie\Wizard\Steps\HostelRegistration\PaymentProtocolsStep;
use myRoommie\Wizard\Steps\HostelRegistration\ConfirmationStep;
use Smajti1\Laravel\Step;
use Smajti1\Laravel\Exceptions\StepNotFoundException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HostelRegistrationController extends Controller
{

    protected $wizard;



    public function __construct()
    {
        $this->middleware('auth:hosteller')->except('logout','destroy');

        $this->wizard = new Wizard($this->steps, $sessionKeyName = 'user');



    }



    public $steps = [
    'set-username-key'     => BasicInfoStep::class,
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
    if ($this->wizard->dataHas('02')) {
    /*$this->wizard->dataGet('02');
            $data = array_flatten(
                        array_except(
                            array_pluck($this->wizard->data(),'roomType.roomType'),[1,2]));*/

        $hostellerId = Auth::guard('hosteller')->user()->id;
        if (Session::has('hosteller.hostel_id')){
            $hostelId = session('hosteller.hostel_id');
        }else{
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
    $this->validate($request, $step->rules($request));
    $step->process($request);


    return redirect()->route('hostel.registration', [$this->wizard->nextSlug()]);
}



}
