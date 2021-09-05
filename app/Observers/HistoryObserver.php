<?php

namespace App\Observers;

use App\Base;
use App\Jet;

class HistoryObserver
{

    public function saving(Base $model)
    {
        dd($model);
    }


    /**
     * Handle the base "created" event.
     *
     * @param  \App\Base  $base
     * @return void
     */
    public function created(Base $base)
    {
        //
    }

    /**
     * Handle the base "updated" event.
     *
     * @param  \App\Base  $base
     * @return void
     */
    public function updated(Base $base)
    {
        //
    }

    /**
     * Handle the base "deleted" event.
     *
     * @param  \App\Base  $base
     * @return void
     */
    public function deleted(Base $base)
    {
        //
    }

    /**
     * Handle the base "restored" event.
     *
     * @param  \App\Base  $base
     * @return void
     */
    public function restored(Base $base)
    {
        //
    }

    /**
     * Handle the base "force deleted" event.
     *
     * @param  \App\Base  $base
     * @return void
     */
    public function forceDeleted(Base $base)
    {
        //
    }
}
