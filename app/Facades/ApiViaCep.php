<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ApiViaCep extends Facade {

    protected static function getFacadeAccessor() {
        return 'api-viacep';
    }
}
