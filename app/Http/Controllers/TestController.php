<?php

namespace App\Http\Controllers;

use App\Business\UdemyCourseScraper\UdemyCourseScraper;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        $scraper = new UdemyCourseScraper();

        $page = $scraper->currentPage();

        $infos = $page->getCourseInfos();

        foreach($infos as $info){
            $info->resolve();
        }

        dd($infos);
    }
}
