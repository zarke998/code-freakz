<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function index(){
        $recommended_courses = Course::recommendedCourses();
        $this->data["recommended_courses"] = $recommended_courses;
        return view("pages.home", $this->data);
    }
}
