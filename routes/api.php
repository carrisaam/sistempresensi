<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseScheduleController;
use App\Http\Controllers\PresenceController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth' ,'middleware' => 'guest'], function () {
    Route::post('/login', [AuthController::class, 'login']);
});

Route::group(['middleware' => 'user'], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'getUserProfile']);
    Route::get('/courses', [CourseController::class, 'index']);
    Route::get('/course/{courseSchedule:id}/schedules', [CourseScheduleController::class, 'detail']);
    Route::post('/presence', [PresenceController::class, 'presence']);
});
