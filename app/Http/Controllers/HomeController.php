<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function index(){
        $recommended_courses = Course::recommendedCourses();
        $discounted_courses = Course::topFiveDiscounted();
        $free_courses = Course::topFiveFree();
        $recent_courses = Course::recentlyReleased();
        $categories = Category::topTenCategories();
        $rand_lang = Language::randLangWithCourses();

        $this->data["recommended_courses"] = $recommended_courses;
        $this->data["discounted_courses"] = $discounted_courses;
        $this->data["free_courses"] = $free_courses;
        $this->data["recent_courses"] = $recent_courses;
        $this->data["categories"] = $categories;
        $this->data["rand_lang"] = $rand_lang;

        return view("pages.home", $this->data);
    }
}
