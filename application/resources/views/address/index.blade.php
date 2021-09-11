<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ADM - Endereço</title>


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

    <h1>Lista de Endereço</h1>

    <a href="{{ Route('address.create') }}">Cadastrar Endereço</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Rua / Av</th>
                <th>Bairro</th>
                <th>Número</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Pais</th>
            </tr>
        <thead>

        <tbody>
            @foreach($addresses as $address)
                <tr>
                    <td>{{ $address->id }}</td>
                    <td>{{ $address->street }}</td>
                    <td>{{ $address->district }}</td>
                    <td>{{ $address->number }}</td>
                    <td>{{ $address->city }}</td>
                    <td>{{ $address->state }}</td>
                    <td>{{ $address->country }}</td>
                    <td>
                        <a href="#">visualizar<a>
                        <a href="{{ Route('address.edit', $address->id) }}">Editar<a>
                        <a onclick="remove('{{ Route('address.destroy', $address->id) }}');" href="#" >Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
