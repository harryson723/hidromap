<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('password_complexity', function ($attribute, $value, $parameters, $validator) {
            // Utiliza una expresión regular para verificar si la contraseña cumple con los requisitos
            return preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])/', $value);
        });
    
        Validator::replacer('password_complexity', function ($message, $attribute, $rule, $parameters) {
            return 'La contraseña debe contener al menos una mayúscula, una minúscula, un número y un carácter especial (!@# $%^&*).';
        });
    }
}
