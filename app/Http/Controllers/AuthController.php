<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Exibe a página de login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Processa a autenticação do usuário.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('perfil');
        }

        return back()->with('error', 'Credenciais inválidas.');
    }

    /**
     * Exibe a página de cadastro.
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Processa o cadastro do usuário.
     */
    public function register(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Criar o usuário no banco de dados
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login automático após cadastro
        Auth::login($user);

        // Redireciona para a página de perfil
        return redirect()->route('perfil')->with('success', 'Cadastro realizado com sucesso!');
    }

    /**
     * Faz logout do usuário.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
