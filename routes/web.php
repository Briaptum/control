<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CustomizeUserController;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [TestController::class, 'index']);
Route::get('/customize-user', [CustomizeUserController::class, 'create'])->name('customize-user.create');
Route::post('/customize-user', [CustomizeUserController::class, 'store'])->name('customize-user.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
