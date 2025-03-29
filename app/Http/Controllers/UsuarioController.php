<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsuarioController extends Controller
{
    public function cadastrar(Request $request){
        $request->validate([
            'nome_completo' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', Rule::unique('usuarios', 'email')],
            'senha' => ['required', 'min:6', 'max:255'],
        ]);

        $usuario = Usuario::create([
            'is_admin' => false,
            'nome_completo' => $request->nome_completo,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
            'status' => 'ativo',
        ]);

        //If i want the process of login to be automatically 
        //done when finishing the register process, I just need to
        //pass the $usuario to auth()->login() function

        return redirect('/');
    }

    public function login(Request $request) {
        $request->validate([
            'login_email' => ['required', 'email'],
            'login_senha' => ['required'],
        ]);

        if(auth()->attempt([
            'email' => $request['login_email'],
            'senha' => $request['login_seenha'],
        ])) {
            $request->session()->regenerate();
        }

        return redirect('/catalogo');
    }

    public function sair() {
        auth()->logout();
        return redirect('/');
    }
}
