<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $categoria['titulo'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset($categoria['logo']) }}" alt="Zendesk Logo" width="200">
            </a>
            <div class="d-flex ms-auto">
                @foreach($categoria['botoes'] as $botao)
                    <a class="navbar-brand" href="{{ url($botao['link']) }}">
                        <button class="btn btn-outline-primary" type="button">{{ $botao['texto'] }}</button>
                    </a>
                @endforeach
            </div>
        </div>
    </header>

    <div class="fundo">
        <section class="hero">
            <div class="search-container">
                <input type="text" class="search-input" placeholder="{{ $categoria['pesquisa']['placeholder'] }}">
            </div>
        </section>

        <section class="categories">
            <h2>Categorias de Artigos</h2>
            <div class="category-list">
                @each('partials.categoria', $categoria['categorias'], 'categoria')
            </div>
        </section>
    </div>
</body>
</html>
