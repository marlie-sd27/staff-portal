<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');


// Authentication routes
Route::get('/', [AuthController::class, 'signin'])->name('signin');
Route::get('/callback', [AuthController::class, 'callback'])->name('callback');
Route::get('/signout', [AuthController::class, 'signout'])->name('signout');
