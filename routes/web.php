<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SongRequestController;
use App\Http\Controllers\FeedbackController;

// Public routes
Route::get('/', [SongRequestController::class, 'create']);
Route::post('/request-song', [SongRequestController::class, 'store']);
Route::get('/feedback', [FeedbackController::class, 'create']);
Route::post('/feedback', [FeedbackController::class, 'store']);

// Admin
Route::get('/admin/requests', [SongRequestController::class, 'index']);

// Show single song request with feedbacks
Route::get('/song/{id}', [SongRequestController::class, 'show']);
Route::get('/songs', [SongRequestController::class, 'list']);


