<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Portal ADM - Cadastrar Usuário</title>
</head>
<body class="container">
    <h1 class="mt-5 text-center text-uppercase fw-bold">Cadastrar Usuário</h1>
    <a href="{{ Route('user.index') }}" class="mb-3 mt-3 btn btn-primary fw-bold">Voltar</a>

    <form method="POST" action="{{ Route('user.store') }}" enctype="multipart/form-data">
        @csrf

            <label class="h6 form-label">Nome</label>
            <input class="mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" required>

            <label class="h6 form-label">email</label>
            <input class="mb-3 form-control" id="email" name="email" type="email" placeholder="email" required>

            <label class="h6 form-label">senha</label>
            <input class="mb-3 form-control" id="password" name="password" type="password" placeholder="senha" required>

            <label class="h6 form-label">Imagem</label>
            <input class="mb-3 form-control" id="image" name="image" type="file">

            <label class="h6 form-label">Admin</label>
            <input class="mb-3 form-control" id="isAdmin" name="isAdmin" type="number" placeholder="0 ou 1" value="0" disabled>

        <button type="submit" class="mt-3 mb-3 btn btn-secondary fw-bold">Cadastrar</button>
    </form>
</body>
</html>
