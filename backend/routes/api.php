<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Amenity\AmenityController;
use App\Http\Controllers\Hotel\HotelController;
use App\Http\Controllers\Hotel\Review\ReviewController;
use App\Http\Controllers\Reservation\ReservationController;
use App\Http\Controllers\Room\RoomController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\Profile\UserProfileController;
use App\Http\Controllers\User\UserController;

//Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('user', UserController::class)->except(['create', 'edit']);
    Route::resource('hotel', HotelController::class)->except(['create', 'edit']);
    Route::resource('review', ReviewController::class)->except(['create', 'edit']);
    Route::resource('room', RoomController::class)->except(['create', 'edit']);
    Route::resource('reservation', ReservationController::class)->except(['create', 'edit']);
    Route::resource('amenity', AmenityController::class)->except(['create', 'edit']);

    Route::patch('user-profile/{userId}', [UserProfileController::class, 'updateByUserId']);
});
