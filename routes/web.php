<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsersController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/login',    [ AuthenticatedSessionController::class, 'create'])->middleware('guest');
Route::post('/login',   [ AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::get('/',         [ DashController::class , 'index'])->middleware('auth');
Route::post('logout',   [ SessionsController::class , 'destroy'])->middleware('auth');
Route::get('/users',    [ UsersController::class , 'index'])->middleware('auth');
Route::get('/users/{user:mecanografico}',    [ UsersController::class , 'show'])->middleware('auth');

Route::get('/devices',  [ DeviceController::class , 'index'])->middleware('auth');


require __DIR__.'/auth.php';
