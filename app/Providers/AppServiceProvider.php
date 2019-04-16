<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
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
        Validator::extend('phone',function ($attribute, $value, $parameters, $validator) {
            return preg_match("/^1[34578]\d{9}$/", $value);
        });

        Validator::extend('account',function($attribute, $value, $parameters, $validator){
            return (preg_match("/^1[34578]\d{9}$/", $value) || preg_match("/^[A-Za-z0-9]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/",$value));
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
