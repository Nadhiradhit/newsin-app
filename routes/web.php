<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/home", [HomeController::class, "index"])->name("home")->middleware("guest");

// Login Auth
Route::get("/", [AuthController::class, "login"])->name("auth.login")->middleware("guest");
Route::post("/login", [AuthController::class, "authenticating"])->name("authenticating")->middleware("guest");
Route::get("/logout", [AuthController::class, "logout"])->name("logout")->middleware("auth");

// Dashboard Admin
// Route::prefix("admin")->group(function (){
    Route::get("/news", [PostController::class, "index"])->name("admin.index")->middleware("auth");
    Route::get("/news/{id}", [PostController::class, "show"])->name("post.detail")->middleware("auth");
    Route::get("/news-add", [PostController::class, "create"])->name("admin.create")->middleware("auth");
    Route::post("/new" ,[PostController::class, "store"])->name("store-data")->middleware("auth");
    Route::get("/news-edit/{id}", [PostController::class, "edit"])->name("admin.edit")->middleware("auth");
    Route::put("/new/{id}", [PostController::class, "update"])->name("update-data")->middleware("auth");
    Route::delete('/news-delete/{id}', [PostController::class, "destroy"])->name("delete-data")->middleware("auth");
// });
