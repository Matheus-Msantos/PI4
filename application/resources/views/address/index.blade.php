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
    <title>Portal ADM - Endereço</title>


    <script>
        function remove(route) {
            if(confirm('Você realmente deseja apagar essa categoria?'))
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

    <ul class="nav justify-content-center bg-secondary">
        <li class="nav-item">
            <a class="h5 nav-link active text-white fw-bold" href="{{ Route('product.index') }}">Produtos</a>
        </li>
        <li class="nav-item">
            <a class="h5 nav-link active text-white fw-bold" href="{{ Route('category.index') }}">Categorias</a>
        </li>
    </ul>

    <h1 class="mt-5 text-center text-uppercase fw-bold">Lista de Endereço</h1>

    <a href="{{ Route('address.create') }}" class="mb-3 btn btn-primary">Cadastrar Endereço</a>

    <table class="table table-bordered border-primary">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Rua / Av</th>
                <th>Bairro</th>
                <th>Número</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Pais</th>
                <th>Ação</th>
            </tr>
        <thead>

        <tbody>
            @foreach($addresses as $address)
                <tr class="text-center">
                    <td>{{ $address->id }}</td>
                    <td>{{ $address->street }}</td>
                    <td>{{ $address->district }}</td>
                    <td>{{ $address->number }}</td>
                    <td>{{ $address->city }}</td>
                    <td>{{ $address->state }}</td>
                    <td>{{ $address->country }}</td>
                    <td>
                        <a href="#" class="btn btn-success">visualizar<a>
                        <a href="{{ Route('address.edit', $address->id) }}" class="btn btn-warning">Editar<a>
                        <a onclick="remove('{{ Route('address.destroy', $address->id) }}');" href="#" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
