<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Usuario;

Route::get('/', [Usuario::class, 'cadastrar']);
Route::post('/salvar', [Usuario::class, 'salvar']);


