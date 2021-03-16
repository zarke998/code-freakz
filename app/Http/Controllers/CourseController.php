<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course\CourseCreateRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Course;
use App\Models\Difficulty;
use App\Models\Image;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Diff\Diff;

class CourseController extends Controller
{
    private $data = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data["authors"] = Author::all();
        $this->data["categories"] = Category::all();
        $this->data["difficulties"] = Difficulty::all();
        $this->data["languages"] = Language::all();

        return view("pages.courses.create", $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseCreateRequest $request)
    {
        $course = new Course($request->except(["_token", "image","language_id"]));
        $course->save();

        $course->languages()->sync($request->input("language_id"));

        //Save image
        $new_image_name = md5($request->file("image")->getFilename()) . time() . "." . $request->file("image")->extension();
        Storage::disk("public")->put("images/", $request->file("image"));

        Image::create(["src" => $new_image_name, "course_id" => $course->id]);


        return redirect()->route("admin.coursesPage")->with("entityInsertMsg", "Course added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
