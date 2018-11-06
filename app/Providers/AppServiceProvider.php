<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use A17\Twill\Repositories\SettingRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //this is to share variables across the whole app
        //https://laravel.com/docs/master/views#passing-data-to-views
        View::share('company_name', app(SettingRepository::class)->byKey('company_name'));

        View::share('twitter_handle', app(SettingRepository::class)->byKey('twitter_handle'));

        View::share('email_address', app(SettingRepository::class)->byKey('email_address'));

        View::share('telephone', app(SettingRepository::class)->byKey('telephone'));

        View::share('office_address', app(SettingRepository::class)->byKey('office_address'));
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
