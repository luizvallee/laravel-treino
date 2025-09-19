<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Bem-vindo à Nossa Aplicação</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('sobre-nos') }}">Sobre Nós</a></li>
                <li><a href="{{ route('contato') }}">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Sobre Nós</h2>
            <p>Esta é a página inicial da nossa aplicação. Aqui você pode encontrar informações sobre nós e entrar em contato.</p>
        </section>
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Nossa Aplicação. Todos os direitos reservados.</p>
    </footer>
</body>
</html>