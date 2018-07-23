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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Instruction extends Step
{

    public static $label = 'Instruction';
    public static $slug = '00';
    public static $view = 'hostelRegistration.00_instructions';

    public function process(Request $request)
    {
        /*
         *  Registration Instructions
         * */

        // next if you want save one step progress to session use
        $this->saveProgress($request);
    }

    public function rules(Request $request = null): array
    {
        return [
            //
        ];
    }

}
