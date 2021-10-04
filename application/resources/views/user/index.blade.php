@extends('layouts.head')
@section('content')

<body class="c-section-container">

    @if(session()->has('success'))
        <div class="c-section-alert alert" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <h1 class="c-section-title">Lista de Usuarios</h1>

    <a href="{{ Route('user.create') }}" class="c-section-button--create">Cadastrar Usuario</a>

    <table class="c-section-table table table-hove">
        <thead class="c-section-table--head">
            <tr class="c-section-table--row">
                <th class="c-section-table--header">ID</th>
                <th class="c-section-table--header">Image</th>
                <th class="c-section-table--header">Nome</th>
                <th class="c-section-table--header">Email</th>
                <th class="c-section-table--header">Admin</th>
                <th class="c-section-table--header">Ação</th>
            </tr>
        <thead>

        <tbody class="c-section-table--body">
            @foreach($users as $user)
                <tr class="c-section-table--head">
                    <td class="c-section-table--data">{{ $user->id }}</td>
                    <td class="c-section-table--data"><img src="{{ $user->image }}" style="width: 120px"></td>
                    <td class="c-section-table--data">{{ $user->name }}</td>
                    <td class="c-section-table--data">{{ $user->email }}</td>
                    <td class="c-section-table--data">{{ $user->isAdmin }}</td>
                    <td class="c-section-table--data">
                        <a href="{{ Route('user.edit', $user->id) }}" class="c-section-table--button-edit">
                            <i class="fas fa-pencil-alt fa-sm"></i>
                        </a>
                        <a onclick="remove('{{ Route('user.destroy', $user->id) }}');" href="#" class="c-section-table--button-delete">
                            <i class="fas fa-trash fa-sm"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection
