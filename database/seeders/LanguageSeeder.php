<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use function Symfony\Component\Translation\t;

class LanguageSeeder extends Seeder
{
    private $languages;

    public function __construct()
    {
        $this->languages = [
            "JavaScript (React.js and Node.js)",
            "Python",
            "HTML",
            "CSS",
            "C++",
            "TypeScript",
            "Rust",
            "Scheme",
            "Java ",
            "Kotlin",
            "C#",
            "Perl",
            "PHP",
            "Scala ",
            "Swift",
            "MATLAB",
            "SQL",
            "R Programming Language",
            "Golang (Go)",
            "Ruby"
        ];
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_to_insert = [];

        foreach($this->languages as $language){
            array_push($array_to_insert, ["name" => "$language"]);
        }

        \DB::table("languages")->insert($array_to_insert);
    }
}
