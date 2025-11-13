<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;

Route::get('/', [LoginController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
