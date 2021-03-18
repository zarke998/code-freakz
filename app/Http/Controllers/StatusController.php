<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends FrontendController
{
    public function forbidden(){
        return view("pages.403", $this->data);
    }
}
