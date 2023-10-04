<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmailIdController;
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

// eng
Route::get('/', [EmailController::class, 'home'])->name('home');

Route::post('/contact', [EmailController::class, 'contact'])->name('contact');

Route::post('/store-email', [EmailController::class, 'storeEmail'])->name('storeEmail');


// indo
Route::get('/id', [EmailIdController::class, 'homeId'])->name('homeId');

Route::post('/contact-id', [EmailIdController::class, 'contact'])->name('contactId');

Route::post('/store-email-id', [EmailIdController::class, 'storeEmail'])->name('storeEmailId');
