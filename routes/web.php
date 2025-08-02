<?php

use App\Http\Controllers\statusInteractController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userResponseController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/user-response', [userResponseController::class, 'store'])
    ->name('user.responses.store');

    Route::post('/save', [userResponseController::class, 'storeSave']);
Route::post('/save-interact', [statusInteractController::class, 'storeInteract']);
