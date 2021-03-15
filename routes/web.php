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
})->name("home");

//region Courses
Route::get('/courses', function () {
    return view('pages.courses.index');
});
Route::get('/courses/edit', function () {
    return view('pages.courses.edit');
});
Route::get('/courses/create', [\App\Http\Controllers\CourseController::class, "create"])->name("course.create");
//endregion
//region Authors
Route::get("/authors/create", [\App\Http\Controllers\AuthorController::class, "create"])->name("authors.create");
Route::post("/authors/store", [\App\Http\Controllers\AuthorController::class, "store"])->name("authors.store");
//endregion
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get("/product_single", function(){
    return view("pages.product_single");
});

Route::get("/about", function (){
    return view("pages.about");
});

//region Account routes
Route::get("/login", [\App\Http\Controllers\AccountController::class, "loginPage"])->name("loginPage");
Route::post("/login", [\App\Http\Controllers\AccountController::class, "login"])->name("login");

Route::get("/register", [\App\Http\Controllers\AccountController::class, "registerPage"])->name("registerPage");
Route::post("/register", [\App\Http\Controllers\AccountController::class, "register"])->name("register");

Route::get("/logout", [\App\Http\Controllers\AccountController::class, "logout"])->name("logout");
//endregion
//region Admin
Route::get("/admin/content/courses", [\App\Http\Controllers\AdminPanelController::class, "coursesPage"])->name("admin.coursesPage");
Route::get("/admin/content/authors", [\App\Http\Controllers\AdminPanelController::class, "authorsPage"])->name("admin.authorsPage");
Route::get("/admin/content/languages", [\App\Http\Controllers\AdminPanelController::class, "languagesPage"])->name("admin.languagesPage");
Route::get("/admin/content/categories", [\App\Http\Controllers\AdminPanelController::class, "categoriesPage"])->name("admin.categoriesPage");
Route::get("/admin/content/difficulties", [\App\Http\Controllers\AdminPanelController::class, "difficultiesPage"])->name("admin.difficultiesPage");
Route::get("/admin/content/menus", [\App\Http\Controllers\AdminPanelController::class, "menusPage"])->name("admin.menusPage");

Route::get("/admin/logs", [\App\Http\Controllers\AdminPanelController::class, "logsPage"])->name("admin.logsPage");
//endregion

Route::get("/test", [\App\Http\Controllers\TestController::class, "test"]);
