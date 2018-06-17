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

class PoliciesStep extends Step
{

    public static $label = 'Policies';
    public static $slug = '06';
    public static $view = 'hostelRegistration.06_Policies';

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
