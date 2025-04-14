<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    //

    public function cadastrar(Request $request) {
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
    }
}
