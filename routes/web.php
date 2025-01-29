<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [CategoriaController::class, 'index']);
Route::get('/artigo', [ArtigoController::class, 'artigo']);
Route::get('/perfil', [PerfilController::class, 'perfil']);
Route::get('/cadastro', [CadastroController::class, 'cadastro']);
Route::get('/login', [LoginController::class, 'login']);





