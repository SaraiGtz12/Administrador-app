<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Vistas_Controller;
use Illuminate\Support\Facades\Route;

#--- Ruta Login ---#
Route::get('/', [Vistas_Controller::class, 'Login'])->name('login');

#--- Ruta Administrador ---#
Route::get('/home', [Vistas_Controller::class, 'Home'])->name('Home');
Route::get('/registrar_cliente', [Vistas_Controller::class, 'RegistrarCliente'])->name('RegistrarCliente');
Route::get('/agregar_servicio', [Vistas_Controller::class, 'RegistrarServicio'])->name('AgregarServicio');
Route::get('/search',[Vistas_Controller::class, 'Buscar'])->name('Buscar');
Route::get('/servicios_registrados', [Vistas_Controller::class, 'VistaServiciosRegistrados'])->name('ServiciosRegistrados');

#--- Login & LogOut--#
Route::post('/login', [LoginController::class, 'LogIn'])->name('Log_In');
Route::post('/logout', [LoginController::class, 'LogOut'])->name('LogOut');