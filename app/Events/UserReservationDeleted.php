<?php

namespace myRoommie\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use myRoommie\Modules\Booking\Reservation;

class UserReservationDeleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $unReservedBed;
    public $reason;
    /**
     * Create a new event instance.
     * @param Reservation $unReservedBed
     * @param $reason
     * @return void
     */
    public function __construct(Reservation $unReservedBed,$reason)
    {
        $this->reason = $reason;
        $this->unReservedBed = $unReservedBed;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
