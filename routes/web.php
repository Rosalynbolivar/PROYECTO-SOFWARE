<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorProducto;
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
Route::get("/productos", [ControladorProducto::class, 'index']);
Route::get('/about', [ControladorProducto::class, 'about']);
Route::get('/productos/ciudades', [ControladorProducto::class, 'districts']);

// El patron será un entero
Route::get('/productos/{id}', [ControladorProducto::class, 'show'])->where('id', '[0-9]+');

// El patron será una serie de letras
