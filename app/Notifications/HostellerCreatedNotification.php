<?php

namespace myRoommie\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use myRoommie\Hosteller;

class HostellerCreatedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $hosteller;
    /**
     * Create a new notification instance.
     * @param Hosteller $hosteller
     *
     * @return void
     */
    public function __construct(Hosteller $hosteller)
    {
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
        return ['mail','nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $hosteller = $this->hosteller;
        return (new MailMessage)
            ->subject(config('app.name').' - Welcome')
            ->line('Thank you for signing up')
            ->action('Go to Dashboard', route('dashboard.hostel'));
            //->line('If you do not know anything about this contact your hostel management team')
            //->line('If you have no clue, no further action is required');
            //->markdown('vendor.mail.hostellerCreated',compact('hosteller'));
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
        return (new NexmoMessage)
            ->content('Hi, thank you for signing up on '.config('app.name'));
    }
}
