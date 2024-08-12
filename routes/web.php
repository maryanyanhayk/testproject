<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'users']);

Route::get('/generate-token', function () {
    $token = Str::random(60); // Generate a random token
    \App\Models\ApiToken::create(['token' => $token]);
    return response()->json(['token' => $token]);
});
