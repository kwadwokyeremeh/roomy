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

    public function showHostelDetails()
    {
        return view('hostelRegistration.02_hostelDetails');
    }

    public function showAddMedia()
    {
        return view('hostelRegistration.03_addMedia');
    }

    public function showAmenities()
    {
        return view('hostelRegistration.04_amenities');
    }

    public function showLayoutAndPricing()
    {
        return view('hostelRegistration.05_layoutAndPricing');
    }

    public function showPolicies()
    {
        return view('hostelRegistration.06_policies');
    }

    public function showPaymentProtocols()
    {
        return view('hostelRegistration.07_paymentProtocols');
    }

    public function showConfirmation()
    {
        return view('hostelRegistration.08_confirmation');
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
