<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/13/18
 * Time: 8:48 AM
 */

namespace myRoommie\Utilities;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class GoogleMaps
{
    /*
   Geocodes an address so we can get the latitude and longitude
 */
    public static function geocodeAddress( $address, $city, $region, $zip ){
        /*
          Builds the URL and request to the Google Maps API
        */
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode( $address.' '.$city.', '.$region.' '.$zip ).'&key='.env( 'GOOGLE_MAPS_KEY' );

        /*
          Creates a Guzzle Client to make the Google Maps request.
        */
        $client = new Client();

        /*
          Send a GET request to the Google Maps API and get the body of the
          response.
        */
        $geocodeResponse = $client->get( $url )->getBody();

        /*
          JSON decodes the response
        */
        $geocodeData = json_decode( $geocodeResponse );

        /*
          Initializes the response for the GeoCode Location
        */
        $coordinates['latitude'] = null;
        $coordinates['longitude'] = null;

        /*
          If the response is not empty (something returned),
          we extract the latitude and longitude from the
          data.
        */
        if( !empty( $geocodeData )
            && $geocodeData->status != 'ZERO_RESULTS'
            && isset( $geocodeData->results )
            && isset( $geocodeData->results[0] ) ){
            $coordinates['latitude'] = $geocodeData->results[0]->geometry->location->latitude;
            $coordinates['longitude'] = $geocodeData->results[0]->geometry->location->longitude;
        }

        /*
          Return the found coordinates.
        */
        return $coordinates;

    }
}
