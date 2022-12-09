<?php

namespace App\Services\Developer;

use App\Models\Developer;

class DeveloperService
{

    public function __construct(private Developer $developer)
    {
    }


    public function getDevelopersAndTodos(): \Illuminate\Database\Eloquent\Collection|array
    {

        return $this->developer
            ->with('todos')
            ->get();

    }

}
