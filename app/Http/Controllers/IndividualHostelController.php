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
        $hostel = Hostel::where('id', $hostelName)
            ->orWhere('slug', $hostelName)
            ->with([
                'services',
                'food','utilities',
                'policies','roomTypeMedia',
                'miscellaneous','hostelViews',
                'roomDescription','entertainment','rooms'])
            ->firstOrFail();
        $roomsAvailable =count($hostel->rooms->where('status','=',0));
        $bedsAvailable  =count($hostel->beds->where('status','=',0));
        $maleBeds   =count($hostel->beds);
        $femaleBeds  =count($hostel->beds);

        return view('individualHostel.index',compact('hostel','roomsAvailable','bedsAvailable','maleBeds','femaleBeds'));
    }
}
