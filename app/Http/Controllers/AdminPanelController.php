<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function contentPage(){
        return view("pages.admin.content");
    }

    public function logsPage(){
        return view("pages.admin.logs");
    }
}
