<?php

namespace App\Services\Todo\Adapters;

use App\Services\Todo\Dto\TodoDto;
use App\Services\Todo\Integration\ProviderB;

class BTodoAdapter implements TodoAdapterInterface
{

    /**
     * @return array
     */
    public function getTodo():array
    {

        $todoProvider = new ProviderB();

        $todos = [];

        foreach ($todoProvider->getTodos() as $todo){

            $newTodo = new TodoDto();
            $newTodo->setId($todo->id);
            $newTodo->setDifficulty($todo->zorluk);
            $newTodo->setDuration($todo->sure);

            $todos[] = $newTodo;

        }

        return $todos;
    }
}
