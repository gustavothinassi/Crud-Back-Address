<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;


class ApiViaCepProvider extends ServiceProvider
{
 /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind('api-viacep', function() {
            return http::withOptions([
                'verify' => false,
                'base_uri' => 'https://viacep.com.br/ws/'
            ]);
        });
    }
}
