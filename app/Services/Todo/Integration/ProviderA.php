<?php

namespace App\Services\Todo\Integration;

use Illuminate\Support\Facades\Http;

class ProviderA
{


    public function getTodos(): object|array
    {

        return Http::get('http://www.mocky.io/v2/5d47f235330000623fa3ebf7')
            ->object();

    }

}
