<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CategoryCreateRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $data = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        Category::create($request->except("_token"));

        return redirect()->route("admin.categoriesPage")->with("entityCreateMsg", "Category created successfully.");
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
        $category = Category::find($id);

        $this->data["category"] = $category;

        return view("pages.categories.edit", ["category" => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::find($id);

        $category->fill($request->except("_token"));

        $category->save();

        return redirect()->route("admin.categoriesPage")->with("entityCreateMsg", "Category updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Category::destroy($id);

            return redirect()->back();
        }
        catch (QueryException $exception){
            return redirect()->back()->with(["entityErrorMsg" => "Error category language. Please delete courses which have this category first."]);
        }
    }
}
