<?php

use App\Http\Controllers\Vistas_Controller;
use Illuminate\Support\Facades\Route;

#--- Ruta Login ---#
Route::get('/', [Vistas_Controller::class, 'Login'])->name('login');

#--- Ruta Administrador ---#
Route::get('/home', [Vistas_Controller::class, 'Home'])->name('Home');