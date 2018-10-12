<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //md4string
        Schema::defaultStringLength(191);

        \View::composer('layout.sidebar', function ($view) {
            $topics = \App\Topic::all();
            $view->with('topics', $topics);
        });

        \DB::listen(function ($query) {
            $sql      = $query->sql;
            $bindings = $query->bindings;
            $time     = $query->time;

            if ($time > 10) { //大于10秒
                \Log::debug(var_export(compact('sql', 'bindings', 'time'), true)); //true为返回信息,记录在日志里
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
