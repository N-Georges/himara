<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
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
        Route::get('/room-list', 'room_list')->name('rooms');
        Route::post('/room-list', 'room_search')->name('room');
        Route::get('/room-list/tag/{id}', 'room_tag')->name('room');
        Route::get('/room-list/{id}/show', 'room_show')->name('room.show');
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
// ROUTE GROUP FOR ROOMCONTROLLER
Route::controller(RoomController::class)
    ->group(function () {
        Route::get('/dashboard/room', 'index')->middleware(['auth', 'IsAdmin'])->name('room.index');
    });
// ROUTE GROUP FOR BLOGCONTROLLER
Route::controller(BlogController::class)
    ->group(function () {
        Route::get('/dashboard/blog', 'index')->middleware(['auth', 'IsAdmin'])->name('blog.index');
    });
// ROUTE GROUP FOR TEAMCONTROLLER
Route::controller(TeamController::class)
    ->group(function () {
        Route::get('/dashboard/team', 'index')->middleware(['auth', 'IsAdmin'])->name('team.index');
    });
// ROUTE GROUP FOR GALLERYCONTROLLER
Route::controller(GalleryController::class)
    ->group(function () {
        Route::get('/dashboard/gallery', 'index')->middleware(['auth', 'IsAdmin'])->name('gallery.index');
    });
// ROUTE GROUP FOR CONTACTCONTROLLER
Route::controller(ContactController::class)
    ->group(function () {
        Route::get('/dashboard/contact', 'index')->middleware(['auth', 'IsAdmin'])->name('contact.index');
    });

// ROUTE GROUP FOR PROFILECONTROLLER   
Route::controller(ProfileController::class)
    ->group(function () {
        Route::get('/dashboard/profile', 'index')->middleware(['auth', 'IsAdmin'])->name('profile.index');
        Route::put('/dashboard/profile/{id}/update', 'update')->middleware(['auth', 'IsAdmin'])->name('profile.update');
        Route::put('/dashboard/profile/{id}/update/password', 'update_password')->middleware(['auth', 'IsAdmin'])->name('profile-password.update');
    });

// ROUTE GROUP FOR USERCONTROLLER   
Route::controller(UserController::class)
    ->group(function () {
        Route::get('/dashboard/user', 'index')->middleware(['auth', 'IsAdmin'])->name('user.index');
    });


require __DIR__ . '/auth.php';
