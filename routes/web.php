<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
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
        // ROOM
        Route::get('/room-list', 'room_list')->name('rooms');
        Route::get('/room-list/categorie/{id}', "room_categorie")->name('categorie');
        Route::post('/room-list', 'room_search')->name('room');
        Route::get('/room-list/tag/{id}', 'room_tag')->name('tag');
        Route::get('/room-list/{id}/show', 'room_show')->name('room.show');
        // BLOG
        Route::get('/blog', 'blog')->name('blog');
        Route::post('/blog', 'blog_search')->name('blog.search');
        Route::get('/blog/categorie/{id}', "blog_categorie")->name('blog.categorie');
        Route::get('/blog/{id}/show', 'blog_show')->name('blog.show');
        Route::get('/blog/tag/{id}', 'blog_tag')->name('blog.tag');

        Route::get('/team', 'team')->name('team');
        Route::get('/gallery', 'gallery')->name('gallery');
        Route::get('/contact', 'contact')->name('contact');
        Route::post('/send-message', 'sendEmail')->name('contact.send');
        Route::get('/booking-form', 'booking_form')->middleware(['auth'])->name('booking-form');
        Route::get('/dashboard', 'dashboard')->middleware(['auth', 'IsAdmin'])->name('dashboard');
    });
    
    // COMMENT
    Route::controller(CommentController::class)
    ->group(function () {
        Route::get('/blog/{id}/store', 'store')->name('blog.store');
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
        Route::post('/dashboard/user', 'user_search')->middleware(['auth', 'IsAdmin'])->name('user.search');
        Route::get('/dashboard/user/{id}/edit', 'edit')->middleware(['auth', 'IsAdmin'])->name('user.edit');
        Route::put('/dashboard/user/{id}/update', 'update')->middleware(['auth', 'IsAdmin'])->name('user.update');
        Route::get('/dashboard/user/create', 'create')->middleware(['auth', 'IsAdmin'])->name('user.create');
        Route::post('/dashboard/user/store', 'store')->middleware(['auth', 'IsAdmin'])->name('user.store');
        Route::delete('/dashboard/user/{id}/delete',  'destroy')->middleware(['auth', 'IsAdmin'])->name('user.destroy');
    });

// CONTACT CONTROLLER
// Route::get('/contact', [ContactController::class, 'contact'] );
// Route::post('/send-message', [ContactController::class, 'sendEmail'] )->name('contact.send');

require __DIR__ . '/auth.php';
