<?php

use App\Http\Controllers\Auth\AppleSigninController;
use App\Http\Controllers\CalculateMatrixController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ResetProfileController;
use App\Http\Controllers\StripeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

// views
Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/logout', [LogoutController::class, 'logoutuser'])->name('logoutuser');
Route::get('/freedesc', [PagesController::class, 'freedesc'])->name('freedesc');
Route::get('/history', [PagesController::class, 'history'])->name('history')->middleware('auth');
Route::get('/paiddesc', [PagesController::class, 'paiddesc'])->name('paiddesc')->middleware('auth');

Route::get('/auth/signup', [RegisterController::class, 'create'])->name('signup')->middleware('guest');

/* Google OAuth routes */

Route::get('/auth/google/redirect',[GoogleController::class, 'handleGoogleRedirect']);
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

/* Facebook OAuth routes */     

Route::get('/auth/facebook/redirect',[FacebookController::class, 'handleFacebookRedirect']);
Route::get('/auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);


Route::get('/auth/apple/callback', [AppleSigninController::class, 'callback']);


Route::post('/auth/signup', [RegisterController::class, 'signup'])->name('signup.func')->middleware('guest');
Route::post('/auth/login', [LoginController::class, 'login'])->name('login.func')->middleware('guest');

Route::put('/xte-profile/{id}', [ResetProfileController::class, 'reset'])->name('reset-profile');


//stripe payment

Route::get('/payment', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/payment-checkout', [StripeController::class, 'paymentCheckout'])->name('payment-checkout');
Route::post('/payment/stripe/session', [StripeController::class, 'session'])->name('session');
Route::get('/payment/stripe/success', [StripeController::class, 'success'])->name('success');

#paypal payment
route::get('createpaypal',[PaypalController::class,'createpaypal'])->name('createpaypal');
route::get('processPaypal',[PaypalController::class,'processPaypal'])->name('processPaypal');

route::get('processSuccess',[PaypalController::class,'processSuccess'])->name('processSuccess');

route::get('processCancel',[PaypalController::class,'processCancel'])->name('processCancel');

Route::get('/calculate_matrix', [CalculateMatrixController::class, 'calculate'])->name('calculate_matrix');

Route::get("/siwa-login", [AppleSigninController::class,'login']);
Route::post("/siwa-callback", [AppleSigninController::class,'callback']);