<?php

namespace App\Observers;

use App\Models\Member\Member;
use Illuminate\Support\Facades\Cache;

class MemberObserver
{
    /**
     * Handle the Member "created" event.
     *
     * @param  \App\Models\Member\Member  $member
     * @return void
     */
    public function created(Member $member)
    {
        $this->flushCache();
    }

    /**
     * Handle the Member "updated" event.
     *
     * @param  \App\Models\Member\Member  $member
     * @return void
     */
    public function updated(Member $member)
    {
        $this->flushCache();
    }

    /**
     * Handle the Member "deleted" event.
     *
     * @param  \App\Models\Member\Member  $member
     * @return void
     */
    public function deleted(Member $member)
    {
        $this->flushCache();
    }

    /**
     * Handle the Member "restored" event.
     *
     * @param  \App\Models\Member\Member  $member
     * @return void
     */
    public function restored(Member $member)
    {
        $this->flushCache();
    }

    /**
     * Handle the Member "force deleted" event.
     *
     * @param  \App\Models\Member\Member  $member
     * @return void
     */
    public function forceDeleted(Member $member)
    {
        $this->flushCache();
    }

    public function flushCache()
    {
        Cache::forget('memberCount');
    }
}
