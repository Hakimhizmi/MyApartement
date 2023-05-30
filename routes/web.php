<?php

use App\Http\Controllers\apartementController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\login;
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

Route::resource('main',apartementController::class);

Route::post('/filter',[apartementController::class,'filter'])->name('main.filter');

Route::post('/send/{id}',[apartementController::class,'order'])->name('main.order');

Route::post('/login',[login::class,'login'])->name('login');

Route::get('/logout',[login::class,'logout']);

Route::resource('dashboard',dashboardController::class)->middleware('auth');

Route::post('/sold',[dashboardController::class,'sold'])->name('dashboard.sold')->middleware('auth');

Route::get('/Updatesold/{id}/{type}',[dashboardController::class,'UpdateSold'])->name('dashboard.UpdateSold')->middleware('auth');

Route::get('/deleteApartement/{id}',[dashboardController::class,'destroy'])->middleware('auth');

Route::post('/insertOption',[dashboardController::class,'storeOption'])->name('dashboard.insertOption')->middleware('auth');

Route::get('/deleteOption/{id}',[dashboardController::class,'destroyoption'])->middleware('auth');

Route::post('/updateOption',[dashboardController::class,'updateOption'])->name('dashboard.updateOption')->middleware('auth');

Route::get('/detailOrder/{id}',[dashboardController::class,'detailOrder'])->name('dashboard.detailOrder')->middleware('auth');
