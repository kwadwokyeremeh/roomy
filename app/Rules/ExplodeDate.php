<?php

namespace myRoommie\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Carbon;

class ExplodeDate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
         $d = explode(' - ',$value);
         $r[0] =Carbon::createFromFormat('m-d-Y',str_replace('/','-',$d[0]));
         $r[1] =Carbon::createFromFormat('m-d-Y',str_replace('/','-',$d[1]));

         if (($r[0] && $r[1]) !== false){
             $bool = true;
         }else{
             $bool = false;
         }

         return $bool;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
