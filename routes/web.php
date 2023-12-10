<?php

use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VerificationController;

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

// Route Tampilan Home
Route::get("/", [HomeController::class,"index"]);
Route::get("/about", [HomeController::class,"about"]);
Route::get("/contact", [HomeController::class,"contact"]);
Route::get("/alumni", [HomeController::class,"alumni"]);
Route::get("/profil", [HomeController::class,"profil"]);
Route::get("/services", [HomeController::class,"services"]);
Route::get("/mahasiswa", [HomeController::class,"mahasiswa"]);

// Route Tampilan Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);

// Route Tampilan Login
Route::get("/login", [AuthController::class,"login"])->name("login");

// Route Tampilan Register
Route::get("register", [AuthController::class,"register"])->name("register");

// Route Membuat Akun Pengguna Baru
Route::post("/register", [AuthController::class,"create_user"])->name("create-user");

// Route Login Akun Pengguna
Route::post("/login", [AuthController::class,"authenticated"]);

// Route Logout Akun Pengguna
Route::get("/logout", [AuthController::class,"logout"]);

// Route Verifikasi Email
Route::get('/email/verify/{id}/{remember_token}', [AuthController::class, 'verify'])->name('verification.verify');
Route::get('/email/verify/notice', [AuthController::class, 'notice'])->name('verification.notice');

// Route Tampilan Slider
Route::resource('sliders',SliderController::class)->middleware(['auth', 'verified']);

// Route Tampilan Students
Route::resource('students', StudentController::class)->middleware(['auth', 'verified']);

// Route Tampilan Users
Route::resource('users', UsersController::class)->middleware(['auth', 'verified']);

// Route Tampilan Category
Route::resource('category', CategoryController::class)->middleware(['auth', 'verified']);