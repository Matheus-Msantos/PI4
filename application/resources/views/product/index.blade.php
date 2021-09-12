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
    <title>Portal ADM - Eventos</title>


    <script>
        function remove(route) {
            if(confirm('Você realmente deseja apagar esse evento?'))
                window.location = route;
        }

    </script>
</head>
<body class="container">

    @if(session()->has('success'))
        <div class="alert alert-info" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <h1 class="mt-5 text-center text-uppercase fw-bold">Lista de Eventos</h1>

    <a href="{{ Route('product.create') }}" class="btn btn-primary mb-3 fw-bold">Cadastrar Evento</a>

    <table class="table table-bordered border-primary">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Classificação</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Endereço</th>
                <th>Ação</th>
            </tr>
        <thead>

        <tbody>
            @foreach($products as $product)
                <tr class="text-center">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->date }}</td>
                    <td>{{ $product->time }}</td>
                    <td>{{ $product->clasifiction }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->address_id }}</td>
                    <td>
                        <a href="#" class="btn btn-success">visualizar<a>
                        <a href="{{ Route('product.edit', $product->id) }}" class="btn btn-warning">Editar<a>
                        <a onclick="remove('{{ Route('product.destroy', $product->id) }}');" href="#" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
