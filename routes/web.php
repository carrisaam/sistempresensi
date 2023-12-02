<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseScheduleController;
use App\Http\Controllers\PresenceController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginPage'])->name('login')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('/loginattempt', [AuthController::class, 'loginAttempt']);

Route::redirect('/', '/home');

Route::get('/home', [CourseController::class, 'index'])->middleware('auth');
Route::get('/courses', [CourseController::class, 'courses'])->middleware('auth');
Route::get('/schedule/open/{course:id}', [CourseScheduleController::class, 'open'])->middleware('auth');
Route::get('/schedule/close/{course:id}', [CourseScheduleController::class, 'close'])->middleware('auth');
Route::delete('/schedule/delete/{course:id}', [CourseScheduleController::class, 'delete'])->middleware('auth');
Route::get('/schedule/reset/{course:id}', [CourseScheduleController::class, 'reset'])->middleware('auth');
Route::get('/schedules/{course:id}', [CourseScheduleController::class, 'detail'])->middleware('auth');
Route::get('/schedules/presence-list/{id}', [PresenceController::class, 'listPresensi'])->middleware('auth');
Route::get('/schedules/presence/{courseSchedule:id}', [PresenceController::class, 'index'])->middleware('auth');
Route::post('/presence/{courseSchedule:id}', [PresenceController::class, 'presence'])->name('presence')->middleware('auth');