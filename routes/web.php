<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Homecontroller;
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

Route::get('/', Homecontroller::class);

Route::get('administrador', [AdminController::class, 'index']);

Route::get('administrador/create', [AdminController::class, 'create']);

Route::get('administrador/{admi}', [AdminController::class, 'show']);