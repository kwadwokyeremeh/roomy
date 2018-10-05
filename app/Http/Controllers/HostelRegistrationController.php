<?php

namespace myRoommie\Http\Controllers;

//use myRoommie\Modules\HostelRegistration;
use Illuminate\Http\Request;

use Closure;
use myRoommie\Hosteller;
use myRoommie\Http\Middleware\CompleteHostelRegistrationProcess;
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
        $this->middleware(['auth:hosteller',])->except('logout','destroy');
        $this->middleware(CompleteHostelRegistrationProcess::class);
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






public function wizard($step = null,Hosteller $id)
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


    if ((request()->getRequestUri() ==='/hosteller/hostelRegistration/03') || (request()->getRequestUri() === '/hosteller/hostelRegistration/05')){

       if (request()->session()->has('hosteller.hostel_id')==true) {
           $hostelId = session('hosteller.hostel_id');

       } elseif ((HostelRegistration::where(['hosteller_id' => $hostellerId,'amenities' => true, 'layout_n_pricing' => false])) == true) {
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
    $validator = $this->validate($request, $step->rules($request),$step->messages(),$step->customAttributes());

    $a = $step->process($request);
    if ($a == true){
        return redirect()->route('hostel.registration', [$this->wizard->nextSlug()]);
    }
    return redirect()->back()
        ->withErrors(['message'=>'The data provided is inconsistent']); //route('hostel.registration',[$this->wizard->lastProcessedIndex()]);
    }




    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->wizard->getBySlug(05) ==true) {
                /*
        *  Check for data consistency
        *
        *
        * */

                $blocks = request()->get('block');
                $unsortedFloors = request()->get('floor');
                $unsortedRooms = request()->get('room');
                [$fk,$floorValues]=array_divide($unsortedFloors);
                [$fk1,$rValues] = array_divide($unsortedRooms);

                //dd($blocks,$fk,$fk1,$request->all(),$floorValues,$request['floor.*.*']);
                if ( (count($blocks)===count($fk)) && (count($fk)===count($fk1)) )
                {
                    return;
                }else{
                    $validator->errors()->add('field', 'The data provided is inconsistent');
                }

            }
        });
    }

}
