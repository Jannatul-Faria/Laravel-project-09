<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/portfolio',[HomeController::class,'portfolio'])->name('portfolio');
Route::get('/client',[HomeController::class,'client'])->name('client');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
