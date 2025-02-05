<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artigo;

class ArtigoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recupera todos os artigos
        $artigos = Artigo::all();
        
        // Retorna a view com os artigos
        return view('artigos.index', ['artigos' => $artigos]);
    }

    /**
     * Show the specified resource.
     */
    public function show(string $id)
    {
        // Recupera o artigo com o id fornecido ou gera um erro 404
        $artigo = Artigo::findOrFail($id);
    
        // Retorna a view 'artigos.index' com o artigo encontrado
        return view('artigos.index', ['artigo' => $artigo]);
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Recupera o artigo específico para edição
        $artigo = Artigo::findOrFail($id);

        // Retorna a view de edição com os dados do artigo
        return view('artigos.edit', ['artigo' => $artigo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|max:255',
            // Adicione outras validações aqui
        ]);

        // Atualiza o artigo
        $artigo = Artigo::findOrFail($id);
        $artigo->update($request->all());

        // Redireciona após a atualização
        return redirect()->route('artigos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Deleta o artigo
        Artigo::destroy($id);

        // Redireciona após a exclusão
        return redirect()->route('artigos.index');
    }
}
