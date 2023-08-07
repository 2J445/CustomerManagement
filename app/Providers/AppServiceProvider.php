<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//Schemaクラスをuseする
use Illuminate\Support\Facades\Schema;

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
        //以下を記述
        Illuminate\Support\Facades\Schema::defaultStringLength(767);
    }
}
