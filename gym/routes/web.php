<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\BookingController;
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
Route::get('roles',function(){return "has ...";})->middleware('role');

//Route::post('bookings/guardar',[BookingController::class,'store']);
Route::get('bookings/guardar',[BookingController::class,'store'])->middleware('auth');
Route::get('bookings/filter', [BookingController::class,'filter']);
Route::get('activities/filter', [ActivityController::class,'filter']);
Route::resource('users', UserController::class);
Route::resource('bookings', BookingController::class)->middleware('auth');
Route::resource('activities', ActivityController::class);
Route::resource('roles', RoleController::class);
Route::resource('sessions', SesionController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
