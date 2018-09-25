<?php

namespace myRoommie\Events\Hostel;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use myRoommie\Modules\Hostel\Hostel;

class HostelSaved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $hostel;
    /**
     * Create a new event instance.
     * @param Hostel $hostel
     * @return void
     */
    public function __construct(Hostel $hostel)
    {
        $this->hostel = $hostel;
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
