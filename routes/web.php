<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\Signup;
use App\Http\Controllers\auth\Login;
use App\Http\Controllers\Dashboard\Home;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// authentication
Route::get('/login', [Login::class, "index"])->name("login-pages");
Route::get('/signup', [Signup::class, "index"])->name("signup-pages");

// home page
Route::get('/',[Home::class, "index"])->name("home-pages");