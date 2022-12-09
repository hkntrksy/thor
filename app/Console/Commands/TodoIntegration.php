<?php

namespace App\Console\Commands;

use App\Services\Todo\TodoService;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class TodoIntegration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo-integration:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Providerdan todoları alır.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(TodoService $todoService)
    {

        $todoService->getAndCreateTodos();

        $todoService->assignTodos();

        return CommandAlias::SUCCESS;

    }
}
