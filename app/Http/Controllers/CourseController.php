<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course\CourseCreateRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Course;
use App\Models\Difficulty;
use App\Models\Image;
use App\Models\Language;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Diff\Diff;

class CourseController extends FrontendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();
        $categories = Category::all();
        $difficulties = Difficulty::all();
        $recommended_courses = Course::recommendedCourses();

        $this->data["languages"] = $languages;
        $this->data["categories"] = $categories;
        $this->data["difficulties"] = $difficulties;
        $this->data["recommended_courses"] = $recommended_courses;


        return view("pages.courses.index", $this->data);
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

        $base_url = "https://code-freakz.s3.eu-central-1.amazonaws.com/";
        $relative_src = Storage::disk("s3")->put("public/images", $request->file("image"), "public");
        $src = Storage::disk("s3")->url($relative_src);

        Image::create(["src" => $src, "relative_src" => $relative_src, "course_id" => $course->id]);

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
        $course = Course::find($id);

        $this->data["course"] = $course;
        return view("pages.courses.show", $this->data);
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
            Storage::disk("s3")->delete($course->images[0]->relative_src);
            Image::where("course_id","=", $course->id)->delete();

            $relative_src = Storage::disk("s3")->put("public/images", $request->file("image"),"public");
            $src = Storage::disk("s3")->url($relative_src);
            Image::create(["src" => $src, "relative_src" => $relative_src,"course_id" => $course->id]);
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
        $course = Course::find($id);

        $course->languages()->sync([]);

        Storage::disk("s3")->delete($course->images[0]->relative_src);
        Image::where("course_id","=", $course->id)->delete();

        $course->delete();

        return response()->json(["msg" => "Course deleted successfully"]);
    }

    public function paginate(Request $request){
        $per_page = 8;
        $offset = 0;

        $courses = Course::with("images")->with("author");

        $data = [];

        //FILTERS
        if($request->has("search")){
            $courses = $courses->where("courses.name", "LIKE", "%".$request->input("search")."%");
        }
        if($request->has("languages")){
            $courses = $courses->whereHas("languages", function($l) use ($request){
                $l->whereIn("languages.id", $request->input("languages"));
            });
        }
        if($request->has("category")){
            $courses = $courses->where("category_id", "=", $request->input("category"));
        }
        if($request->has("difficulty")){
            $courses = $courses->where("difficulty_id", "=", $request->input("difficulty"));
        }
        $filtered_count = $courses->count();


        // LIMIT AND OFFSET
        if($request->has("per_page"))
            $per_page = $request->input("per_page");

        if($request->has("offset"))
            $offset = $request->input("offset");

        $courses = $courses->skip($offset)->take($per_page)->get();

        //Courses count is used in admin panel - courses page
        $courses_count = Course::all()->count();
        $data["courses_count"] = $courses_count;
        $data["filtered_count"] = $filtered_count;

        $data["courses"] = $courses;

        $data["authenticated"] = false;
        if(session("user") != null)
            $data["authenticated"] = true;

        return response()->json($data);
    }
}
