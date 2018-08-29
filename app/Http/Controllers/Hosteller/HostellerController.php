<?php

namespace myRoommie\Http\Controllers\Hosteller;

use Illuminate\Http\Request;
use myRoommie\Hosteller;
use myRoommie\Http\Controllers\Controller;
use myRoommie\Modules\Hostel\Hostel;

class HostellerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth:hosteller','hvs']);
    }

    public function lockscreen()
    {
        $hosteller = Hosteller::findOrFail(auth('hosteller')->id());

        return view('dashboard.hostelmanager.layout.lockscreen',compact('hosteller'));
    }

    /*
     *
     * */

    public function index($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.index',compact('hostel'));
    }


    public function reservationDate($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.reservation_settings',compact('hostel'));
    }
    public function editContent($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.edit_content',compact('hostel'));
    }

    public function color($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.color_picker',compact('hostel'));
    }

    public function roomSettings($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.room_settings',compact('hostel'));
    }

    public function paymentSettings($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.payment_settings',compact('hostel'));
    }

    public function occupants($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.occupants',compact('hostel'));
    }

    public function allotABed($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.allot_a_bed',compact('hostel'));
    }


    public function vacateAnOccupant($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.vacate_occupant',compact('hostel'));
    }

  public function changeOccupantRoom($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.change_occupant_room',compact('hostel'));
    }


    public function paidList($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.paid_list',compact('hostel'));
    }


    public function reservedBedList($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.reserved_bed_list',compact('hostel'));
    }


    public function reviewsAndComments($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.r&c',compact('hostel'));
    }


    public function owner($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.hostelmanager',compact('hostel'));
    }


    public function manager($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.hostelmanager',compact('hostel'));
    }


    public function portal($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.hostelportal',compact('hostel'));
    }


    public function docs($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.docs',compact('hostel'));
    }



    public function uploads($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.uploads',compact('hostel'));
    }



    public function notice($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.notice',compact('hostel'));
    }

    public function training($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.training',compact('hostel'));
    }


    public function faqs($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.faqs',compact('hostel'));
    }


    public function roomCancellationPolicy($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.room_cancellation',compact('hostel'));
    }


    public function policy($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.hostel_policy',compact('hostel'));
    }


    public function termOfService($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.terms_of_service',compact('hostel'));
    }


    public function archives($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.archives',compact('hostel'));
    }


    public function addHostel($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.add_hostel',compact('hostel'));
    }


public function inbox($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.mailbox.mailbox',compact('hostel'));
    }


public function read($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.mailbox.read-mail',compact('hostel'));
    }


public function compose($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
        return view('dashboard.hostelmanager.mailbox.compose',compact('hostel'));
    }



}
