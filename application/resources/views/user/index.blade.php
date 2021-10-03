@extends('layouts.head')
@section('content')
{{-- <link rel="stylesheet" href="{{asset('css/base.css')}}"> --}}

<body class="c-section-container">

    @if(session()->has('success'))
        <div class="alert alert-info" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <h1 class="c-section-title mt-5 text-center text-uppercase fw-bold">Lista de Usuarios</h1>

    <a href="{{ Route('user.create') }}" class="c-section-table--button btn btn-primary mb-3 fw-bold">Cadastrar Usuario</a>

    <table class="c-section-table table table-borderless">
        <thead class="c-section-table--head">
            <tr class="c-section-table--row text-center text-primary text-uppercase">
                <th class="c-section-table--header">ID</th>
                <th class="c-section-table--header">Image</th>
                <th class="c-section-table--header">Nome</th>
                <th class="c-section-table--header">Email</th>
                <th class="c-section-table--header">Admin</th>
            </tr>
        <thead>

        <tbody class="c-section-table--body">
            @foreach($users as $user)
                <tr class="c-section-table--head text-center border-bottom">
                    <td class="c-section-table--data">{{ $user->id }}</td>
                    <td class="c-section-table--data"><img src="{{ $user->image }}" style="width: 120px"></td>
                    <td class="c-section-table--data">{{ $user->name }}</td>
                    <td class="c-section-table--data">{{ $user->email }}</td>
                    <td class="c-section-table--data">{{ $user->isAdmin }}</td>
                    <td class="c-section-table--data">
                        <a href="{{ Route('user.edit', $user->id) }}" class="c-section-table--button btn btn-warning">Editar</a>
                        <a onclick="remove('{{ Route('user.destroy', $user->id) }}');" href="#" class="c-section-table--button btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection
