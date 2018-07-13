<?php

namespace myRoommie\Http\Controllers;

use Illuminate\Http\Request;
use myRoommie\Modules\Hostel\Hostel;

class IndividualHostelController extends Controller
{
    /*
     * Show the individual hostel page
     * */
    public function showHostel($hostelName)
    {
        $hostel = Hostel::findOrFail($hostelName);
        return view('individualHostel.index',compact('hostel'));
    }
}
