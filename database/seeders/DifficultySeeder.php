<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("difficulties")->insert([
            ["name" => "Beginner"],
            ["name" => "Intermediate"],
            ["name" => "Advanced"]
        ]);
    }
}
