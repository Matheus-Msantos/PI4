@extends('layouts.head')
@section('content')
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
@endsection
