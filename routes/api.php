<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\MeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('me', [MeController::class, 'show']);
});
