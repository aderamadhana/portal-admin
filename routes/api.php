<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\UserController;
use App\Http\Controllers\API\V1\ProjectsController;

Route::prefix('v1')->group(function () {
    Route::get('/get_portofolio', [UserController::class, 'get_portofolio'])
        ->name('api.v1.get_portofolio');

    Route::get('/get_projects', [ProjectsController::class, 'get_projects'])
        ->name('api.v1.get_projects');
});

