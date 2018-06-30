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

class LayoutAndPricingStep extends Step
{

    public static $label = 'LayoutAndPricing';
    public static $slug = '05';
    public static $view = 'hostelRegistration.05_layoutAndPricing';

    public function process(Request $request)
    {
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
        return view('hostelRegistration._partials.05progress');
    }
}