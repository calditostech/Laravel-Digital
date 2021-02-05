<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Usuario;

Route::get('/', [Usuario::class, 'cadastrar'])->name('home');
Route::post('/salvar', [Usuario::class, 'salvar'])->name('salvar');


