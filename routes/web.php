<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\ClawController;

Route::get('/claw', [ClawController::class, 'index'])->name('claw');

use App\Http\Controllers\LandController;

Route::get('/land', [LandController::class, 'index'])->name('land');

use App\Http\Controllers\MeanController;

Route::get('/mean', [MeanController::class, 'index'])->name('mean');

use App\Http\Controllers\MpesaSTKPUSHController;

Route::post('/v1/mpesatest/stk/push', [MpesaSTKPUSHController::class, 'STKPush']);

Route::post('v1/confirm', [MpesaSTKPUSHController::class, 'STKConfirm'])->name('mpesa.confirm');

use App\Http\Controllers\ReservationController;

Route::post('/reserve', [ReservationController::class, 'reserve']);

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('events', 'AdminEventController');
});


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/login', 'AdminController@login')->name('admin.login');
    Route::get('/create', 'AdminController@create')->name('admin.create');
    Route::get('/edit/{eventId}', 'AdminController@edit')->name('admin.edit');
    Route::get('/index', 'AdminController@index')->name('admin.index');
});






