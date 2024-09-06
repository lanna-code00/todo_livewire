<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function() {
    Route::post('logout', 'testLogout')->name('logout')->middleware('auth:sanctum');
    Route::post('test-login', 'testLogin')->name('test-login');
});


