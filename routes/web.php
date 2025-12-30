<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;

Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/login/authenticated', [LoginController::class, 'authenticated'])->name('login.authenticated');
Route::post('/login/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::middleware('auth')->group(function () {
    Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
    Route::get('/menu/add_menu', [MenuController::class, 'add_menu'])->name('menu.add_menu');
    Route::get('/profil', [MenuController::class, 'profil'])->name('menu.profil');
    Route::post('/save-profil', [MenuController::class, 'save_profil'])->name('menu.save_profil');
    Route::post('/store', [MenuController::class, 'store'])->name('menu.store');
    Route::delete('/menu/add_menu/{id}', [MenuController::class, 'destroy'])
    ->name('menu.destroy');
});
