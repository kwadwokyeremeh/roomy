<?php

namespace myRoommie\Http\Controllers;

use Illuminate\Http\Request;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Modules\Hostel\HostelView;

class IndividualHostelController extends Controller
{
    protected $hostel;
    /*
     * Show the individual hostel page
     * */
    public function showHostel($hostelName)
    {
        $hostel = Hostel::whereSlug($hostelName)
            //->orWhere('slug', $hostelName)
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
        

        /*$hostelView =HostelView::whereHostelId($hostel->id)->firstOrFail()
            ->addMedia('storage/'.implode(',',array_values($hostel->hostelViews->pluck('front')->toArray())))
            ->preservingOriginal()
            ->toMediaCollection('slider-front');
        dd($hostelView);*/

        return view('individualHostel.index',compact('hostel','roomsAvailable','bedsAvailable','maleBeds','femaleBeds'));
    }

}
