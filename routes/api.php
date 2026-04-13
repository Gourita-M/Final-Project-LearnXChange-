<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::post('/send-message', [MessageController::class, 'store']);
Route::get('/sessions/{id}/messages', [MessageController::class, 'getAll']);