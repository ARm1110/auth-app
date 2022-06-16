<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('users/login', [UserController::class, 'showLogin'])->name('users.showLogin');
Route::post('users/login', 'App\Http\Controllers\UserController@login')->name('users.login');

Route::get('users/register', [UserController::class, 'showRegister'])->name('users.showRegister');
Route::post('users/register', [UserController::class, 'register'])->name('users.register');

Route::resource('users', UserController::class);

Route::resource('tasks', TaskController::class);
