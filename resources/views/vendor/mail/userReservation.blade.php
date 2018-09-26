@component('mail::message')
# {{env('APP_NAME')}}

Hi {{$reservation->user->firstName}},
You have successfully placed a reservation in {{$reservation->hostel->name}},
Please proceed to make payment before this due date {{$reservation->end_date}}.

### Below is the reservation details

Hostel Name: {{$reservation->hostel->name}}

Block: {{$reservation->room->floor->block->name}}

Floor: {{$reservation->room->floor->name}}

Room: {{($reservation->room->name)?($reservation->room->name):('Number '.$reservation->room->number)}}
Room Type: {{$reservation->room->roomDescription->room_type}}

Amount to be paid: {{array_sum([
                    $reservation->room->roomDescription->price,
                    $reservation->room->roomDescription->price*env('MYROOMMIE_COMMISSION'),
                    $reservation->room->roomDescription->price*env('GHANA_TAX')])}}
@component('mail::button', ['url' => \Illuminate\Support\Facades\URL::temporarySignedRoute('proceedToMakePayment',$reservation->end_date,['hostelName'=>$reservation->hostel->slug, 'room_token'=>$reservation->room->roomDescription->room_token])])
Click here to make Payment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
