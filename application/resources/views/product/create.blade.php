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
    <title>Portal ADM - Cadastrar Evento</title>
</head>
<body class="container">
    <h1 class="mt-5 text-center text-uppercase fw-bold">Cadastrar Evento</h1>
    <a href="{{ Route('product.index') }}" class="mb-3 mt-3 btn btn-primary fw-bold">Voltar</a>

    <form method="POST" action="{{ Route('product.store') }}" enctype="multipart/form-data">
        @csrf


            <label class="h6 form-label">Nome</label>
            <input class="mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" required>



            <label class="h6 form-label">Preço</label>
            <input class="mb-3 form-control" id="preco" name="price" type="number" placeholder="Preço" required>



            <label class="h6 form-label">Hora</label>
            <input class="mb-3 form-control" id="hora" name="time" type="text" placeholder="16:20h"  required>



            <label class="h6 form-label">Data</label>
            <input class="mb-3 form-control" id="data" name="date" type="text" placeholder="DD/MM/YYYY" required>



            <label class="h6 form-label">Classificação</label>
            <input class="mb-3 form-control" id="classification" name="classification" type="text" placeholder="+18"  required>


            <label class="h6 form-label">Descrição</label>
            <textarea class="mb-3 form-control" name="description"s rows="5"></textarea>

            <label class="h6 form-label">Imagem</label>
            <input class="mb-3 form-control" id="image" name="image" type="file">

            <label class="h6 form-label">Categoria</label>
            <select class="mb-3 form-control" id="category" name="category_id" class="form-select" aria-label="Default select example">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
            </select>



            <label>Endereço</label>
            <select class="form-control" id="address" name="address_id">
            @foreach($addresses as $address)
                <option value="{{ $address->id }}">
                    {{ $address->street }}
                </option>
            @endforeach
            </select>


        <button type="submit" class="mt-3 mb-3 btn btn-secondary fw-bold">Cadastrar</button>
    </form>
</body>
</html>
