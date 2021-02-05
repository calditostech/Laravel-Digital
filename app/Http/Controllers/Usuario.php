<?php

namespace App\Http\Controllers;

use App\Models\Model\Usuario as UsuarioModel;
use Illuminate\Http\Request;
use Hash;

class Usuario extends Controller
{
    public function cadastrar(){

        
        return view('usuario.cadastro');
    }

    public function salvar(Request $request){
        $request->validate([
            "nome" => "required",
            "email" => "required|email",
            "senha" => "min:5"
        ]);

        UsuarioModel::cadastrar($request);

        return view('usuario.sucesso');
    }
}
