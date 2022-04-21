<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Administrativo | Promotor</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
    <h1>Painel administrativo de promotores</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <label for="email">E-mail de Promotor</label>
            <div>
                <input type="email" name="email" class="form-input" />
            </div>
        </div>
        <div>
            <label for="password">Senha</label>
            <div>
                <input type="password" name="password" class="form-input" />
            </div>
        </div>
        <div>
            <button type="submit" class="form-submit">Autenticar</button>
        </div>
    </form>
</body>

</html>
