<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Help Center</h1>

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('login.auth') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Entrar</button>
                <div class="register-link">
                    <p>Não tem uma conta? <a href="{{ route('register') }}">Cadastre-se</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
