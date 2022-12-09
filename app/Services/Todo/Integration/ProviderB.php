<?php

namespace App\Services\Todo\Integration;

use Illuminate\Support\Facades\Http;

class ProviderB
{


    public function getTodos(): object|array
    {

        return Http::get('http://www.mocky.io/v2/5d47f24c330000623fa3ebfa')
            ->object();

    }

}
