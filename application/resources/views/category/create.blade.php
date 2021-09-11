<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ADM - Cadastrar Categoria</title>
</head>
<body>
    <h1>Cadastrar Categoria</h1>
    <a href="{{ Route('category.index') }}">Voltar</a>

    <form method="POST" action="{{ Route('category.store') }}">
        @csrf

        <label>Nome</label>
        <input id="nome" name="name" type="text" placeholder="nome" />

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
