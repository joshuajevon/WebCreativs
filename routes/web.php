<?php

use App\Http\Controllers\EmailController;
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

Route::controller(EmailController::class)->group(function () {
    Route::get('/', 'home')->name('home');

    Route::post('/contact', 'contact')->name('contact');

    Route::post('/store-email', 'storeEmail')->name('storeEmail');

    Route::get('/id', 'homeId')->name('homeId');
});

