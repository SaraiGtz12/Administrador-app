<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Vistas_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

#--- Ruta Login ---#
Route::get('/', [Vistas_Controller::class, 'Login'])->name('login');

#--- Ruta Administrador ---#
Route::get('/home', [Vistas_Controller::class, 'Home'])->name('Home');


//RUTAS PARA PLANTILLAS PDF
Route::get('generate-pdf', [PdfController::class, 'generatePdf']);


#--- Login & LogOut--#
Route::post('/login', [LoginController::class, 'LogIn'])->name('Log_In');
Route::post('/logout', [LoginController::class, 'LogOut'])->name('LogOut');

