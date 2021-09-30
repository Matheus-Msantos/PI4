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
            <a class="h5 nav-link active text-white fw-bold" href="{{ Route('category.index') }}">Categoria</a>
        </li>

        <li class="nav-item">
            <a class="h5 nav-link active text-white fw-bold" href="{{ Route('address.index') }}">Endereço</a>
        </li>

        <li class="nav-item">
            <a class="h5 nav-link active text-white fw-bold" href="{{ Route('product.index') }}">Produtos</a>
        </li>
    </ul>

    <h1 class="mt-5 text-center text-uppercase fw-bold">Lista de Usuarios</h1>



    <a href="{{ Route('user.create') }}" class="btn btn-primary mb-3 fw-bold">Cadastrar Usuario</a>

    <table class="table table-bordered border-primary">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Image</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Ação</th>
            </tr>
        <thead>

        <tbody>
            @foreach($users as $user)
                <tr class="text-center">
                    <td>{{ $user->id }}</td>
                    <td><img src="{{ $user->image }}"></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->isAdmin }}</td>
                    <td>
                        <a href="{{ Route('user.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                        <a onclick="remove('{{ Route('user.destroy', $user->id) }}');" href="#" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection
