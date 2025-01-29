<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style3.css">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="../img/sis.png" alt="Zendesk Logo" width="200">
            </a>
            <div class="d-flex ms-auto">
                <a class="navbar-brand" href="cadastro">
                    <button class="btn btn-outline-primary" type="button">Cadastrar Artigo</button>
                </a>
                <a class="navbar-brand" href="perfil">
                    <button class="btn btn-outline-primary" type="button">Perfil</button>
                </a>
            </div>
        </div>
    </header>

    <main class="container">
        <section class="profile-header">
            <div class="avatar">
                <img src="../img/images.png" alt="Foto do Usuário">
            </div>
            <div class="user-info">
                <h1>Gabriel Barbosa</h1>
                <p class="role">Jogador de futebol</p>
                <p class="email">gabriel@gabigol.com</p>
            </div>
        </section>

        <section class="form-section">
            <h2>Dados de Cadastro</h2>
            <form action="#" method="POST" class="profile-form">
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" value="Gabriel Barbosa" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" value="(11) 99999-9999" required>
                </div>
                <div class="form-group">
                    <label for="localizacao">Localização:</label>
                    <input type="text" id="localizacao" name="localizacao" value="São Paulo, Brasil" required>
                </div>
                <div class="form-group">
                    <label for="data-criacao">Data de Criação:</label>
                    <input type="date" id="data-criacao" name="data-criacao" value="2020-07-15" required>
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
