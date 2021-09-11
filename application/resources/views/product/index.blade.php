<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ADM - Eventos</title>


    <script>
        function remove(route) {
            if(confirm('Você realmente deseja apagar esse evento?'))
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

    <h1>Lista de Eventos</h1>

    <a href="{{ Route('product.create') }}">Cadastrar Evento</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Classificação</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Endereço</th>
            </tr>
        <thead>

        <tbody>
            @foreach($products as $product)
                <tr>
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
                        <a href="#">visualizar<a>
                        <a href="{{ Route('product.edit', $product->id) }}">Editar<a>
                        <a onclick="remove('{{ Route('product.destroy', $product->id) }}');" href="#" >Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
