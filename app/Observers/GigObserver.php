<?php

namespace App\Observers;

use App\Models\Gig;
use App\Notifications\GigCreatedNotification;
use App\Notifications\GigDeletedNotification;
use App\Notifications\GigUpdatedNotification;
use Illuminate\Support\Carbon;

class GigObserver
{
    /**
     * Handle the Gig "created" event.
     *
     * @param  \App\Models\Gig  $gig
     * @return void
     */
    public function created(Gig $gig)
    {
        $gig->user->notify(new GigCreatedNotification($gig));
    }

    /**
     * Handle the Gig "updated" event.
     *
     * @param  \App\Models\Gig  $gig
     * @return void
     */
    public function updated(Gig $gig)
    {
        $gig->user->notify(new GigUpdatedNotification($gig));
    }

    /**
     * Handle the Gig "deleted" event.
     *
     * @param  \App\Models\Gig  $gig
     * @return void
     */
    public function deleted(Gig $gig)
    {
        $gig->user->notify(new GigDeletedNotification($gig));
    }

    /**
     * Handle the Gig "restored" event.
     *
     * @param  \App\Models\Gig  $gig
     * @return void
     */
    public function restored(Gig $gig)
    {
        //
    }

    /**
     * Handle the Gig "force deleted" event.
     *
     * @param  \App\Models\Gig  $gig
     * @return void
     */
    public function forceDeleted(Gig $gig)
    {
        //
    }
}
