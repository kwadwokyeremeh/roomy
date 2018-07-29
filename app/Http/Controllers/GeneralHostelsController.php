<?php

namespace myRoommie\Http\Controllers;

use Illuminate\Http\Request;
use myRoommie\Modules\Hostel\Hostel;

class GeneralHostelsController extends Controller
{

    public function __construct()
    {
        return $this->middleware('published');
    }

    public function index()
    {
        $allHostels = Hostel::where('published','=',0)
        ->with(['roomTypeMedia','roomDescription'])
        ->orderBy('name')
            /*where('status','=',1)*/
            ->paginate(15);

        return view('generalHostels',compact('allHostels'));
    }
}
