<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ConnectSessionsController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LearningRequestController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'show'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    
    Route::get('login', [LoginController::class, 'show'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function() {
        return view('User.Dashboard');
    })->name('dashboard');

    Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
});

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

Route::get('/learner', [LearnerController::class, 'index'])->middleware('auth');
Route::post('/request-Learning', [LearningRequestController::class, 'create'])->name('request.learning')->middleware('auth');

Route::get('/skills', [SkillController::class, 'index'])->middleware('auth');

Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth');

Route::post('/Skill-Create', [SkillController::class, 'create'])->name('create.skill')->middleware('auth');

Route::post('/connect-session', [ConnectSessionsController::class, 'acceptRequest'])->name('connect.session');

Route::post('/decline-request', [LearningRequestController::class, 'declineRequest'])->name('decline.request');