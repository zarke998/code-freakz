<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("categories")->insert([
            ["name" => "Web Development"],
            ["name" => "Mobile Development"],
            ["name" => "Game Development"],
            ["name" => "Desktop Development"],
            ["name" => "Database"],
            ["name" => "Software Tools"],
            ["name" => "Programming Languages"]
        ]);
    }
}
