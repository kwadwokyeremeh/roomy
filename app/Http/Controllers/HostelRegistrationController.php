<?php

namespace myRoommie\Http\Controllers;

use myRoommie\Modules\HostelRegistration;
use Illuminate\Http\Request;

class HostelRegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:hosteller')->except('logout','destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showBasicInfo()
    {
        return view('hostelRegistration.01_basicInfo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \myRoommie\Modules\HostelRegistration  $hostelRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(HostelRegistration $hostelRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \myRoommie\Modules\HostelRegistration  $hostelRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(HostelRegistration $hostelRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \myRoommie\Modules\HostelRegistration  $hostelRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HostelRegistration $hostelRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \myRoommie\Modules\HostelRegistration  $hostelRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(HostelRegistration $hostelRegistration)
    {
        //
    }
}
