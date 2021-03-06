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
Route::post('/care-homes-contact/{id}', [App\Http\Controllers\SiteController::class, 'storeCarehomeContactUs'])->name('store-carehome-contact');
Route::get('/events/{id?}', [App\Http\Controllers\SiteController::class, 'careHomeEvents'])->name('events');
Route::get('/articles/{id?}', [App\Http\Controllers\SiteController::class, 'articles'])->name('articles');
Route::get('/announcements/{id?}', [App\Http\Controllers\SiteController::class, 'announcements'])->name('announcements');
Route::get('/privacy-policy', [App\Http\Controllers\SiteController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/utm/{id}', [App\Http\Controllers\SiteController::class, 'utm'])->name('utm');

# user routes
Route::middleware(['auth'])->prefix('/portal/')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('dashboard');
    Route::get('/profile-information', [App\Http\Controllers\UserController::class, 'profileInformation'])->name('profile-information');
    Route::put('/profile-information', [App\Http\Controllers\UserController::class, 'storeProfileInformation'])->name('update-profile-information');
    Route::get('/event-seat/{event_id}', [App\Http\Controllers\UserEventController::class, 'reserveEventSeat'])->name('reserve-event-seat');

    Route::get('/donate/{payment_id}', [App\Http\Controllers\UserTransactionController::class, 'donate'])->name('donate');
    Route::post('/donate/{payment_id}', [App\Http\Controllers\UserTransactionController::class, 'storeDonate'])->name('store-donate');

    Route::middleware('can:access-admin-carehome')->group(function () {
        Route::get('/contact-request-lists', [App\Http\Controllers\UserController::class, 'contactUs'])->name('user-contact-us');
        Route::get('donations', [App\Http\Controllers\UserTransactionController::class, 'index'])->name('donations');
    });

    Route::middleware('can:is-carehome')->group(function () {
        Route::resource('announcements', App\Http\Controllers\AnnouncementController::class);
        Route::resource('events', App\Http\Controllers\EventController::class);
        Route::get('user-events/{event_id}', [App\Http\Controllers\UserEventController::class, 'index'])->name('user-events');
        Route::delete('delete/user-events/{event_id}', [App\Http\Controllers\UserEventController::class, 'destroy'])->name('delete-user-events');
        Route::resource('payment-accounts', App\Http\Controllers\PaymentAccountController::class);
    });

    Route::middleware('admin')->group(function () {
        Route::get('/user-lists', [App\Http\Controllers\UserController::class, 'users'])->name('users');

        Route::get('/profile-status/{userId}', [App\Http\Controllers\UserController::class, 'profileStatus'])->name('profile-status');
        Route::resource('articles', App\Http\Controllers\ArticleController::class);
        Route::resource('advertisements', App\Http\Controllers\AdvertisementController::class);
        Route::resource('payment-methods', App\Http\Controllers\PaymentMethodController::class);
    });
});
