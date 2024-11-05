<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::truncate();

        User::factory()->create([
             'name' => 'Chris',
             'email' => 'chris@boolean.com',
        ]);

        $this->call([
            ProjectSeeder::class,
            TypeSeeder::class,
        ]) ;
    }
}
