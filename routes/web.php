<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class, "index"])->name("home");

//region Courses
Route::get('/courses', [\App\Http\Controllers\CourseController::class, "index"])->name("courses");
Route::get('/courses/{id}', [\App\Http\Controllers\CourseController::class, "show"])->name("courses.show")
    ->whereNumber("id");
Route::get('/courses/create', [\App\Http\Controllers\CourseController::class, "create"])->name("course.create");
Route::post('/courses/store', [\App\Http\Controllers\CourseController::class, "store"])->name("course.store");
Route::get('/courses/edit/{id}', [\App\Http\Controllers\CourseController::class, "edit"])->name("course.edit")
    ->whereNumber("id");
Route::post('/courses/update/{id}', [\App\Http\Controllers\CourseController::class, "update"])->name("course.update");
Route::delete('/courses/delete/{id}', [\App\Http\Controllers\CourseController::class, "destroy"])->name("course.delete")
    ->whereNumber("id");

Route::get('/courses/pagination', [\App\Http\Controllers\CourseController::class, "paginate"])->name("course.paginate");
//endregion

//region Authors
Route::get("/authors/create", [\App\Http\Controllers\AuthorController::class, "create"])->name("authors.create");
Route::post("/authors/store", [\App\Http\Controllers\AuthorController::class, "store"])->name("authors.store");
Route::get("/authors/edit/{id}", [\App\Http\Controllers\AuthorController::class, "edit"])->name("authors.edit")
    ->whereNumber("id");
Route::post("/authors/update/{id}", [\App\Http\Controllers\AuthorController::class, "update"])->name("authors.update")
    ->whereNumber("id");
Route::delete("/authors/delete/{id}", [\App\Http\Controllers\AuthorController::class, "destroy"])->name("authors.delete")
    ->whereNumber("id");
//endregion

//region Languages
Route::get("/languages/create", [\App\Http\Controllers\LanguageController::class, "create"])->name("languages.create");
Route::post("/languages/store", [\App\Http\Controllers\LanguageController::class, "store"])->name("languages.store");
Route::get("/languages/edit/{id}", [\App\Http\Controllers\LanguageController::class, "edit"])->name("languages.edit")
    ->whereNumber("id");
Route::post("/languages/update/{id}", [\App\Http\Controllers\LanguageController::class, "update"])->name("languages.update")
    ->whereNumber("id");
Route::delete("/languages/delete/{id}", [\App\Http\Controllers\LanguageController::class, "destroy"])->name("languages.delete")
    ->whereNumber("id");
//endregion

//region Categories
Route::get("/categories/create", [\App\Http\Controllers\CategoryController::class, "create"])->name("categories.create");
Route::post("/categories/store", [\App\Http\Controllers\CategoryController::class, "store"])->name("categories.store");
Route::get("/categories/edit/{id}", [\App\Http\Controllers\CategoryController::class, "edit"])->name("categories.edit")
    ->whereNumber("id");
Route::post("/categories/update/{id}", [\App\Http\Controllers\CategoryController::class, "update"])->name("categories.update")
    ->whereNumber("id");
Route::delete("/categories/delete/{id}", [\App\Http\Controllers\CategoryController::class, "destroy"])->name("categories.delete")
    ->whereNumber("id");
//endregion

Route::get('/contact', [\App\Http\Controllers\ContactController::class, "index"])->name("contact");
Route::get('/about', [\App\Http\Controllers\AboutController::class, "index"])->name("about");

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
