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
    <title>Portal ADM - Editar Usuário</title>
</head>
<body class="container">
    <h1 class="mt-5 text-center text-uppercase fw-bold">Editar Usuário</h1>
    <a href="{{ Route('user.index') }}" class="mb-3 btn btn-primary">Voltar</a>

    <form method="POST" action="{{ Route('user.update', $user->id) }}" enctype="multipart/form-data">
        @csrf

        <label class="h6 form-label">Admin</label>
        <input class="mb-3 form-control" id="isAdmin" name="isAdmin" type="number" placeholder="0 ou 1" value="{{ $user->isAdmin }}">

        <button type="submit" class="mb-3 btn btn-secondary">Atualizar</button>
    </form>
</body>
</html>
