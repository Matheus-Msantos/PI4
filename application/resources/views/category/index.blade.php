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
    <!-- Link Css Categoria -->
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
    <!-- Link Font Awesome -->
    <script src="https://kit.fontawesome.com/8455a3d02b.js" crossorigin="anonymous"></script>
    <title>Portal ADM - Categoria</title>

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

    {{-- campo para menu --}}

    <div class="mt-5 input-group rounded justify-content-center">
        <span class="input-group-text border-0 bg-white" id="search-addon">
            <i class="fas fa-search"></i>
        </span>
        <span class="border-bottom">
            <input type="search" class="form-control rounded text-center" placeholder="Buscar Eventos" style="border: none">
        </span>
    </div>

    <div class="d-flex justify-content-center">
        <h1 class="mt-5 text-center fw-bold" id="titleIndex">Lista de Categorias</h1>

        <div>
            <a href="{{ Route('category.create') }}" class="btn btn-warning text-white" id="btn-plus">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    </div>

    <table class="table table-borderless">
        <thead>
            <tr class="text-center text-primary text-uppercase">
                <th>ID</th>
                <th>Nome</th>
            </tr>
        <thead>

        <tbody>
            @foreach($categories as $category)
                <tr class="text-center border-bottom">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="#" class="btn btn-success" style="border-radius: 100%">
                            <i class="fas fa-eye text-white"></i>
                        </a>
                        <a href="{{ Route('category.edit', $category->id) }}" class="btn btn-warning" style="border-radius: 100%">
                            <i class="fas fa-pen text-white"></i>
                        </a>
                        <a onclick="remove('{{ Route('category.destroy', $category->id) }}');" href="#" class="btn btn-danger" style="border-radius: 100%">
                            <i class="fas fa-trash-alt text-white"></i>
                        </a>
                        <hr>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
