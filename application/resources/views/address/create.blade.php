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
    <title>Portal ADM - Cadastrar Endereço</title>
</head>
<body class="container">
    <h1 class="mt-5 text-center text-uppercase fw-bold"s>Cadastrar Endereço</h1>
    <a href="{{ Route('address.index') }}" class="mb-3 mt-3 btn btn-primary fw-bold">Voltar</a>

    <form method="POST" action="{{ Route('address.store') }}">
        @csrf

        <label class="h6 form-label">Rua / Av</label>
        <input class="mb-3 form-control" id="street" name="street" type="text" placeholder="Rua / Av" />

        <label class="h6 form-label">Número</label>
        <input class="mb-3 form-control" id="number" name="number" type="number" placeholder="Número" />

        <label class="h6 form-label">Bairro</label>
        <input class="mb-3 form-control" id="district" name="district" type="text" placeholder="Bairro" />

        <label class="h6 form-label">Cidade</label>
        <input class="mb-3 form-control" id="city" name="city" type="text" placeholder="Cidade" />

        <label class="h6 form-label">Estado</label>
        <input class="mb-3 form-control" id="state" name="state" type="text" placeholder="Estado" />

        <label class="h6 form-label">Pais</label>
        <input class="mb-3 form-control" id="country" name="country" type="text" placeholder="Pais" />



        <button type="submit" class="btn btn-secondary">Cadastrar</button>
    </form>
</body>
</html>
