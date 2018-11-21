<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SebsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        require_once app_path() . '/Helpers/SebLenton/Counter.php';
        require_once app_path() . '/Helpers/SebLenton/ImageHelper.php';
        require_once app_path() . '/Helpers/SebLenton/LeftRight.php';
    }
}