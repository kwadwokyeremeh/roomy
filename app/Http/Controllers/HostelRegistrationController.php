<?php

namespace myRoommie\Http\Controllers;

use myRoommie\Modules\HostelRegistration;
use Illuminate\Http\Request;
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


class HostelRegistrationController extends Controller
{

    protected $wizard;


    public function __construct()
    {
        $this->middleware('auth:hosteller')->except('logout','destroy');

        $this->wizard = new Wizard($this->steps, $sessionKeyName = 'user');
    }



    public $steps = [
        'set-username-key' => BasicInfoStep::class,
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

    return view('hostelRegistration.master', compact('step'));
}

public function wizardPost(Request $request, $step = null)
{

    try {
        $step = $this->wizard->getBySlug($step);
    } catch (StepNotFoundException $e) {
        abort(404);
    }

    $this->validate($request, $step->rules($request));
    $step->process($request);

    return redirect()->route('hostel.registration', [$this->wizard->nextSlug()]);
}



}
