<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\TermController;
use Illuminate\Support\Facades\Route;

// Group all authentication routes under the `/auth` prefix
Route::middleware(['auth:sanctum'])->prefix('/auth')->group(function () {
    Route::post('/register-admin', [AuthController::class, 'registerAdmin']);
    Route::post('/register-parent', [AuthController::class, 'registerParent']);
});

Route::prefix('/auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
});

Route::prefix('classes')->middleware(['auth:sanctum'])->group(function () {
    Route::post('/', [ClassController::class, 'createClass']);
    Route::get('/', [ClassController::class, 'getAllClasses']);
    Route::post('{class_id}/terms', [TermController::class, 'addTermToClass']);
    Route::get('{class_id}/terms', [TermController::class, 'getTermsForClass']);
});


