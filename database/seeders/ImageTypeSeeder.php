<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("image_types")->insert([
            ["name" => "thumbnail"],
            ["name" => "wallpaper"]
        ]);
    }
}
