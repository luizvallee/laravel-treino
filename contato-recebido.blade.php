<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato Recebido</title>
</head>
<body>
    <h1>Formulário de Contato Recebido</h1>
    <p>Obrigado por entrar em contato! Aqui estão os dados que você enviou:</p>
    <ul>
        <li><strong>Nome:</strong> {{ $nome }}</li>
        <li><strong>E-mail:</strong> {{ $email }}</li>
        <li><strong>Telefone:</strong> {{ $telefone }}</li>
    </ul>
</body>
</html>