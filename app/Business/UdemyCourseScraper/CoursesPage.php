<?php


namespace App\Business\UdemyCourseScraper;

use Symfony\Component\DomCrawler\Crawler;

class CoursesPage
{
    private $baseUrl = "https://www.udemy.com";

    public $document;

    private $crawler;

    public function __construct($document)
    {
        $this->document = $document;

        $this->crawler = new Crawler($document);
    }

    public function getCourseInfos(){

        // Course nodes
        $courseInfos = $this->crawler->filterXPath("//div[contains(@class,'course-list--container--3zXPS')]/div[contains(@class,'popper--popper--19faV')]")
            ->each(function(Crawler $node, $i){
                $courseInfo = new CourseInfo();

                $srcset = $node->filterXPath("//img[contains(@class,'course-card--course-image--2sjYP')]")->attr("srcset");
                $image = $this->getBiggestImageFromSrcset($srcset);

                $title = $node->filterXPath("//div[contains(@class,'course-card--course-title--2f7tE')]")->text();
                $shortDescription = $node->filterXPath("//p[contains(@class,'course-card--course-headline--yIrRk')]")->text();

                $priceText = $node->filterXPath("//div[contains(@class,'price-text--price-part--Tu6MH')]/span[2]")->text();
                $price = $this->getPriceFromText($priceText);

                $detailsLink = $node->filterXPath("//a[contains(@class,'browse-course-card--link--3KIkQ')]")->attr("href");
                $detailsLink = $this->baseUrl + $detailsLink;

                // Populate course info
                $courseInfo->title = $title;
                $courseInfo->short_description = $shortDescription;
                $courseInfo->price = $price;
                $courseInfo->imageUrl = $image;
                $courseInfo-$detailsLink = $detailsLink;

                return $courseInfo;
            });

        return $courseInfos;
    }

    private function getBiggestImageFromSrcset($srcset){
        $srcs = explode(",",$srcset);
        $image = str_replace("%20","", $srcs[count($srcs) - 1]);

        return $image;
    }

    private function getPriceFromText($priceText){
        return explode("$",$priceText)[1];
    }
}



//https://img-b.udemycdn.com/course/240x135/1350984_2355_6.jpg?secure=dAuqZDDsSh5DsVaQJahakA%3D%3D%2C1615765303%201x,%20https://img-a.udemycdn.com/course/480x270/1350984_2355_6.jpg?hyoiCVa0BwA1j6Da8v5nn6qZU0sh7AMJlBfexgwSW8yuWEaavmEFS9iHxBJBxv9Z5ayPRY5qdXpaRdSniiPIHbIxCKq6vcCGJUwEzUCwAeTIyucqw2in71QWfohvlmP5%202x
