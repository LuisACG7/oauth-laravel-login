<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login/discord', [AuthController::class, 'redirectDiscord']);
Route::get('/callback/discord', [AuthController::class, 'handleDiscord']);

Route::get('/login/twitch', [AuthController::class, 'redirectTwitch']);
Route::get('/callback/twitch', [AuthController::class, 'handleTwitch']);
