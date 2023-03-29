<?php

use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/create',[HomeController::class,'create'])->name('create');
Route::get('profile',[HomeController::class,'profile'])->name('profile');
Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('/update/{id}',[HomeController::class,'update'])->name('update');
Route::get('/delete/{id}',[HomeController::class,'delete'])->name('delete');
Route::get('/leave',[HomeController::class,'leave'])->name('leave');