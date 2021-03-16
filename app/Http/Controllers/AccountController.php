<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class AccountController extends FrontendController
{
    public function loginPage(){
        return view("pages.login", $this->data);
    }
    public function login(LoginRequest $request){
        $user = User::with("role")->where("email", "=", $request->email)->first();

        if(!password_verify($request->password, $user->password)){
            return redirect()->route("loginPage")->with("loginErrorMsg", "Password incorrect.")->withInput();
        }
        else{
            session()->put("user", $user);
            return redirect()->route("home");
        }
    }
    public function registerPage(){
        return view("pages.register", $this->data);
    }
    public function register(RegisterRequest $request){
        $user = new User($request->except("password"));
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->activation_key = $this->generateActivationKey(64);

        $userRoleId = Role::all()->where("name","=","user")->first()->id;
        $user->role_id = $userRoleId;

        $user->save();

        return redirect()->route("loginPage")->with("registrationSuccessfullMsg", "Registration successfull.");
    }

    public function logout(){
        session()->remove("user");
        return redirect()->route("home");
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
