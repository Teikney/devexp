<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\UsersController;

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
// Route::middleware('can:user')->group(function ()
// {

// });

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::get('/',[DashController::class, 'index'])->middleware('auth');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('/users',[UsersController::class, 'index'])->middleware('auth');


//Route::get('/',[DashController::class,'index'])/* ->middleware('auth') */;

// Route::group(['middleware' => ['guest']], function ()
// {

// });

// Route::group(['middleware' => ['auth']], function ()
// {
//     Route::group(['middleware' => ['admin']], function ()
//     {
//         Route::get('/', [DashController::class, 'index']);

//     });


//     // Route::group(['middleware' => ['user']], function ()
//     // {
//     //     Route::get('/', [DashController::class, 'index']);

//     // });

// });







