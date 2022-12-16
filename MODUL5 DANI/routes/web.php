<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\NavPageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\UserController;

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
    return view('Home-Dani', ['title' => 'Home']);
})->name('home');

Route::get('Register-Dani', [NavPageController::class, 'register'])->name('register');
Route::post('Register-Dani', [UserController::class, 'register_action'])->name('register.action');
Route::get('Login-Dani', [NavPageController::class, 'login'])->name('login');
Route::post('Login-Dani', [UserController::class, 'login_action'])->name('login.action');
Route::get('Profile-Dani', [NavPageController::class, 'password'])->name('password');
Route::post('Profile-Dani', [UserController::class, 'password_action'])->name('password.action');
Route::get('Navbar-Dani', [UserController::class, 'logout'])->name('logout');
Route::resource('showroom', ShowroomController::class);