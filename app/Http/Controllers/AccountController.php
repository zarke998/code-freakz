<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function loginPage(){
        return view("pages.login");
    }
    public function login(LoginRequest $request){
        $user = User::all()->where("email", "=", $request->email)->first();

        if(!password_verify($request->password, $user->password)){
            return redirect()->route("loginPage")->with("loginErrorMsg", "Password incorrect.")->withInput();
        }
        else{
            session()->put("user", $user);
            return redirect()->route("home");
        }
    }

    public function registerPage(){
        return view("pages.register");
    }
    public function register(RegisterRequest $request){
        $user = new User($request->except("password"));
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->activation_key = $this->generateActivationKey(64);

        $user->save();

        return redirect()->route("loginPage")->with("registrationSuccessfullMsg", "Registration successfull.");
    }

    public function logout(){
    }

    private function generateActivationKey($length){
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $key = "";

        for($i = 0; $i < $length; $i++){
            $key.= $chars[rand(0, strlen($chars) - 1)];
        }

        return $key;
    }
}