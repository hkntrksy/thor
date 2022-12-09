<?php

namespace App\Services\Todo\Adapters;

use App\Services\Todo\Dto\TodoDto;
use App\Services\Todo\Integration\ProviderA;

class ATodoAdapter implements TodoAdapterInterface
{

    public function getTodo(): array
    {

        $todoProvider = new providerA();

        $todos = [];

        foreach ($todoProvider->getTodos() as $todo){

            $key = key($todo);

            $newTodo = new TodoDto();
            $newTodo->setId($key);
            $newTodo->setDifficulty($todo->$key->level);
            $newTodo->setDuration($todo->$key->estimated_duration);

            $todos[] = $newTodo;
        }

        return $todos;

    }

}
