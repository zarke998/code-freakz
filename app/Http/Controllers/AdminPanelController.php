<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    private $data = [];

    public function __construct()
    {
        $menu = Menu::with("items")->where("name","=","admin_panel")->first();
        $menuGrouped = $this->groupMenuItemsByParent($menu->items);

        $this->data["menu_grouped"] = $menuGrouped;
    }

    public function coursesPage(){
        $courses = Course::with("author")->simplePaginate(8);
        $this->data["courses"] = $courses;

        return view("pages.admin.content.courses", $this->data);
    }

    public function authorsPage(){
        $authors = Author::all();
        $this->data["authors"] = $authors;

        return view("pages.admin.content.authors", $this->data);
    }
    public function languagesPage(){
        $languages = Language::all();
        $this->data["languages"] = $languages;

        return view("pages.admin.content.languages", $this->data);
    }
    public function categoriesPage(){
        $categories = Category::all();
        $this->data["categories"] = $categories;

        return view("pages.admin.content.categories", $this->data);
    }

    public function logsPage(){
        return view("pages.admin.logs");
    }

    private function groupMenuItemsByParent($menu_items){
        $menu_grouped = [];
        foreach($menu_items as $item){
            if($item->parent_id == null){
                $menu_grouped[$item->name] = [];
                array_unshift($menu_grouped[$item->name], $item);
                continue;
            }
            $parent_name = array_filter($menu_items->toArray(), function($val) use($item){
                return $val["id"] == $item["parent_id"];
            })[0]["name"];

            array_push($menu_grouped[$parent_name], $item);
        }
        return $menu_grouped;
    }
}
