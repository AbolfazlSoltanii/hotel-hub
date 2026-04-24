<?php

use App\Http\Controllers\Amenity\AmenityController;
use App\Http\Controllers\Hotel\HotelController;
use App\Http\Controllers\Hotel\Review\ReviewController;
use App\Http\Controllers\Reservation\ReservationController;
use App\Http\Controllers\Room\RoomController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);

Route::resource('user', UserController::class)->except(['create', 'edit']);
Route::resource('hotel', HotelController::class)->except(['create', 'edit']);
Route::resource('review', ReviewController::class)->except(['create', 'edit']);
Route::resource('room', RoomController::class)->except(['create', 'edit']);
Route::resource('reservation', ReservationController::class)->except(['create', 'edit']);
Route::resource('amenity', AmenityController::class)->except(['create', 'edit']);
