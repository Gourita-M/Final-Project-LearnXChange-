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
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'show'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    
    Route::get('login', [LoginController::class, 'show'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::post('logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

Route::get('/learner', [LearnerController::class, 'index'])->middleware(['role:learner', 'auth']);
Route::post('/request-Learning', [LearningRequestController::class, 'create'])->name('request.learning')->middleware('auth');



Route::get('/teacher', [TeacherController::class, 'index'])->middleware(['role:teacher', 'auth']);

Route::post('/request-certificate', [CertificatesController::class, 'requestCertificate'])->name('request.certificate')->middleware(['role:teacher', 'auth']);

Route::post('/Skill-Create', [SkillController::class, 'create'])->name('create.skill')->middleware('auth');

Route::post('/connect-session', [ConnectSessionsController::class, 'acceptRequest'])->name('connect.session');

Route::post('/decline-request', [LearningRequestController::class, 'declineRequest'])->name('decline.request');

Route::get('/messages/{id}', [MessageController::class, 'index'])->middleware('auth');

Route::post('/remove.skill', [SkillController::class, 'removeSkill'])->name('remove.skill')->middleware('auth');

Route::post('/edit.info', [ProfileController::class, 'editInfo'])->name('edit.info')->middleware('auth');

Route::post('/submit.review', [ReviewController::class, 'submitReview'])->name('submit.review')->middleware('auth');

Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');

Route::get('/admin', [AdminController::class, 'index'])->middleware(['role:admin', 'auth']);

Route::post('/admin/report/resolve', [AdminController::class, 'resolveReport'])->name('admin.report.resolve')->middleware(['role:admin', 'auth']);

Route::post('/aprove.certificate', [CertificatesController::class, 'approve'])->name('aprove.certificate')->middleware(['role:admin', 'auth']);
Route::post('/decline.certificate', [CertificatesController::class, 'decline'])->name('decline.certificate')->middleware(['role:admin', 'auth']);

Route::get('/ban.user/{id}', [AdminController::class, 'banUser'])->middleware(['role:admin', 'auth']);;

Route::post('/password.change', [ChangePasswordController::class, 'changePassword'])->name('password.change');

Route::post('/profile-pic', [ProfileController::class, 'changeProfilePic'])->name('change.profilepic');

Route::post('/report-message', [ReportController::class, 'reportMessage'])->name('report.message');

Route::post('/leave-season', [MessageController::class, 'leaveSeason'])->name('leave.season');