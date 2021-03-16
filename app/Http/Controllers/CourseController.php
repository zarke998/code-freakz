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
//        $new_image_name = md5($request->file("image")->getFilename()) . time() . "." . $request->file("image")->extension();
        $src = Storage::disk("public")->put("images/", $request->file("image"));

        Image::create(["src" => $src, "course_id" => $course->id]);

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
        $course = Course::with("images")->where("id", "=", $id)->first();
        $this->data["authors"] = Author::all();
        $this->data["categories"] = Category::all();
        $this->data["difficulties"] = Difficulty::all();
        $this->data["languages"] = Language::all();

        $this->data["course"] = $course;

        return view("pages.courses.edit", $this->data);
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
        $course = Course::find($id);
        $course->fill($request->except(["_token", "language_id", "image"]));

        $course->save();

        $course->languages()->sync($request->input("language_id"));

        if($request->has("image")){
            Storage::disk("public")->delete($course->images[0]->src);
            Image::where("course_id","=", $course->id)->delete();

            $src = Storage::disk("public")->put("images/", $request->file("image"));

            Image::create(["src" => $src, "course_id" => $course->id]);
        }

        return redirect()->route("admin.coursesPage")->with("entityInsertMsg", "Course updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function paginate(Request $request){
        $per_page = 8;
        $offset = 0;

        if($request->has("per_page"))
            $per_page = $request->input("per_page");

        if($request->has("offset"))
            $offset = $request->input("offset");

        $data = [];

        $courses_count = Course::all()->count();
        $courses = Course::with("author")->skip($offset)->take($per_page)->get();

        $data["courses_count"] = $courses_count;
        $data["courses"] = $courses;

        return response()->json($data);
    }
}
