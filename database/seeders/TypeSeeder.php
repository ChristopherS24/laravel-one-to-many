<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::truncate();

        for ($i = 0; $i < 15; $i++) {
            $name = fake()->words(rand(1,5), true);

            Type::create([
                'name' => $name
            ]);

        }
    }
}