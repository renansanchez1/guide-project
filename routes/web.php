<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\AuthController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rotas para Categoria e Artigo
Route::get('/index', [CategoriaController::class, 'index']);
Route::get('/artigo', [ArtigoController::class, 'show'])->name('artigo');
Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro');
Route::get('/perfil', [PerfilController::class, 'show'])->name('perfil');

//Rotas de autenticação
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Rotas de cadastro
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');












