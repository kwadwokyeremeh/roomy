<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/13/18
 * Time: 10:06 PM
 */
namespace myRoommie\Wizard\Steps\HostelRegistration;

use myRoommie\Modules\Hostel\Facility;
use myRoommie\Modules\Hostel\Food;
use myRoommie\Modules\Hostel\Service;
use myRoommie\Modules\Hostel\Utility;
use myRoommie\Modules\Hostel\Entertainment;
use Smajti1\Laravel\Step;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AmenitiesStep extends Step
{

    public static $label = 'Amenities';
    public static $slug = '04';
    public static $view = 'hostelRegistration.04_amenities';

    public function process(Request $request)
    {
        $hostellerId = Auth::guard('hosteller')->user()->id;
        if (Session::has('hosteller.hostel_id')){
            $hostelId = session('hosteller.hostel_id');
        }else{
            $hostelId = DB::table('hostel_registrations')->where([
                'hosteller_id'=> $hostellerId,
                'basic_info'=>true,
                'hostel_details'=>true,
                'add_media'=>true,
                'amenities'=>false,
                'layout_n_pricing' =>false,
                'policies' =>false,
                'payment' =>false,
                'confirmation' =>false,
            ])->orderByRaw('created_at - updated_at DESC')->value('hostel_id');
        }


        /*
         * Facilities
         * */
        if ($request->has('general')){
            $facility =new Facility;
            $generals =$request['general'];
            $arr =[];
            foreach ($generals as $general){
                array_push($arr,[
                    'hostel_id' => $hostelId,
                    'facility'  => $general,
                ]);
            }
            $facility->insert($arr);
        }


        /*
         * Services
         *
         * */
        if ($request->has('services')){
            $services1 = new Service;
            $services =$request['services'];
            $arr1 =[];
            foreach ($services as $service){
                array_push($arr1,[
                    'hostel_id' => $hostelId,
                    'service'     => $service,
                ]);
            }
            $services1->insert($arr1);
        }



        /*
         * Food and Drink
         * */
        if ($request->has('food')){
            $foodsAndDrinks = new Food;
            $foods =$request['food'];
            $arr2 =[];
            foreach ($foods as $food){
                array_push($arr2,[
                    'hostel_id' => $hostelId,
                    'food'     => $food,
                ]);
            }
            $foodsAndDrinks->insert($arr2);

        }



        /*
         * Entertainment
         * */
        if ($request->has('entertainment')){
            $entertainments =new Entertainment;
            $entertainments1 =$request['entertainment'];
            $arr3 =[];
            foreach ($entertainments1 as $entertainment){
                array_push($arr3,[
                    'hostel_id' => $hostelId,
                    'entertainment'     => $entertainment,
                ]);
            }
            $entertainments->insert($arr3);
        }



        /*
         * Utilities
         * */
        if ($request->has('utilities')){
            $utilities = new Utility;
            $utilities1 =$request['utilities'];
            $arr4 =[];
            foreach ($utilities1 as $utility){
                array_push($arr4,[
                    'hostel_id' => $hostelId,
                    'utility'     => $utility,
                ]);
            }
            $utilities->insert($arr4);
        }




        // next if you want save one step progress to session use
        DB::table('hostel_registrations')
            ->where(['hosteller_id'=> $hostellerId,
                        'hostel_id' =>$hostelId])
            ->update(['amenities' => true]);
        $this->saveProgress($request);
    }

    public function rules(Request $request = null): array
    {
        return [
        'general.*'     =>    'string|min:3|max:255',      //['regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/'],
        'services.*'    =>    'string|min:3|max:255',      //['regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/'],
        'food.*'        =>    'string|min:3|max:255',      //['regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/'],
        'entertainment.*'=>   'string|min:3|max:255',      //['regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/'],
        'utilities.*'   =>    'string|min:3|max:255',      //['regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/'],
        ];
    }

    public function messages()
    {
        return [

        ];
    }

    public function customAttributes()
    {
        return [

        ];
    }
}
