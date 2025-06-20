<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CustomizeUserController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [TestController::class, 'index']);
Route::get('/customize-user', [CustomizeUserController::class, 'create'])->name('customize-user.create');
Route::post('/customize-user', [CustomizeUserController::class, 'store'])->name('customize-user.store');