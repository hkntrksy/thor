<?php

namespace App\Services\Todo;

use App\Services\Todo\Adapters\TodoAdapterInterface;

class TodoIntegrationManager
{

    public function getTodo(TodoAdapterInterface $todoAdapter): array
    {
        return $todoAdapter->getTodo();
    }


    public function getIntegrationAllTodos(): array
    {

        $todos = [];

        foreach (config('todo_integration.adapters') as $adapter){
            $todos = array_merge($todos, $this->getTodo(new $adapter));
        }

        return $todos;

    }

}
