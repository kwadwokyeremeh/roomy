<?php

namespace myRoommie\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use myRoommie\Hosteller;

class HostellerCreateNewPasswordNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $token;
    public $hosteller;
    /**
     * Create a new notification instance.
     *
     * @param $token
     * @param Hosteller $hosteller
     * @return void
     */
    public function __construct(Hosteller $hosteller,$token)
    {
        $this->token = $token;
        $this->hosteller = $hosteller;
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
                    ->subject(config('app.name').' - Create a new password')
            ->greeting('Hello, '.$this->hosteller->full_name)
            ->line('You are receiving this email because a hostel management team member created a profile of you  on '.url(env('APP_URL')).' ')
            ->line('Click on create password to create a new password for your account')
            ->action('Create Password', route('hosteller.password.reset', $this->token))
            ->line('If you do not know anything about this contact your hostel management team')
            ->line('If you have no clue, no further action is required');

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
