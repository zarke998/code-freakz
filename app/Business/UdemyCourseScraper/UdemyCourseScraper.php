<?php


namespace App\Business\UdemyCourseScraper;

use Symfony\Component\DomCrawler\Crawler;

class UdemyCourseScraper
{
    private $currentPage;
    private $currentPageIndex;

    private $cachedPages;

    public function __construct()
    {
        $this->cachedPages = [
            asset("assets/data/udemy-courses-page-1.html"),
            asset("assets/data/udemy-courses-page-2.html"),
            asset("assets/data/udemy-courses-page-3.html"),
            asset("assets/data/udemy-courses-page-4.html")
        ];
        $this->currentPageIndex = 0;
    }

    public function currentPage(){
        // First page
        if($this->currentPage == null){
            $this->currentPage = new CoursesPage(file_get_contents($this->cachedPages[$this->currentPageIndex]));
        }
        return $this->currentPage;
    }

    public function nextPage(){
        if($this->currentPageIndex == (count($this->cachedPages) - 1))
            return false;

        $this->currentPageIndex++;
        return $this->currentPage = new CoursePage(file_get_contents($this->currentPageIndex));
    }

    public function reset(){
        $this->currentPageIndex = 0;
        $this->currentPage = null;
    }
}
