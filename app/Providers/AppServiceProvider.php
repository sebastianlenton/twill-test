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

        try {

            $company_name = app(SettingRepository::class)->byKey('company_name');

            $twitter_handle = app(SettingRepository::class)->byKey('twitter_handle');

            $email_address = app(SettingRepository::class)->byKey('email_address');

            $telephone = app(SettingRepository::class)->byKey('telephone');

            $office_address = app(SettingRepository::class)->byKey('office_address');

        } catch(\Exception $e) {

            $company_name = 'settings table does not exist';
            $twitter_handle = 'settings table does not exist';
            $email_address = 'settings table does not exist';
            $telephone = 'settings table does not exist';
            $office_address = 'settings table does not exist';
            
        }

        View::share('company_name', $company_name);

        View::share('twitter_handle', $twitter_handle);

        View::share('email_address', $email_address);

        View::share('telephone', $telephone);

        View::share('office_address', $office_address);
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
