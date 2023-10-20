<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get("/home", [HomeController::class, "index"])->name("home");

// Login Auth
Route::get("/", [LoginController::class, "index"])->name("auth.login");

// Dashboard Admin
// Route::prefix("admin")->group(function (){
    Route::get("/news", [PostController::class, "index"])->name("admin.index");
    Route::get("/news/{id}", [PostController::class, "show"])->name("post.detail");
    Route::get("/news-add", [PostController::class, "create"])->name("admin.create");
    Route::post("/new" ,[PostController::class, "store"])->name("store-data");
    Route::get("/news-edit/{id}", [PostController::class, "edit"])->name("admin.edit");
    Route::put("/new/{id}", [PostController::class, "update"])->name("update-data");
    Route::delete('/news-delete/{id}', [PostController::class, "destroy"])->name("delete-data");
// });
