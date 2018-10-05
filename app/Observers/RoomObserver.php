<?php

namespace myRoommie\Observers;

use myRoommie\Modules\Hostel\Room;

class RoomObserver
{
    /**
     * Handle the room "created" event.
     *
     * @param  \myRoommie\Modules\Hostel\Room  $room
     * @return void
     */
    public function created(Room $room)
    {
        //
    }

    /**
     * Handle the room "updated" event.
     *
     * @param  \myRoommie\Modules\Hostel\Room  $room
     * @return void
     */
    public function updated(Room $room)
    {
        //
    }

    /**
     * Handle the room "deleted" event.
     *
     * @param  \myRoommie\Modules\Hostel\Room  $room
     * @return void
     */
    public function deleted(Room $room)
    {
        //
    }

    /**
     * Handle the room "restored" event.
     *
     * @param  \myRoommie\Modules\Hostel\Room  $room
     * @return void
     */
    public function restored(Room $room)
    {
        //
    }

    /**
     * Handle the room "force deleted" event.
     *
     * @param  \myRoommie\Modules\Hostel\Room  $room
     * @return void
     */
    public function forceDeleted(Room $room)
    {
        //
    }

    public function updating(Room $room)
    {

        $room->setSexTypeAttribute($room->sex_type);
    }
}
