<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artigo;

class ArtigosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artigo::insert([
            'titulo' => 'Como usar o Help Center',
            'logo' => 'img/sis.png',
            'botoes' => json_encode([
                ['texto' => 'Cadastrar Artigo', 'link' => 'cadastro'],
                ['texto' => 'Perfil', 'link' => 'perfil']
            ]),
            'data' => '2024-12-18',
            'autor' => 'Equipe de Suporte',
            'conteudo' => json_encode([
                [
                    'subtitulo' => 'Primeiros Passos',
                    'texto' => 'O primeiro passo para usar o Help Center é pesquisar por um artigo relacionado ao seu problema.'
                ],
                [
                    'subtitulo' => 'Pesquisando Artigos',
                    'texto' => 'Utilize a barra de pesquisa na parte superior da página para procurar artigos. Se não encontrar uma solução, entre em contato conosco!'
                ]
            ]),
            'relacionados' => json_encode([
                ['titulo' => 'Como solucionar problemas com sua conta', 'link' => 'problemas-conta'],
                ['titulo' => 'Como redefinir sua senha', 'link' => 'redefinir-senha'],
                ['titulo' => 'Guia rápido de navegação no Help Center', 'link' => 'guia-help-center']
            ]),
            'categoria' => 'Suporte Técnico',
            'tags' => json_encode([]), // Adicionando valor para 'tags' (pode ser uma lista vazia, se necessário)
            'status' => true
        ]);
    }
}
