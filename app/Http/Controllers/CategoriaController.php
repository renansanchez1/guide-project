<?php

//se trata da página index
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = [
            'titulo' => 'Zendesk - Página Inicial',
            'logo' => '../img/sis.png',
            'botoes' => [
                ['texto' => 'Cadastrar Artigo', 'link' => 'cadastro'],
                ['texto' => 'Perfil', 'link' => 'perfil']
            ],
            'pesquisa' => [
                'placeholder' => 'Pesquisar no Zendesk...'
            ],
            'categorias' => [
                [
                    'titulo' => 'Categoria 1',
                    'imagem' => '../public/img/image.png',
                    'descricao' => 'Este é um resumo da Categoria 1. Ele descreve brevemente o conteúdo ou objetivo dos artigos incluídos nesta categoria.',
                    'link' => 'artigo'
                ],
                [
                    'titulo' => 'Categoria 2',
                    'imagem' => '../public/img/image.png',
                    'descricao' => 'Este é um resumo da Categoria 2. Aqui você encontrará artigos relevantes sobre diversos tópicos interessantes.',
                    'link' => 'artigo'
                ],
                [
                    'titulo' => 'Categoria 3',
                    'imagem' => '../public/img/image.png',
                    'descricao' => 'Resumo da Categoria 3: descubra informações valiosas e insights exclusivos neste grupo de artigos.',
                    'link' => 'artigo'
                ],
                [
                    'titulo' => 'Categoria 4',
                    'imagem' => '../public/img/image.png',
                    'descricao' => 'Resumo da Categoria 4: conteúdo de qualidade com dicas práticas, estudos e análises aprofundadas.',
                    'link' => 'artigo'
                ]
            ]
        ];

        return view('index', ['categoria' => $categoria]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
