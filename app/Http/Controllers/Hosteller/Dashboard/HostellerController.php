<?php

namespace myRoommie\Http\Controllers\Hosteller\Dashboard;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use myRoommie\Hosteller;
use myRoommie\Http\Controllers\Controller;
use myRoommie\Http\Middleware\CheckHostellerStatus;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Modules\Hostel\Room;
use myRoommie\Rules\ExplodeDate;
use myRoommie\User;
use Spatie\MediaLibrary\Models\Media;
use myRoommie\Events\UserReservationDeleted;

class HostellerController extends Controller
{

    //
    public function __construct()
    {
        $this->middleware(['auth:hosteller']);

    }

    /**
     * Display the specified resource view.
     *
     * @return \Illuminate\Http\Response
     */
    public function lockscreen()
    {
        $hosteller = Hosteller::findOrFail(auth('hosteller')->id());
        if($hosteller->hostel->count() == 1){
            $hostel =$hosteller->hostel()->firstOrFail();
            return view('dashboard.hostelmanager.index',compact('hostel'));
        }

        return view('dashboard.hostelmanager.layout.lockscreen',compact('hosteller'));
    }

    /*
     *
     * */

    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function index($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.index',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function reservationDate($hostelName)
    {
        $hostel = Hosteller::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)
            ->with('reservationDate')->firstOrFail();
            //->firstOrFail();
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }

        return view('dashboard.hostelmanager.reservation_settings',compact('hostel'));
    }

    /**
     * Update the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function updateDate(Request $request, $hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        //dd($request['date']);
        $date = explode(' - ',$request['date']);

        $this->validate($request,['date'=> ['required',new ExplodeDate]]);
        //dd($hostel);

        if (isset($hostel->reservationDate)){
            $hostel->reservationDate()->update(['reservation_start_date'=>Carbon::createFromFormat('m-d-Y',str_replace('/','-',$date[0])),'reservation_end_date'=>Carbon::createFromFormat('m-d-Y',str_replace('/','-',$date[1]))]);
        }
        else{
            $hostel->reservationDate()->create(['reservation_start_date'=>Carbon::createFromFormat('m-d-Y',str_replace('/','-',$date[0])),'reservation_end_date'=>Carbon::createFromFormat('m-d-Y',str_replace('/','-',$date[1]))]);
        }

        session()->flash('date.success');

    return redirect()->back();
    }

    /**
     * Update the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function updateDuration(Request $request, $hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        $this->validate($request,['duration'=>'required|numeric']);
        if (isset($hostel->reservationDate)){
            $hostel->reservationDate()->update(['reservation_duration'=>$request['duration']]);
        }
        else{
            $hostel->reservationDate()->create(['reservation_duration'=>$request['duration']]);
        }
            session()->flash('duration.success');
            return redirect()->back();
    }

    /**
     * Show the specified resource.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response view
     */
    public function editContent($hostelName)
    {

        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.edit_content',compact('hostel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */

    public function updateContent(Request $request, $hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }


        if ($request->hasFile('front')){
            $this->validate($request,[
                'front' => 'required|image|mimes:jpeg,bmp,png,jpg',],
                ['front.required' =>'A front view of your hostel is required',]);
            $oldFile =$hostel->hostelViews->pluck('front');
            $newFile = $request->file('front')->store('hostels/'.$hostel->id.'/views','public');
            $hostel->hostelViews()->update(['front'=>$newFile]);
            Storage::delete($oldFile);

            //$hostel->getMedia('frontViews')->delete();
            $hostel->addMedia('storage/'.$newFile)->preservingOriginal()->toMediaCollection('frontViews');
            session()->flash('success.front','File Upload Successfully');
            return redirect()->back();
        }
        elseif ($request->hasFile('left')){
            $this->validate($request,[
                'left' => 'required|image|mimes:jpeg,bmp,png,jpg',],['left.required' =>'A left view of your hostel is required',]);
            $oldFile =$hostel->hostelViews->pluck('left');
            $newFile = $request->file('left')->store('hostels/'.$hostel->id.'/views','public');
            $hostel->hostelViews()->update(['left'=>$newFile]);
            Storage::delete($oldFile);

            //$hostel->getMedia('frontViews')->delete();
            $hostel->addMedia('storage/'.$newFile)->preservingOriginal()->toMediaCollection('leftViews');
            session()->flash('success.left','File Upload Successfully');
            return redirect()->back();
        }
        elseif ($request->hasFile('right')){
            $this->validate($request,[
                'right' => 'required|image|mimes:jpeg,bmp,png,jpg',],['right.required' =>'A right view of your hostel is required',]);
            $oldFile =$hostel->hostelViews->pluck('right');
            $newFile = $request->file('right')->store('hostels/'.$hostel->id.'/views','public');
            $hostel->hostelViews()->update(['right'=>$newFile]);
            Storage::delete($oldFile);

            //$hostel->getMedia('frontViews')->delete();
            $hostel->addMedia('storage/'.$newFile)->preservingOriginal()->toMediaCollection('rightViews');
            session()->flash('success.right','File Upload Successfully');
            return redirect()->back();
        }

        return redirect()->back();
    }


    /**
     * Delete the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */

    public function deleteRoomDescMedia(Request $request,$hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        //$this->validate($request,['roomTypeDel'=>'required|numeric']);
        $v = Validator::make($request->all(),['roomTypeDel'=>'required|numeric','roomType'=>'required|string',]);
        $v->validate();
        $v->after(function ($v){

        });
        if ($v->fails()){
            return redirect()->back()->withErrors([$v,]);
        }

        $v1 = $hostel->roomDescription()->whereRoomToken($request['roomType'])->firstOrFail();
        $v2 = $v1->media()->findOrFail($request['roomTypeDel']);
        $v2->delete();

        session()->flash('delete.success');
        return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function updateRoomDescMedia(Request $request,$hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }

        $this->validate($request,[
            'roomType' => 'required|image|mimes:jpeg,bmp,png,jpg','roomDesc'=> 'required|string']);

        $roomDesc =$hostel->roomDescription()->whereRoomToken($request['roomDesc'])->firstOrFail();
        $newFile = $request->file('roomType')->store('hostels/'.$hostel->id.'/rooms'.$roomDesc->id,'public');

        //$hostel->roomTypeMedia()->insert([]);

        //$hostel->getMedia('frontViews')->delete();
        $roomDesc->addMedia('storage/'.$newFile)->toMediaCollection('roomType');
        session()->flash('success.roomType','File Upload Successfully');
        return redirect()->back();

    }

    /**
     * Delete the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function deleteMisc(Request $request, $hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }

        $this->validate($request,['miscDel'=>'required|numeric']);
        $hostel->media()->findOrFail($request['miscDel'])->delete();
        session()->flash('delete,misc.success');
        return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function updateMisc(Request $request, $hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }

        $newFile = $request->file('misc')->store('hostels/'.$hostel->id.'/misc','public');

        $hostel->addMedia('storage/'.$newFile)->toMediaCollection('misc');
        session()->flash('success.misc','File Uploaded Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function color($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.color_picker',compact('hostel'));
    }

    /**
     * Show the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function roomSettings($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.room_settings',compact('hostel'));
    }

    /**
     * Update the specified resource in.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */

    public function updateRoomDesc(Request $request,$hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }

        $this->validate($request,['roomDesc.token.*'=> 'required|string',
            'roomDesc.roomType.*' =>  'required|string',
            'roomDesc.price.*' =>  'required|numeric',
            'roomDesc.beds.*' =>  'required|numeric',
            ]);

        $token =$request['roomDesc.token'];
        $roomType =$request['roomDesc.roomType'];
        $price =$request['roomDesc.price'];
        $beds   =$request['roomDesc.beds'];
        $arr = [];
        for ($i=0; $i< count($request['roomDesc.token']); $i++){
            array_push($arr,[
                'room_token'=>$token[$i],
                'room_type'=>$roomType[$i],
                'price'=>$price[$i],
                'number_of_beds'=>$beds[$i],
            ]);
            $hostel->roomDescription()->whereRoomToken($token[$i])->update([
                'room_type'=>$roomType[$i],
                'price'=>$price[$i],
                'number_of_beds'=>$beds[$i],
            ]);
        }
        session()->flash('success.roomDesc');
        return redirect()->back();
    }

    /**
     * Create the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function createRoomDesc(Request $request, $hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }

        $this->validate($request,[
            'roomType.*' =>  'required|string',
            'price.*' =>  'required|numeric',
            'beds.*' =>  'required|numeric',
        ]);


        $roomType =$request['roomType'];
        $price =$request['price'];
        $beds   =$request['beds'];
        $arr = [];
        for ($i=0; $i< count($request['roomType']); $i++) {
            array_push($arr, [
                'hostel_id' => $hostel->id,
                'room_token' => str_random(12),
                'room_type' => $roomType[$i],
                'price' => $price[$i],
                'number_of_beds' => $beds[$i],
            ]);
        }
            $hostel->roomDescription()->insert($arr);
        $token =collect($arr)->pluck('room_token')->first();

        session()->flash('roomDesc.added.success');
        return redirect()->back()->with('token',$token);

    }

    /**
     * Delete the specified resource in.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */

    public function deleteRoomDesc(Request $request, $hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }

        $this->validate($request,['token'=>'required|string','password'=>'required|string']);
        $hp =\auth('hosteller')->user()->getAuthPassword();

        if (Hash::check($request['password'],$hp)){
            $hostel->roomDescription()->whereRoomToken($request['token'])->delete();
        }else{
            return view('errors.401',compact('hostel'));
        }
        session()->flash('delete.roomDesc.success');
        return redirect()->back();
    }

    /**
     * Update the specified resource in.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Room $room
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function updateRoom(Request $request, $hostelName, Room $room)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }

        $this->validate($request,[
            'roomType'=> 'required|numeric',
            'roomName'=>    'required|string',
            'sexType'=> 'nullable|string',
            'room'=>'required|numeric'
        ]);
        $sexType =$room->changeSexType($request['sexType']);
        $hostel->rooms()->whereId($request['room'])
            ->update([
                'room_description_id'=>$request['roomType'],
                'name'=>$request['roomName'],
                'sex_type'=>$sexType,
            ]);

        session()->flash('room.update.success');
        return redirect()->back();
    }

    /**
     * Delete the specified resource in.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function deleteRoom(Request $request, $hostelName)
    {

    }
    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function paymentSettings($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.payment_settings',compact('hostel'));
    }

    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function occupants($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.occupants',compact('hostel'));
    }

    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function allotABed($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.allot_a_bed',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function vacateAnOccupant($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.vacate_occupant',compact('hostel'));
    }

    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
  public function changeOccupantRoom($hostelName)
    {

        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.change_occupant_room',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function paidList($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.paid_list',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function reservedBedList($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.reserved_bed_list',compact('hostel'));
    }

    /**
     * Un-reserve a user reservation
     * Same as edit a reservation
     *
     * @param \Illuminate\Http\Request $request
     * @param  $hostelName
     * @return \Illuminate\Http\Response
     *
     **/
    public function unReserveBed($hostelName, Request $request)
    {
        $this->validate($request,['prospectiveOccupant'=> 'required|email','reason'=>'required|string|min:10']);
        $reason = $request['reason'];
        $hostel = Hosteller::getHostel($hostelName);
        $user = User::whereEmail($request['prospectiveOccupant'])->firstOrFail();

        $unReserveBed = $hostel->reservations()->whereUserId($user->id)->latest()->firstOrFail();
        //Count if the number of occupants in the room is zero, unset the room gender
        $room =$unReserveBed['room_id'];
        event(new UserReservationDeleted($unReserveBed,$reason));
        $unReserveBed->delete();
        $count = $hostel->reservations()->whereRoomId($room)->count();
        if ($count == 0){
            $hostel->rooms()->whereId($room)->update(['sex_type'=>null]);
        }

        session()->flash('unreserve','You have successfully unreserved '.$user->full_name.' \'s bed');

        return redirect()->back();

    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function reviewsAndComments($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.r&c',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function owner($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal') || Gate::allows('isManager')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.hostelmanager',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function manager($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.hostelmanager',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function portal($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.hostelportal',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function docs($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.docs',compact('hostel'));
    }



    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function uploads($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.uploads',compact('hostel'));
    }



    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function notice($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.notice',compact('hostel'));
    }

    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function training($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.training',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function faqs($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.faqs',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function roomCancellationPolicy($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.room_cancellation',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function policy($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.hostel_policy',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function termOfService($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.terms_of_service',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function archives($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.archives',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
    public function addHostel($hostelName)
    {

        $hostel = Hosteller::getHostel($hostelName);
        if (Gate::allows('isPortal')){
            return view('errors.401',compact('hostel'));
        }
        return view('dashboard.hostelmanager.add_hostel',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
public function inbox($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.mailbox.mailbox',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
public function read($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.mailbox.read-mail',compact('hostel'));
    }


    /**
     * Display the specified resource view.
     *
     * @param $hostelName
     * @return \Illuminate\Http\Response
     */
public function compose($hostelName)
    {
        $hostel = Hosteller::getHostel($hostelName);
        return view('dashboard.hostelmanager.mailbox.compose',compact('hostel'));
    }



}
