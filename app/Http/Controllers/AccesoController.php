<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\users_metadata;
use App\Models\perfil;
use Illuminate\Support\Facades\Auth;

class AccesoController extends Controller
{
    public function acceso_login(){
        $login = false;
        return view('acceso.login', compact('login'));
    }

    public function acceso_registro(){
        return view('acceso.register');
    }

    public function acceso_login_post(Request $resq){
        $resq->validate(
        [
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'El Campo Correo Electrónico es Requerido.',
            'password.required' => 'El Campo Contraseña es Requerido'
        ]
        );
        

        if (Auth::attempt(['email' => $resq->email, 'password' => $resq->password])) {
            $usuario = users_metadata::where(['users_id' => Auth::id()])->first();
            session(['users_metadata_id' => $usuario->id]);
            session(['perfil_id' => $usuario->perfil_id]);
            session(['perfil' => $usuario->perfil->nombre]);
            return redirect()->intended('/Dashboard');
        } else {
            return redirect()->route('Login', compact('login'));
        }
        
    }

    public function acceso_registro_post(Request $resq){
        $resq->validate([
            'name' => 'required',
            'dir' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'tel' => 'required'
        ],
        [
            'name.required' => "El Campo Nombre es Obligatorio",
            'dir.required' => "El Campo Dirección es Obligatorio",
            'email.required' => 'El Campo Correo Electrónico es Obligatorio',
            'password.required' => 'El Campo Contraseña es Obligatorio',
            'tel' => 'El Campo Teléfono es Obligatorio'
        ]
    
        );

        $user = User::create([
            'name' => $resq->name,
            'email' => $resq->email,
            'password' => Hash::make($resq->password),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        $perfil = perfil::create([
            'nombre' => $user->name
        ]);

        users_metadata::create([
            'users_id' => $user->id,
            'telefono' => $resq->tel,
            'direccion' => $resq->dir,
            'perfil_id' => $perfil->id
        ]);


        return redirect()->route('Login');
    }
}
