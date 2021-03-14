<?php


namespace App\Business\UdemyCourseScraper;


use Symfony\Component\DomCrawler\Crawler;

class CourseInfo
{
    public $detailsUrl;
    public $title;
    public $short_description;
    public $price;
    public $imageUrl;

    public $description;
    public $courseSections = [];

    private $crawler;

    public function __construct()
    {
        $this->crawler = new Crawler();
    }

    // Resolves description and course sections from link
    public function resolve(){
        $this->crawler->clear();
        $this->crawler->addHtmlContent(file_get_contents($this->detailsUrl));

        // Get course description
        $description = $this->crawler->filterXPath("//div[contains(@data-purpose,'course-description')]//div[contains(@class,'show-more--content--isg5c')]/div/div[1]")->outerHtml();

        // Get course sections
        $this->courseSections = [];
        $this->crawler->filter("//div[contains(@class,'section--panel--1tqxC')]")->each(function(Crawler $node, $i){
            $sectionName = $node->filterXPath("//span[contains(@class,'section--section-title--8blTh')]")->text();

            $sectionLengthText = $node->filterXPath("//span[contains(@class,'section--section-content--9kwnY')]/span")->text();
            $sectionLengthMin = $this->getMinsFromText($sectionLengthText);

            $section = new CourseSection($sectionName, $sectionLengthMin);

            array_push($this->courseSections, $section);
        });
    }

    private function getMinsFromText($text){
        return explode("min", $text)[0];
    }
}
