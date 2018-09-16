<?php

namespace myRoommie\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    //
    public function error()
    {
                abort(404);
    }
}
