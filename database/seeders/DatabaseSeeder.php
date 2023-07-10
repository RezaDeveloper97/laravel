<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Platform::create([
            'name' => 'IOS'
        ]);

        \App\Models\Platform::create([
            'name' => 'android'
        ]);

        \App\Models\App::factory(5)->create();
    }
}
