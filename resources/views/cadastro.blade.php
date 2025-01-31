<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $dadosCadastro['titulo'] }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    
    @include('partials.header', ['logo' => $dadosCadastro['logo'], 'botoes' => $dadosCadastro['botoes']])

    <div class="container">
        <div class="content">
            <h1>Adicione um Artigo</h1>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="titulo">Título do Artigo</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Digite o título do artigo">
                </div>
                <div class="form-group">
                    <label for="conteudo">Conteúdo do Artigo</label>
                    <textarea id="conteudo" name="conteudo" rows="15" placeholder="Escreva o conteúdo do artigo"></textarea>
                </div>
            </form>
        </div>

        <div class="sidebar">
            <h2>Configurações do Artigo</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" id="autor" name="autor" placeholder="Informe o autor">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select id="categoria" name="categoria">
                        @foreach($dadosCadastro['categorias'] as $categoria)
                            <option value="{{ $categoria['valor'] }}">{{ $categoria['nome'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" id="tags" name="tags" placeholder="Adicione tags separadas por vírgula">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        @foreach($dadosCadastro['status'] as $status)
                            <option value="{{ $status['valor'] }}">{{ $status['nome'] }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn-save">Salvar Artigo</button>
            </form>
        </div>
    </div>
</body>
</html>
