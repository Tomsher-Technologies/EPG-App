<?php

namespace App\Observers;

use App\Models\Location\Location;
use Illuminate\Support\Facades\Cache;

class LocationObserver
{
    /**
     * Handle the Location "created" event.
     *
     * @param  \App\Models\Location\Location  $location
     * @return void
     */
    public function created(Location $location)
    {
        $this->flushCache();
    }

    /**
     * Handle the Location "updated" event.
     *
     * @param  \App\Models\Location\Location  $location
     * @return void
     */
    public function updated(Location $location)
    {
        $this->flushCache();
    }

    /**
     * Handle the Location "deleted" event.
     *
     * @param  \App\Models\Location\Location  $location
     * @return void
     */
    public function deleted(Location $location)
    {
        $this->flushCache();
    }

    /**
     * Handle the Location "restored" event.
     *
     * @param  \App\Models\Location\Location  $location
     * @return void
     */
    public function restored(Location $location)
    {
        $this->flushCache();
    }

    /**
     * Handle the Location "force deleted" event.
     *
     * @param  \App\Models\Location\Location  $location
     * @return void
     */
    public function forceDeleted(Location $location)
    {
        $this->flushCache();
    }

    public function flushCache()
    {
        Cache::forget('locationCache');
    }
}
