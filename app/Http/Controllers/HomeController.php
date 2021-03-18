<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function index(){
        $recommended_courses = Course::recommendedCourses();
        $discounted_courses = Course::topFiveDiscounted();
        $free_courses = Course::topFiveFree();

        $this->data["recommended_courses"] = $recommended_courses;
        $this->data["discounted_courses"] = $discounted_courses;
        $this->data["free_courses"] = $free_courses;

        return view("pages.home", $this->data);
    }
}
