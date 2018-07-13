<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 6/13/18
 * Time: 8:48 AM
 */

namespace myRoommie\Utilities;


use GuzzleHttp\Client;

class GoogleMaps
{
    /*
 Geo-codes an address so we can get the latitude and longitude
*/
    public static function geocodeAddress( $name, $address, $city, $region, $country ){

        /*
   Builds the URL and request to the Google Maps API
 */
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode( $name.' '.$address.', '.$city.' '.$region.' '.$country ).'&key='.env('GOOGLE_MAPS_KEY');

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
        $coordinates['lat'] = null;
        $coordinates['lng'] = null;

        /*
          If the response is not empty (something returned),
          we extract the latitude and longitude from the
          data.
        */

        if( !empty( $geocodeData )
            && $geocodeData->status != 'ZERO_RESULTS'
            && isset( $geocodeData->results )
            && isset( $geocodeData->results[0] ) ){
            $coordinates['lat'] = $geocodeData->results[0]->geometry->location->lat;
            $coordinates['lng'] = $geocodeData->results[0]->geometry->location->lng;
        }

        /*
          Return the found coordinates.
        */
        return $coordinates;

    }

}
