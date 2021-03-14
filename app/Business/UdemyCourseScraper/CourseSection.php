<?php


namespace App\Business\UdemyCourseScraper;


class CourseSection
{
    public $name;
    public $lengthMin;

    public function __construct($name, $lengthMin)
    {
        $this->name = $name;
        $this->lengthMin = $lengthMin;
    }
}
