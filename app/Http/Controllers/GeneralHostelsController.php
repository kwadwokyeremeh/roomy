<?php

namespace myRoommie\Http\Controllers;

use Illuminate\Http\Request;

class GeneralHostelsController extends Controller
{
    //
    public function index()
    {
        return view('generalHostels');
    }
}
