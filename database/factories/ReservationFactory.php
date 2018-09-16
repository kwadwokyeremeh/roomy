<?php

use Faker\Generator as Faker;
use myRoommie\Modules\Hostel\Hostel;



$factory->define(myRoommie\Modules\Booking\Reservation::class, function (Faker $faker) {

sleep(0.001);
        $reservation =new myRoommie\Modules\Booking\Reservation;
        $hostelName =Hostel::all(['slug'])->toArray();
        $hostel =Hostel::whereSlug(array_random($hostelName))->first();
        $duration = $hostel->retrieveDuration();
        $rooms  =$hostel->rooms()->pluck('id')->toArray();
        $roomSelected = array_random($rooms);
        $choosenRoom = \myRoommie\Modules\Hostel\Room::whereId($roomSelected)->lockForUpdate()->first();
        $user =\myRoommie\User::whereId(random_int(1,553))->first();
        $price =$choosenRoom->roomDescription->price;
        $data =[
            'token'             =>mb_strtoupper(uniqid()),
            'start_date'        =>now()->toDateTimeString(),
            'end_date'          =>$duration->toDateTimeString(),
            'amount_to_be_paid' =>$price,
            'status'            =>false,
            'hostel_id'         =>$hostel->id,
            'room_id'           =>$choosenRoom->id,
            'user_id'           =>$user,
        ];

        $default = [
            'token'             =>mb_strtoupper(uniqid()),
            'start_date'        =>now()->toDateTimeString(),
            'end_date'          =>now()->toDateTimeString(),
            'amount_to_be_paid' =>1000.00,
            'status'            =>false,
            'hostel_id'         =>1,
            'room_id'           =>1,
            'user_id'           =>1,
            'deleted_at'        =>now()->toDateTimeString(),
        ];

        switch ($reservation->lockForUpdate()){
            case $reservation->isRoomFull($roomSelected) == true:
                return $default;

                break;
            case $reservation::userFactoryHasReservation($user)==true:
                return $default;
                break;
            default:
                if ($choosenRoom->sex_type == 'No Gender'){
                    $choosenRoom->update(['sex_type' => $user->sex]);

                    return  $data;

                }
                elseif ($choosenRoom->sex_type == $user->sex){
                    return $data;
                }
                else{

                    return  $default; //redirect()->back()->withErrors(['errors'=>'Sorry the selected room is for the opposite sex']);
                }
                break;
        }





});

