<?php

namespace myRoommie\Http\Controllers;


use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use myRoommie\Modules\Hostel\Hostel;

class GeneralHostelsController extends Controller
{

    public function __construct()
    {
        //return $this->middleware('published');
    }

    public function index()
    {
        $allHostels = Hostel::published()
        ->with(['hostelViews','roomDescription'])
        ->orderBy('name')
            /*where('status','=',1)*/
            ->paginate(15);







        return view('generalHostels',compact('allHostels'));
    }
}
