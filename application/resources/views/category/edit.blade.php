<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ADM - Editar Categoria</title>
</head>
<body>
    <h1>Editar Categoria</h1>
    <a href="{{ Route('category.index') }}">Voltar</a>

    <form method="POST" action="{{ Route('category.update', $category->id) }}">
        @csrf

        <label>Nome</label>
        <input id="nome" name="name" type="text" placeholder="nome" value='{{ $category->name }}'/>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
