<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesoController;
use App\Http\Controllers\RutaProtegidaController;

Route::get('/', function () {
    return redirect()->route('Home');
});

Route::get('/Protegido', [RutaProtegidaController::class, 'Protegido'])->name('Protegido');
Route::get('/Protegido/Dos', [RutaProtegidaController::class, 'Protegido2'])->name('Protegido2');
Route::get('/Acceso/Login', [AccesoController::class, 'acceso_login'])->name('Login');
Route::get('/Acceso/Registrar', [AccesoController::class, 'acceso_registro'])->name('Registrar');
Route::post('/Acceso/Ingresar', [AccesoController::class, 'acceso_login_post'])->name('Ingresar');
Route::post('/Acceso/Registrarse', [AccesoController::class, 'acceso_registro_post'])->name('Registrarse');
Route::get('/Dashboard', function(){
    return view('dashboard.dashboard');
})->name('Dashboard');
Route::get('/Home',function(){
    return view('fronted.fronted');
})->name('Home');
Route::get('/Logout', [AccesoController::class, 'cerrar_sesion'])->name('Logout');