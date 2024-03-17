<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutaProtegidaController extends Controller
{
    public function Protegido(){
        return view('guards.protegido1');
    }

    public function Protegido2(){
        return view('guards.protegido2');
    }
}
