<?php

namespace myRoommie\Http\Controllers;

use Illuminate\Http\Request;
use myRoommie\Modules\Hostel\Hostel;

class GeneralHostelsController extends Controller
{
    //
    public function index()
    {
        $allHostels = Hostel::all();

        return view('generalHostels',compact('allHostels'));
    }
}
