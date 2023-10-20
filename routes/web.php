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

//Laravel 8 (Nueva otro)

Route::get('/productos', 'App\Http\Controllers\ControladorProducto@index');