<?php

namespace myRoommie\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use myRoommie\Modules\Booking\Reservation;

class UserReservationNotification extends Notification implements ShouldQueue
{
    use Queueable;


    /*
     * The reservation instance
     * */
    public $reservation;



    /**
     * Create a new notification instance.
     * @param Reservation $reservation
     * @return void
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
        $this->onQueue('notifications');

    }



    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $reservation = $this->reservation;
        return (new MailMessage)

                ->subject(config('app.name').'- Your reservation was successful')
            ->markdown('vendor.mail.userReservation',compact('reservation'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    /**
     * Get the Nexmo / SMS representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return NexmoMessage
     */
    public function toNexmo($notifiable)
    {
        $hostel =$this->reservation->hostel->name;
        $roomName = ($this->reservation->room->name)?($this->reservation->room->name):('Room '.$this->reservation->room->number);
        $roomType =$this->reservation->room->roomDescription->room_type;
        $price =$this->reservation->room->roomDescription->price;
        $endDate = Carbon::parse($this->reservation->end_date)->toDayDateTimeString();
        $effectiveSum =array_sum([
            $price,
            $price * env('MYROOMMIE_COMMISSION'),
            $price * env('GHANA_TAX'),
        ]);
        return (new NexmoMessage)
            ->content('Hi, you have successfully placed a reservation in '.$hostel .'Room Details: '.$roomName.'Room Type: '.$roomType .'Price: '. $effectiveSum.'Please proceed to make payment before this due date '. $endDate);
    }
}
