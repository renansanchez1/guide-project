<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Cadastro</h1>
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirme a Senha</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit" class="btn">Cadastrar</button>
                <div class="register-link">
                    <p>Já tem uma conta? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
