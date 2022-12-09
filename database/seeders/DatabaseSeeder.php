<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Developer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Developer::insert([
            [
                'name' => 'DEV-1',
                'level' => '1',
                'total_hour' => 0
            ],
            [
                'name' => 'DEV-2',
                'level' => '2',
                'total_hour' => 0
            ],
            [
                'name' => 'DEV-3',
                'level' => '3',
                'total_hour' => 0
            ],
            [
                'name' => 'DEV-4',
                'level' => '4',
                'total_hour' => 0
            ],
            [
                'name' => 'DEV-5',
                'level' => '5',
                'total_hour' => 0
            ]
        ]);
    }
}
