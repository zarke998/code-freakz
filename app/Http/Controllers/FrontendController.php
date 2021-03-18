<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $data = [];

    public function __construct()
    {
        $menu = Menu::with("items")->where("name","=","header_menu")->first();
        $this->data["header_menu"] = $menu->items;

        $this->data["footer_categories"] = Category::topEightCategories();
    }
}
