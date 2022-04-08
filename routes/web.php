<?php

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

Auth::routes();

# website routes
Route::get('/', [App\Http\Controllers\SiteController::class, 'home'])->name('home');
Route::get('/about-us', [App\Http\Controllers\SiteController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\SiteController::class, 'contactUs'])->name('contact-us');
Route::get('/feedback', [App\Http\Controllers\SiteController::class, 'feedback'])->name('feedback');
Route::get('/terms-and-conditions', [App\Http\Controllers\SiteController::class, 'termsAndConditions'])->name('terms-and-conditions');
Route::get('/privacy-policy', [App\Http\Controllers\SiteController::class, 'privacyPolicy'])->name('privacy-policy');
