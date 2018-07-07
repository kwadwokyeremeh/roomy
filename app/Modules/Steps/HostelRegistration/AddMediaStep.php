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
use Illuminate\View\View;
use Intervention\Image\Facades\Image;
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
        if (Session::has('hosteller.hostel_id')){
            $hostelId = session('hosteller.hostel_id');
        }else{
            $hostelId = DB::table('hostel_registrations')->where([
                'hosteller_id'=> $hostellerId,
                '1_basic_info'=>true,
                '2_hostel_details'=>true,
                '3_add_media'=>false,
                '4_amenities'=>false,
                '5_layout_n_pricing' =>false,
                '6_policies' =>false,
                '7_payment' =>false,
                '8_confirmation' =>false,
            ])->orderByRaw('created_at - updated_at DESC')->value('hostel_id');
        }

        $hostel = Hostel::find($hostelId);
        Storage::makeDirectory($hostelId);




        /*
         * Save the hostel view images into the database
         * */

            $hostelView = new HostelView;
            $hostelView->hostel_id =$hostelId;
            $hostelView->front =$request->file(['images'])['views']['front']->store($hostelId.'/views');
            $hostelView->right =$request->file(['images'])['views']['right']->store($hostelId.'/views');
            $hostelView->left =$request->file(['images'])['views']['left']->store($hostelId.'/views');
            if ($request->hasFile('video')){
                $hostelView->video =$request->file(['video'])->store($hostelId);
            }
            $hostelView->save();


            /*
             * Save the hostel room type media
             * */
            $roomMedia =new RoomTypeMedia;
            $roomTypes =$request->file(['images'])['room'];
            $arr =[];

            foreach ($roomTypes as $key => $roomType) {

                foreach ($roomType as $media){
                    array_push($arr,[
                        'hostel_id' => $hostelId,
                        'room_type' => $key,
                        'image'     => $media->store($hostelId.'/rooms'),
                    ]);
                }

            }  $roomMedia->insert($arr);


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
                    'image' => $others[$i]->store($hostelId.'/misc'),
                    'hostel_id' => $hostelId,
                ]);
            }
            $misc->insert($arr1);
        }

        // next if you want save one step progress to session use



        DB::table('hostel_registrations')
            ->where(['hosteller_id'=> $hostellerId,
                     'hostel_id' =>$hostelId])
            ->update(['3_add_media' => true]);
        $this->saveProgress($request);
    }

    public function rules(Request $request = null): array
    {
        return [
            'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4,video/webm',
            'images' => 'required|array',
            'images.*' => 'mimes:jpeg,bmp,png',
            'images.room.*' => 'mimes:jpeg,bmp,png',
            'images.views.*' => 'mimes:jpeg,bmp,png',
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


}
