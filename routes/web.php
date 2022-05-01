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

# register routes
Auth::routes();
Route::get('/register/{role?}', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

# website routes
Route::get('/', [App\Http\Controllers\SiteController::class, 'home'])->name('home');
Route::get('/about-us', [App\Http\Controllers\SiteController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\SiteController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us', [App\Http\Controllers\SiteController::class, 'storeContactUs'])->name('store-contact-us');
Route::get('/care-homes/{id?}', [App\Http\Controllers\SiteController::class, 'careHomes'])->name('care-homes');
Route::get('/care-home-events/{id?}', [App\Http\Controllers\SiteController::class, 'careHomeEvents'])->name('care-home-events');
Route::get('/articles/{id?}', [App\Http\Controllers\SiteController::class, 'articles'])->name('articles');
Route::get('/privacy-policy', [App\Http\Controllers\SiteController::class, 'privacyPolicy'])->name('privacy-policy');

# user routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('dashboard');
    Route::get('/contact-requests', [App\Http\Controllers\UserController::class, 'contactUs'])->name('user-contact-us');
});

