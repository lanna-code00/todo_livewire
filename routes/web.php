<?php

use App\Http\Controllers\AuthController;
use App\Livewire\Counter;
use App\Livewire\Login;
use App\Livewire\Navbar;
use App\Livewire\SignUp;
use App\Livewire\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', Counter::class)->name('home');
Route::middleware('auth:sanctum')->group(function() {
    Route::get('todo', Todo::class)->name('todo');
    // Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/login', Login::class)->name('login');
Route::get('/sign-up', SignUp::class)->name('sign-up');