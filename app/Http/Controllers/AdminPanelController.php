<?php

namespace App\Http\Controllers;

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
        return view("pages.admin.content.courses", $this->data);
    }

    public function authorsPage(){
        return view("pages.admin.content.authors", $this->data);
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
