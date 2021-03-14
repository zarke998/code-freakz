<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

// Courses
Route::get('/courses', function () {
    return view('pages.courses.index');
});
Route::get('/courses/edit', function () {
    return view('pages.courses.edit');
});
Route::get('/courses/create', function () {
    return view('pages.courses.create');
});


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get("/product_single", function(){
    return view("pages.product_single");
});

/* #region Account routes */
Route::get("/login", [\App\Http\Controllers\AccountController::class, "loginPage"])->name("loginPage");
Route::post("/login", [\App\Http\Controllers\AccountController::class, "login"])->name("login");

Route::get("/register", [\App\Http\Controllers\AccountController::class, "registerPage"])->name("registerPage");
Route::post("/register", [\App\Http\Controllers\AccountController::class, "register"])->name("register");

Route::get("/logout", [\App\Http\Controllers\AccountController::class, "logout"]);
/* #endregion */


Route::get("/about", function (){
    return view("pages.about");
});

// Admin
Route::get("/admin/content", function(){
    return view("pages.admin.content");
});
Route::get("/admin/logs", function(){
    return view("pages.admin.logs");
});

Route::get("/test", [\App\Http\Controllers\TestController::class, "test"]);
