<?php

namespace myRoommie\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class HostellerResetPasswordNotification extends Notification implements ShouldQueue
{
    use Queueable;


    public $token;

    //public $queue = 'notifications';

    /**
     * Create a new notification instance.
     * @param $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
        $this->onQueue('emails');
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reset Password Notification')
            ->line('You are receiving this email because we received a password reset request from your account')
            ->action('Reset Password', route('hosteller.password.reset', $this->token))
            ->line('If you did not request a password reset, no further action is required');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
