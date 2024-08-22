<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/login',[AuthController::class,'index'])->name('blog.login');
Route::get('/register',[AuthController::class,'register'])->name('blog.register');
