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

Route::get("/login", function (){
    return view("pages.login");
});

Route::get("/register", function (){
    return view("pages.register");
});

Route::get("/about", function (){
    return view("pages.about");
});
