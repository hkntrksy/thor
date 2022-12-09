<?php

namespace App\Services\Todo\Adapters;

interface TodoAdapterInterface
{
    public function getTodo(): array;
}
