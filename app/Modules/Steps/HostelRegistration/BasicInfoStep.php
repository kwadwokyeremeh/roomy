<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/17/18
 * Time: 12:07 PM
 */

namespace myRoommie\Wizard\Steps\HostelRegistration;

use Smajti1\Laravel\Step;
use Illuminate\Http\Request;


class BasicInfoStep extends Step

{
    public static $label = 'BasicInfoStep';
    public static $slug = '01';
    public static $view = 'hostelRegistration.01_basicInfo';

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
}
