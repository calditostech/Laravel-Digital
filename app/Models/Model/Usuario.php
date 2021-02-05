<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hash;

class Usuario extends Model
{
    protected $connection = 'mysql';
    protected $table = 'usuario';


    public static function listar(int $limite){
        $sql = self::select([
            "id",
            "nome",
            "email",
            "data_cadastro"
        ])
        ->limit($limite);
    
    }

    public static function cadastrar(Request $request){
      
        $sql = self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => hash::make($request->input('senha')),
            "data_cadastro" => DB::row('NOW()')
        ]);

        dd($sql->toSql(), $request->all());
    }
}
