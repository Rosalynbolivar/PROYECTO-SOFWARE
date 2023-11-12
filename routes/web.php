<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
Route::get("/", [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/how', [PagesController::class,'how']);
Route::get('/add', [PagesController::class,'add']);
Route::get('/edit/{id}', [PagesController::class,'edit']); //soon TM

Route::get('insert-data', [PagesController::class, 'insert']);