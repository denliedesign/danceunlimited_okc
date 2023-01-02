<?php

namespace App\Providers;

use App\Calendar;
use App\Fstyle;
use App\Sstyle;
use App\Update;
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
//        view()->composer('*',function($view) {
//            $view->with('calendars', Calendar::all()->sortBy('startday'));
//        });

        view()->composer('*',function($view) {
            $view->with('updates', Update::all());
        });

        view()->composer('*',function($view) {
            $view->with('sstyles', Sstyle::all());
        });

        view()->composer('*',function($view) {
            $view->with('fstyles', Fstyle::all());
        });

//        view()->composer('*',function($view) {
//            $view->with('calendar', Calendar::all());
//        });
    }
}
