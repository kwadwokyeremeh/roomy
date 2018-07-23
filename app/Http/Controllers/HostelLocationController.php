<?php

namespace myRoommie\Http\Controllers;

use Illuminate\Http\Request;
use myRoommie\Repository\GoogleMaps;

class HostelLocationController extends Controller
{
    /*
|-------------------------------------------------------------------------------
| Adds a New Cafe
|-------------------------------------------------------------------------------
| URL:            /api/v1/cafes
| Method:         POST
| Description:    Adds a new cafe to the application
*/
    public function postNewCafe( StoreCafeRequest $request ){
        /*
          Get the Latitude and Longitude returned from the Google Maps Address.
        */
        $coordinates = GoogleMaps::geocodeAddress( $request->get('address'), $request->get('city'), $request->get('state'), $request->get('zip') );

        $cafe = new Cafe();

        $cafe->name       = $request->get('name');
        $cafe->address    = $request->get('address');
        $cafe->city       = $request->get('city');
        $cafe->state      = $request->get('state');
        $cafe->zip        = $request->get('zip');
        $cafe->latitude   = $coordinates['lat'];
        $cafe->longitude  = $coordinates['lng'];

        $cafe->save();

        return response()->json($cafe, 201);
    }
}
