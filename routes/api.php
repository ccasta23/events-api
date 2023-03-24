<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::apiResource('events', \App\Http\Controllers\EventController::class)
                    ->middleware('auth:sanctum');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);
