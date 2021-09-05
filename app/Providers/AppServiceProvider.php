<?php

namespace App\Providers;

use App\Base;
use App\Observers\HistoryObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //todo create new provider
//        Base::observe(HistoryObserver::class);
    }
}
