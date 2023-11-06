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
/* Rutas de la página*/

/* Página principal*/
Route::get("/", [PagesController::class, 'index']);
/* Página de creadores*/
Route::get('/about', [PagesController::class, 'about']);

