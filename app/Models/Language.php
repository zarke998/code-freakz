<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class Language extends Model
{
    use HasFactory;

    protected $table = "languages";

    protected $fillable = ["name"];
    public $timestamps = false;

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public static function randLangWithCourses(){
        $languages = Language::all();

        $rand_lang_bucket = [];

        foreach($languages as $l){
            if($l->courses()->count() >= 3)
                $rand_lang_bucket[] = $l;
        }

        $rand_ind = rand(0, count($rand_lang_bucket) - 1);
        $rand_lang = $rand_lang_bucket[$rand_ind];

        $rand_lang->courses()->get();

        return $rand_lang;
    }
}
