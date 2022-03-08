<?php

use App\Http\Controllers\FrontController;
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



// ROUTE GROUP FOR FRONTCONTROLLER
Route::controller(FrontController::class)
    ->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/room-list', 'room_list')->name('room-list');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/team', 'team')->name('team');
        Route::get('/gallery', 'gallery')->name('gallery');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/booking-form', 'booking_form')->middleware(['auth'])->name('booking-form');
        Route::get('/dashboard', 'dashboard')->middleware(['auth', 'IsAdmin'])->name('dashboard');
    });

require __DIR__ . '/auth.php';
