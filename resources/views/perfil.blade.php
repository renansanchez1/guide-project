<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $dadosPerfil['titulo'] }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
</head>
<body>
    
    @include('partials.header', ['logo' => $dadosPerfil['logo'], 'botoes' => $dadosPerfil['botoes']])

    <main class="container">
        <section class="profile-header">
            <div class="avatar">
                <img src="{{ asset($dadosPerfil['usuario']['foto']) }}" alt="Foto do Usuário">
            </div>
            <div class="user-info">
                <h1>{{ $dadosPerfil['usuario']['nome'] }}</h1>
                <p class="role">{{ $dadosPerfil['usuario']['cargo'] }}</p>
                <p class="email">{{ $dadosPerfil['usuario']['email'] }}</p>
            </div>
        </section>

        <section class="form-section">
            <h2>Dados de Cadastro</h2>
            <form action="#" method="POST" class="profile-form">
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" value="{{ $dadosPerfil['usuario']['nome'] }}" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" value="{{ $dadosPerfil['usuario']['telefone'] }}" required>
                </div>
                <div class="form-group">
                    <label for="localizacao">Localização:</label>
                    <input type="text" id="localizacao" name="localizacao" value="{{ $dadosPerfil['usuario']['localizacao'] }}" required>
                </div>
                <div class="form-group">
                    <label for="data-criacao">Data de Criação:</label>
                    <input type="date" id="data-criacao" name="data-criacao" value="{{ $dadosPerfil['usuario']['data_criacao'] }}" required>
                </div>
                <div class="form-actions">
                    <button type="submit" class="save-btn">Salvar</button>
                    <button type="reset" class="cancel-btn">Cancelar</button>
                </div>
            </form>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Zendesk. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
