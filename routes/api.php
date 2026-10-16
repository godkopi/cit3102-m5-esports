<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EsportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected
Route::middleware('auth:sanctum')->group(function (){
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    Route::get('/esports', [EsportController::class, 'index']);
    Route::post('/esports',[EsportController::class, 'store']);
    Route::get('/esports/{esport}',[EsportController::class, 'show']);
    Route::put('/esports/{esport}',[EsportController::class, 'update']);
    Route::delete('/esports/{esport}',[EsportController::class, 'destroy']);
});
