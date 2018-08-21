<?php

namespace myRoommie\Http\Controllers\Hosteller;

use Illuminate\Http\Request;
use myRoommie\Http\Controllers\Controller;

class HostellerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:hosteller');
    }

    public function index()
    {
        return view('dashboard.hostelmanager.index');
    }

    public function reservationDate()
    {
        return view('dashboard.hostelmanager.reservation_settings');
    }
}
