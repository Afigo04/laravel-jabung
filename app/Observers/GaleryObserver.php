<?php

namespace App\Observers;

use App\Models\Galery;

class GaleryObserver
{
    /**
     * Handle the Galery "created" event.
     */
    public function created(Galery $galery): void
    {
        //
    }

    /**
     * Handle the Galery "updated" event.
     */
    public function updated(Galery $galery): void
    {
        //
    }

    /**
     * Handle the Galery "deleted" event.
     */
    public function deleted(Galery $galery): void
    {
        //
    }

    /**
     * Handle the Galery "restored" event.
     */
    public function restored(Galery $galery): void
    {
        //
    }

    /**
     * Handle the Galery "force deleted" event.
     */
    public function forceDeleted(Galery $galery): void
    {
        //
    }
}
