<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = "authors";
    public $timestamps = false;

    protected $fillable = ["first_name", "last_name", "birth_date"];

    public function topFourCourses(){
        return $this->hasMany(Course::class)->take(4)->get();
    }
}
