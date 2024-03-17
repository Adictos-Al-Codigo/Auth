<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesoController;

Route::get('/', function () {
    return redirect()->route('Home');
});

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