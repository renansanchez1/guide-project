<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Artigo - Help Center</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

 
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    
    <header class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index">
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

    
    <body>
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
                        <label for="tags">Autor</label>
                        <input type="text" id="autor" name="autor" placeholder="Informe o autor">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" name="categoria">
                            <option value="categoria1">Categoria 1</option>
                            <option value="categoria2">Categoria 2</option>
                            <option value="categoria3">Categoria 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <input type="text" id="tags" name="tags" placeholder="Adicione tags separadas por vírgula">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status">
                            <option value="ativo">Ativo</option>
                            <option value="inativo">Inativo</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-save">Salvar Artigo</button>
                </form>
            </div>
        </div>
    </body>

</html>
