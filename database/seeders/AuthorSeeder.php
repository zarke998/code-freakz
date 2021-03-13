<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [];

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++){
            array_push($authors,
                [
                    "first_name" => $faker->firstName(),
                    "last_name" => $faker->lastName(),
                    "birth_date" => $faker->dateTimeBetween("-50 years", "-20 years")
                ]);
        }

        \DB::table("authors")->insert($authors);
    }
}
