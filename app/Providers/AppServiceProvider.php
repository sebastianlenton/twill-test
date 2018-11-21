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

            $tagline = app(SettingRepository::class)->byKey('tagline');

        } catch(\Exception $e) {

            //21/11/18 if the settings table exists, but setting_translations doesn't, it seems as though these are all assigned to blank.
            $company_name = $twitter_handle = $email_address = $telephone = $office_address = $tagline = 'settings table does not exist';
            
        }

        //TODO maybe these vars should be namespaced, or inside a struct or summat..... they might conflict with other vars used elsewhere
        View::share('company_name', $company_name);

        View::share('twitter_handle', $twitter_handle);

        View::share('email_address', $email_address);

        View::share('telephone', $telephone);

        View::share('office_address', $office_address);

        View::share('tagline', $tagline);
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
