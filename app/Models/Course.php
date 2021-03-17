<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "courses";

    protected $guarded = [];

    public function languages(){
        return $this->belongsToMany(Language::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function author(){
        return $this->belongsTo(Author::class);
    }

    public static function recommendedCourses(){
        return Course::with("images")->inRandomOrder()->take(5)->get();
    }
}
