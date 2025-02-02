<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    /**
     * Exibe o formulário de cadastro de artigo.
     */
    public function create()
    {
        $dadosCadastro = [
            'titulo' => 'Cadastro de Artigo - Help Center',
            'logo' => '../img/sis.png',
            'botoes' => [
                ['texto' => 'Cadastrar Artigo', 'link' => 'cadastro'],
                ['texto' => 'Perfil', 'link' => 'perfil']
            ],
            'categorias' => [
                ['valor' => 'categoria1', 'nome' => 'Categoria 1'],
                ['valor' => 'categoria2', 'nome' => 'Categoria 2'],
                ['valor' => 'categoria3', 'nome' => 'Categoria 3'],
            ],
            'status' => [
                ['valor' => 'ativo', 'nome' => 'Ativo'],
                ['valor' => 'inativo', 'nome' => 'Inativo']
            ]
        ];

        return view('artigos.create', ['dadosCadastro' => $dadosCadastro]);
    }
}
