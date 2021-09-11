<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ADM - Categoria</title>


    <script>
        function remove(route) {
            if(confirm('Você realmente deseja apagar essa categoria?'))
                window.location = route;
        }

    </script>
</head>
<body>

    @if(session()->has('success'))
        <div>
            {{ session()->get('success') }}
        </div>
    @endif

    <h1>Lista de Categorias</h1>

    <a href="{{ Route('category.create') }}">Cadastrar Categorias</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        <thead>

        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="#">visualizar<a>
                        <a href="{{ Route('category.edit', $category->id) }}">Editar<a>
                        <a onclick="remove('{{ Route('category.destroy', $category->id) }}');" href="#" >Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
