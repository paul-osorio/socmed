<?php

use App\Http\Controllers\AuthenticationController;
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

Route::view('/', 'home')->name('home');
Route::view('/home', 'pages/main')->name('main')->middleware('auth');
Route::view('/login', 'pages/login')->name('login')->middleware('guest');
Route::post('/process/login', [AuthenticationController::class, 'login'])->name('process/login')->middleware('guest');
Route::view('/register', 'pages/register')->name('register')->middleware('guest');
Route::post('/process/register', [AuthenticationController::class, 'register'])->name('process/register')->middleware('guest');
Route::get('/process/logout', [AuthenticationController::class, 'logout'])->name('logout')->middleware('auth');
