<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends FrontendController
{
    public function index(){
        return view("pages.about", $this->data);
    }
}
