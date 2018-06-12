<?php

namespace myRoommie\Http\Controllers\Hosteller;

use Illuminate\Http\Request;
use myRoommie\Http\Controllers\Controller;

class HostellerController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.hostelmanager.index');
    }
}
