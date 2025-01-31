<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Exibe a página de perfil do usuário.
     */
    public function show()
    {
        $dadosPerfil = [
            'titulo' => 'Perfil do Usuário',
            'logo' => '../img/sis.png',
            'botoes' => [
                ['texto' => 'Cadastrar Artigo', 'link' => 'cadastro'],
                ['texto' => 'Perfil', 'link' => 'perfil']
            ],
            'usuario' => [
                'nome' => 'Gabriel Barbosa',
                'cargo' => 'Jogador de futebol',
                'email' => 'gabriel@gabigol.com',
                'foto' => '../img/images.png',
                'telefone' => '(11) 99999-9999',
                'localizacao' => 'São Paulo, Brasil',
                'data_criacao' => '2020-07-15'
            ]
        ];

        return view('perfil', ['dadosPerfil' => $dadosPerfil]);
    }
}
