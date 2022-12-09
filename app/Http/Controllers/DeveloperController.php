<?php

namespace App\Http\Controllers;

use App\Services\Developer\DeveloperService;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class DeveloperController extends Controller
{

    public function getDevelopers(DeveloperService $developerService): View
    {

        $developers = $developerService->getDevelopersAndTodos();

        return view('developers', compact('developers'));

    }

}
