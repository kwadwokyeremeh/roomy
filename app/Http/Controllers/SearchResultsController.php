<?php

namespace myRoommie\Http\Controllers;

use Illuminate\Http\Request;

class SearchResultsController extends Controller
{
    //
    public function index()
    {
        return view('searchResults');
    }
}
