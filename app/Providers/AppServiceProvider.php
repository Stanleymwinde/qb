<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('username', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[A-Za-z0-9_]+$/', $value);
        });

        Validator::replacer('username', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'The :attribute may only contain letters, numbers, and underscores.');
        });
    }
}
