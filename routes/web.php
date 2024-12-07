<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');

Route::get('/', function () {
    return view('home');
});

//Route::get(a,[b::class, c]);
Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');

Route::get('/register', [UserController::class,'register'])->name('register');

Route::post('/register',[UserController::class,'registerUser'])->name('registerUser');

Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/login',[UserController::class,'login'])->name('login');

Route::post('/login',[UserController::class,'loginUser'])->name('login');

//Route::Post Related;
Route::post('/create-post',[PostController::class,'createPost'])->name('createPost');
