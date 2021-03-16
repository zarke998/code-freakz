<?php

namespace App\Http\Controllers;

use App\Http\Requests\Language\LanguageCreateRequest;
use App\Http\Requests\Language\LanguageUpdateRequest;
use App\Models\Language;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class LanguageController extends FrontendController
{
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
        return view("pages.languages.create", $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageCreateRequest $request)
    {
        Language::create($request->except("_token"));

        return redirect()->route("admin.languagesPage")->with("entityCreateMsg", "Language created successfully.");
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
        $language = Language::find($id);

        $this->data["language"] = $language;

        return view("pages.languages.edit", $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LanguageUpdateRequest $request, $id)
    {
        $language = Language::find($id);

        $language->fill($request->except("_token"));

        $language->save();

        return redirect()->route("admin.languagesPage")->with("entityCreateMsg", "Language updated successfully.");
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
            Language::destroy($id);

            return redirect()->back();
        }
        catch (QueryException $exception){
            return redirect()->back()->with(["entityErrorMsg" => "Error deleting language. Please delete courses which have this langauge first."]);
        }
    }
}
