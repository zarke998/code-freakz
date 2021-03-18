<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $fillable = ["name"];

    public $timestamps = false;

    public static function topEightCategories(){
        return Category::all()->take(8);
    }
}
