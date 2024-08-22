<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/login', [AuthController::class, 'index'])->name('blog.login');

Route::view('login.register', 'login.register')->name('blog.registers');
// Route::get('/blog/login', [AuthController::class, 'index'])->name('login');


Route::post('/register',[AuthController::class,'save'])->name('blog.register');
