<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\teamController;
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


// ROUTE GROUP FOR HOMECONTROLLER
Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/dashboard/home', 'index')->middleware(['auth', 'IsAdmin'])->name('home.index');
    });
Route::controller(RoomController::class)
    ->group(function () {
        Route::get('/dashboard/room', 'index')->middleware(['auth', 'IsAdmin'])->name('room.index');
    });
Route::controller(BlogController::class)
    ->group(function () {
        Route::get('/dashboard/blog', 'index')->middleware(['auth', 'IsAdmin'])->name('blog.index');
    });
Route::controller(teamController::class)
    ->group(function () {
        Route::get('/dashboard/team', 'index')->middleware(['auth', 'IsAdmin'])->name('team.index');
    });
Route::controller(GalleryController::class)
    ->group(function () {
        Route::get('/dashboard/gallery', 'index')->middleware(['auth', 'IsAdmin'])->name('gallery.index');
    });
Route::controller(ContactController::class)
    ->group(function () {
        Route::get('/dashboard/contact', 'index')->middleware(['auth', 'IsAdmin'])->name('contact.index');
    });


require __DIR__ . '/auth.php';
