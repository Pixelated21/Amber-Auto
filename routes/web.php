<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

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

Route::get("/register",[RegistrationController::class,"index"])->name("Register");
Route::post("/on-register",[RegistrationController::class,"on_register"])->name("On-Register");

Route::get("/login",[LoginController::class,"index"])->name("Login");
Route::post("/on-login",[LoginController::class,"on_login"])->name("On-Login");

Route::post("/on-logout",[LogoutController::class,"logout"])->name("Logout");

Route::get('/',[HomepageController::class,"index"])->name("Homepage");


