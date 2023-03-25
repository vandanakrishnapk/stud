<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/hellos',[HomeController::class,'hellos']);
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/create',[HomeController::class,'create_register'])->name('create');
Route::get('/profile',[HomeController::class,'profile'])->name('profile');
Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('/update/{id}',[HomeController::class,'update'])->name('update');
Route::get('/delete/{id}',[HomeController::class,'delete'])->name('delete');
Route::get('/leave',[HomeController::class,'leave'])->name('leave');





