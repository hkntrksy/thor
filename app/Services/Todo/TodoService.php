<?php

namespace App\Services\Todo;

use App\Models\Developer;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;

class TodoService
{

    public function __construct(
        private TodoIntegrationManager $integrationManager
    )
    {
    }

    public function getAndCreateTodos(): void
    {


        DB::table('todos')
            ->delete();

        DB::table('developers')
            ->update([
                'total_hour' => 0
            ]);


        $allTodos = $this->integrationManager->getIntegrationAllTodos();

        foreach ($allTodos as $todo){
            Todo::insert([
                'name' => $todo->getId(),
                'level' => $todo->getDifficulty(),
                'duration' => $todo->getDuration(),
                'duration_by_level' => $todo->getDifficulty() * $todo->getDuration()
            ]);
        }

    }

    public function assignTodos(): void
    {

        $todos = Todo::query()
            ->whereNull('developer_id')
            ->get();

        foreach ($todos as $todo)
        {
            $developer = Developer::query()
                ->orderBy('total_hour')
                ->first();

            $todo->update([
                'developer_id' => $developer->id
            ]);

            $developer->update([
                'total_hour' => $developer->total_hour + ($todo->duration_by_level / $developer->level)
            ]);
        }

    }

}
