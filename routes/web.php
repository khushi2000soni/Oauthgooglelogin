<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\NotificationSendController;
use App\Http\Controllers\StripeSubscriptionController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'auth'],function(){
    Route::post('/store-token', [NotificationSendController::class, 'updateDeviceToken'])->name('store.token');
    Route::post('/send-web-notification', [NotificationSendController::class, 'sendNotification'])->name('send.web-notification');

    Route::get('plans', [StripeSubscriptionController::class, 'index'])->name('plans.index');
    Route::get('plans/{plan}', [StripeSubscriptionController::class, 'show'])->name("plans.show");
    Route::post('subscription', [StripeSubscriptionController::class, 'subscription'])->name("subscription.create");
});
Route::get('google/auth', [GoogleController::class, 'signInwithGoogle'])->name('google.signin');
Route::get('google/callback', [GoogleController::class, 'callbackToGoogle'])->name('google.callback');
