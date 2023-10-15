<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
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

Route::get("/", [HomeController::class, "index"])->name("home");

// Login Auth
Route::get("/auth", [LoginController::class, "index"])->name("auth.login");

// Dashboard Admin
Route::prefix("administrator")->group(function(){
    Route::get('/dasboard', [NewsController::class. "index"])->name("admin.index");;
});