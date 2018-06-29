<?php

namespace myRoommie\Http\Controllers;

use Illuminate\Http\Request;

class HostelsController extends Controller
{
    /*
     * Show the individual hostel page
     * */
    public function showHostel()
    {
        return view('individualHostel.index');
    }
}
