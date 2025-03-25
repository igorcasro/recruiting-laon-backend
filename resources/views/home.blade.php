<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    @auth
    
    @else
        <div style="border: 3px solid black;">
            <h2>Cadastre-se</h2>
            <h4>Acompanhe os melhores filmes e séries.</h4>
            <form action="/cadastro" method="POST">
                @csrf
                <input type="text" name="user" placeholder="Nome completo">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Senha">
                <button>Cadastrar</button>
            </form>
        </div>
        <div style="border: 3px solid black;">
            <h2>Entrar</h2>
            <h4>Bem vindo(a) de volta!</h4>
            <form action="/login" method="POST">
                @csrf
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Senha">
                <button>Entrar</button>
            </form>
        </div>
    @endauth
</body>
</html>