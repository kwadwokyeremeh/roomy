<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/13/18
 * Time: 10:06 PM
 */
namespace myRoommie\Wizard\Steps\HostelRegistration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Modules\Hostel\HostelView;
use myRoommie\Modules\Hostel\Misc;
use myRoommie\Modules\Hostel\RoomDescription;
use myRoommie\Modules\Hostel\RoomTypeMedia;
use Smajti1\Laravel\Step;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;




class AddMediaStep extends Step
{


    public static $label = 'AddMedia';
    public static $slug = '03';
    public static $view = 'hostelRegistration.03_addMedia';

    public function process(Request $request)
    {

        /*
         * Retrieve the hostel id from the session
         * */
        $hostellerId = Auth::guard('hosteller')->user()->id;
        if ($request->session()->has('hosteller.hostel_id')==true){
            $hostelId = session('hosteller.hostel_id');
        }else{
            $hostelId = DB::table('hostel_registrations')->where([
                'hosteller_id'=> $hostellerId,
                'basic_info'=>true,
                'hostel_details'=>true,
                'add_media'=>false,
                'amenities'=>false,
                'layout_n_pricing' =>false,
                'policies' =>false,
                'payment' =>false,
                'confirmation' =>false,
            ])->orderByRaw('created_at - updated_at DESC')->value('hostel_id');
        }

        $hostel = Hostel::find($hostelId);
        Storage::makeDirectory('hostels/'.$hostelId);




        /*
         * Save the hostel view images into the database
         * */

            $hostelView = new HostelView;
            $hostelView->hostel_id = $hostelId;
            $hostelView->front = $request->file(['images'])['views']['front']->store('hostels/'.$hostelId.'/views','public');
            $hostelView->right = $request->file(['images'])['views']['right']->store('hostels/'.$hostelId.'/views','public');
            $hostelView->left = $request->file(['images'])['views']['left']->store('hostels/'.$hostelId.'/views','public');
            if ($request->hasFile('video')){
                $hostelView->video = $request->file(['video'])->store('hostels/'.$hostelId,'public');
            }
            $hostelView->save();


        $hostel->addMedia('storage/'.$hostelView->front)->preservingOriginal()->toMediaCollection('frontViews');
        $hostel-> addMedia('storage/'.$hostelView->left)->preservingOriginal()->toMediaCollection('sideViews');
        $hostel-> addMedia('storage/'.$hostelView->right)->preservingOriginal()->toMediaCollection('rightViews');


            /*
             * Save the hostel room type media
             * */
            $roomMedia =new RoomTypeMedia;
            $roomTypes =$request->file(['images'])['room'];
            $arr =[];

            foreach ($roomTypes as $key => $roomType) {

                foreach ($roomType as $media){
                    array_push($arr,[
                        /*'hostel_id' => $hostelId,*/
                        'room_description_id' =>$key,
                        /*'room_type' => $key,*/
                        'image'     => $media->store('hostels/'.$hostelId.'/rooms/'.$key,'public'),
                    ]);
                }


            }
            $roomMedia->insert($arr);

            foreach ($arr as $path){
                    $hostel->addMedia('storage/' . $path['image'])->preservingOriginal()->toMediaCollection('roomType');
            }


        /*
         * Save any other images associated with the hostel
         * */
        if ($request->hasFile('images.others')) {
            $misc = new Misc;
            $others = $request->file(['images'])['others'];
            $arr1 = [];
            for ($i = 0; $i < count($others); $i++) {
                array_push($arr1, [
                    'title' => str_random(8),
                    'image' => $others[$i]->store('hostels/'.$hostelId.'/misc','public'),
                    'hostel_id' => $hostelId,
                ]);
            }

            $misc->insert($arr1);
            foreach ($arr1 as $path1){

                    $hostel->addMedia('storage/'.$path1['image'])->preservingOriginal()->toMediaCollection('misc');

        }


        }

        // next if you want save one step progress to session use



        DB::table('hostel_registrations')
            ->where(['hosteller_id'=> $hostellerId,
                     'hostel_id' =>$hostelId])
            ->update(['add_media' => true]);
        $this->saveProgress($request);
        return true;
    }

    public function rules(Request $request = null): array
    {
        return [
            'images.views.front' => 'required|image|mimes:jpeg,bmp,png,jpg',
            'images.views.left' => 'required|image|mimes:jpeg,bmp,png,jpg',
            'images.views.right' => 'required|image|mimes:jpeg,bmp,png,jpg',
            'images.room.*.*' => 'required|image|mimes:jpeg,bmp,png,jpg',
            'images.others.*' => 'image|mimes:jpeg,bmp,png,jpg',
            'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4,video/webm',
        ];
    }

/*$hostelId = session('hosteller.hostel_id');
$destinationPath = public_path('/'.$hostelId);
$thumbnailPath = public_path('/'.$hostelId.'/thumbnails');
Storage::makeDirectory('public/'.$hostelId.'/thumbnails');
$others = $request->file(['images'])['others'];
foreach ($others as $other) {

    $fileExtension = $other->getClientOriginalExtension();
    $fileName = time().'.'.$fileExtension;
    $thumbnail = Image::make($other->getRealPath());
    $thumbnail->resize(100,100,function ($constraint){
        $constraint->aspectRatio();
    });
    Storage::disk('local')->put( $thumbnail,$thumbnailPath);
    Storage::disk('local')->put( $fileName,$destinationPath);
$path = $other->store($hostelId.'/misc');
    $real=Storage::disk('local')->put($hostelId.'/misc',$other);
    Storage::putFile($other, new File($hostelId.'/misc'), 'public');
}*/

    public function messages()
    {
        return [
            'images.views.front' =>'A front view of your hostel is required',
            'images.views.left' =>'A left view of your hostel is required',
            'images.views.right' =>'A right view of your hostel is required',
        ];
    }

    public function customAttributes()
    {
        return [

        ];
    }
}
