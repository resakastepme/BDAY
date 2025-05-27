<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userResponseController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/user-response', [userResponseController::class, 'store'])
    ->name('user.responses.store');
