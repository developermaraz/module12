<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontEndBookingController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\tripsController;
use App\Http\Controllers\busController;
use App\Http\Controllers\bookingController;


// admin panel

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
// for route
Route::get('/admin/routes', [RoutesController::class, 'index'])->name('admin.routes');
// route create
Route::get('/admin/create-route', [RoutesController::class, 'createView'])->name('admin.routes.create');
Route::post('/admin/create-route', [RoutesController::class, 'Store'])->name('admin.routes.create.post');
// route edit
Route::get('/admin/route/edit/{id}', [RoutesController::class, 'update'])->name('admin.route.update');
Route::post('/admin/route/edit/{id}', [RoutesController::class, 'updatePost'])->name('admin.routes.update.post');

// for trips
Route::get('/admin/trips', [tripsController::class, 'index'])->name('admin.trips');
// trip create
Route::get('/admin/create-trip', [tripsController::class, 'createView'])->name('admin.trip.create');
Route::post('/admin/create-trip', [tripsController::class, 'Store'])->name('admin.trip.create.post');
// trip edit
Route::get('/admin/trip/edit/{id}', [tripsController::class, 'update'])->name('admin.trip.update');
Route::post('/admin/trip/edit/{id}', [tripsController::class, 'updatePost'])->name('admin.trip.update.post');

// For Bus;
Route::get('/admin/buses', [busController::class, 'index'])->name('admin.buses');
Route::get('/admin/bus/create', [busController::class, 'createView'])->name('admin.buses.create');
Route::post('/admin/bus/create', [busController::class, 'stor'])->name('admin.buses.create.post');
Route::get('/admin/bus/edit/{id}', [busController::class, 'editView'])->name('admin.buses.update');
Route::post('/admin/bus/edit/{id}', [busController::class, 'update'])->name('admin.buses.update.post');
Route::get('/admin/bus/bus', [busController::class, 'delete'])->name('admin.bus.delete');

// For Admin Booking
Route::get('/admin/books', [bookingController::class, 'index'])->name('admin.books');
Route::get('/admin/book', [busController::class, 'delete'])->name('admin.book.delete');


// frontend
Route::get('/', [frontEndBookingController::class, 'index'])->name('home');
Route::get('/result', [frontEndBookingController::class, 'searchResult'])->name('searchResult');
Route::post('/result', [frontEndBookingController::class, 'searchResultPost'])->name('search.Result.post');
Route::get('/book/{id}/{seat}', [frontEndBookingController::class, 'FrontBookTrip'])->name('front.book.trip');
Route::post('/book/{id}/{seat}', [frontEndBookingController::class, 'FrontBookTripPost'])->name('front.book.trip.post');


Route::get('/success', function () {
    return view('successfullyBooked');
})->name('success.booked');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/profiles', function () {
    return view('profile');
})->name('profile');
