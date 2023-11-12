<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
Use App\Http\Controllers\SessionsrController;
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



//Laravel 8 (Nuevo)
Route::get("/", [PagesController::class, 'index'])->name("home.index");
/////

//register y login
Route::get("/register", [RegisterController::class, 'create'])->name("register.create");
Route::get("/login", [SessionsrController::class, 'create'])->name("login.create");

////

Route::get('/about', [PagesController::class, 'about'])->name("creators.about");
Route::get('/how', [PagesController::class,'how'])->name("method.how");
Route::get('/add', [PagesController::class,'add']);
Route::get('/edit/{id}', [PagesController::class,'edit']); //soon TM

Route::post('insert-data', [PagesController::class, 'insert']);
Route::put('edit-data/{id}', [PagesController::class,'update']);

Route::get('delete/{id}',[PagesController::class,'delete']);