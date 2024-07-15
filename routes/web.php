<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizzeController;
use App\Http\Controllers\UsersController;

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



Route::get('/',[App\Http\Controllers\QuizzeController::class, 'presntation'])->name('presntation');
Route::get('/Commencer',[App\Http\Controllers\QuizzeController::class, 'index'])->name('Commencer');
Route::get('/user',[App\Http\Controllers\UsersController::class, 'index'])->name('user');
Route::post('/adduser',[App\Http\Controllers\UsersController::class, 'store'])->name('adduser');
Route::get('quizze',[App\Http\Controllers\QuizzeController::class, 'create'])->name('quizze');
Route::post('addquizze',[App\Http\Controllers\QuizzeController::class, 'store'])->name('addquizze');
