<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    /**
     * Display a single article.
     */
    public function show()
    {
        $artigo = [
            'titulo' => 'Como usar o Help Center',
            'logo' => 'img/sis.png',
            'botoes' => [
                ['texto' => 'Cadastrar Artigo', 'link' => 'cadastro'],
                ['texto' => 'Perfil', 'link' => 'perfil']
            ],
            'data' => '18 de Dezembro de 2024',
            'autor' => 'Equipe de Suporte',
            'conteudo' => [
                [
                    'subtitulo' => 'Primeiros Passos',
                    'texto' => 'O primeiro passo para usar o Help Center é pesquisar por um artigo relacionado ao seu problema.'
                ],
                [
                    'subtitulo' => 'Pesquisando Artigos',
                    'texto' => 'Utilize a barra de pesquisa na parte superior da página para procurar artigos. Se não encontrar uma solução, entre em contato conosco!'
                ]
            ],
            'relacionados' => [
                ['titulo' => 'Como solucionar problemas com sua conta', 'link' => 'problemas-conta'],
                ['titulo' => 'Como redefinir sua senha', 'link' => 'redefinir-senha'],
                ['titulo' => 'Guia rápido de navegação no Help Center', 'link' => 'guia-help-center']
            ]
        ];

        return view('artigos.index', ['artigo' => $artigo]);
    }

    public function edit(/**string $id */){
        return view('artigos.edit');
    }
}
