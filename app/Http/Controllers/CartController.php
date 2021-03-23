<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Receipt;
use App\Models\ReceiptItem;
use Illuminate\Http\Request;

class CartController extends FrontendController
{
    public function index(){
        return view("pages.cart", $this->data);
    }

    public function items(Request $request){
        $courses = Course::with("images")->whereIn("id",$request->cartItems)->get();

        return response()->json($courses);
    }

    public function save(Request $request){
        $user = $request->session()->get("user");
        if($user == null) {
            return redirect()->route("home");
        }

        $receipt = Receipt::create(["user_id" => $user->id]);
        foreach($request->cartItems as $course){
            ReceiptItem::create(["receipt_id" => $receipt->id, "course_id" => $course]);
        }

        return response()->json(["msg" => "Order confirmed."]);
    }
}
