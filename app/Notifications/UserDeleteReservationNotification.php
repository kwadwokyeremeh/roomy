<?php

namespace myRoommie\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserDeleteReservationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $unReservedBed;
    public $reason;
    /**
     * Create a new notification instance.
     * @param $reason,
     * @param $unReservedBed
     * @return void
     */
    public function __construct($unReservedBed, $reason)
    {
        $this->onQueue('emails');
        $this->reason = $reason;
        $this->unReservedBed = $unReservedBed;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Your reservation has been deleted')
                    ->line('Your reservation has been deleted by the hostel manager. Below is the reason for taking that action')
                    ->line($this->reason)
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
}
