<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});


Route::get('/registration', [App\Http\Controllers\UserController::class, 'index'])->name('registration');


Route::post('/completeRegistration', [App\Http\Controllers\UserController::class, 'save'])->name('completeRegistration');


Route::get('/login', [App\Http\Controllers\UserController::class, 'LoginForm'])->name('/login');



Route::post('/logincomplete', [App\Http\Controllers\UserController::class, 'Login'])->name('logincomplete');


Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'Dashboard'])->name('dashboard');
