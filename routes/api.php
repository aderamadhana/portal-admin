<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\UserController;
use App\Http\Controllers\API\V1\MenuController;

Route::prefix('v1')->group(function () {
    Route::get('/get_user', [UserController::class, 'get_user'])
        ->name('api.v1.get_user');

    Route::get('/get_menu', [MenuController::class, 'get_menu'])
        ->name('api.v1.get_menu');
});
