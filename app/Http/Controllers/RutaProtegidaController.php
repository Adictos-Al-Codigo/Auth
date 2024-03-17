<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutaProtegidaController extends Controller
{

    public function Protegido(){
        if (session('perfil_id')!=1) {
            return view('guards.error404');
        }else{
            return view('guards.protegido1');
        }
    }

    public function Protegido2(){
        if (session('perfil_id')!=1) {
            return view('guards.error404');
        }else{
            return view('guards.protegido2');
        }
    }
}
