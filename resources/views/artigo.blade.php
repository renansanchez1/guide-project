<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $artigo['titulo'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style5.css') }}">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('index') }}">
                <img src="{{ asset($artigo['logo']) }}" alt="Zendesk Logo" width="200">
            </a>
            <div class="d-flex ms-auto">
                @foreach($artigo['botoes'] as $botao)
                    <a href="{{ url($botao['link']) }}" class="btn btn-outline-primary ms-2">
                        {{ $botao['texto'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </header>

    <main class="article-page">
        <div class="container">
            <article class="article-content">
                <h1 class="article-title">{{ $artigo['titulo'] }}</h1>
                <p class="article-meta">Publicado em: {{ $artigo['data'] }} | Autor: {{ $artigo['autor'] }}</p>
                
                <section class="article-body">
                    @foreach($artigo['conteudo'] as $conteudo)
                        <h2>{{ $conteudo['subtitulo'] }}</h2>
                        <p>{{ $conteudo['texto'] }}</p>
                    @endforeach
                </section>

                <div class="article-navigation">
                    <a href="{{ url('index') }}" class="btn">Voltar para a lista de artigos</a>
                </div>
            </article>

            <aside class="related-articles">
                <h2>Artigos Relacionados</h2>
                <ul>
                    @each('partials.artigo_relacionado', $artigo['relacionados'], 'relacionado')
                </ul>
            </aside>
        </div>
    </main>
</body>
</html>
