@extends('layouts.head')
@section('content')
<body class="c-section-container">

    @if(session()->has('success'))
        <div class="c-section-alert alert" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <h1 class="c-section-title">Lista de Endereço</h1>

    <a href="{{ Route('address.create') }}" class="c-section-button--create">Cadastrar Endereço</a>

    <table class="c-section-table table">
        <thead class="c-section-table--head">
            <tr class="c-section-table--row">
                <th class="c-section-table--header">ID</th>
                <th class="c-section-table--header">Rua / Av</th>
                <th class="c-section-table--header">Bairro</th>
                <th class="c-section-table--header">Número</th>
                <th class="c-section-table--header">Cidade</th>
                <th class="c-section-table--header">Estado</th>
                <th class="c-section-table--header">Pais</th>
                <th class="c-section-table--header">Ação</th>
            </tr>
        <thead>

        <tbody class="c-section-table--body">
            @foreach($addresses as $address)
                <tr class="c-section-table--head">
                    <td class="c-section-table--data">{{ $address->id }}</td>
                    <td class="c-section-table--data">{{ $address->street }}</td>
                    <td class="c-section-table--data">{{ $address->district }}</td>
                    <td class="c-section-table--data">{{ $address->number }}</td>
                    <td class="c-section-table--data">{{ $address->city }}</td>
                    <td class="c-section-table--data">{{ $address->state }}</td>
                    <td class="c-section-table--data">{{ $address->country }}</td>
                    <td class="c-section-table--data c-section-table--button">
                    <a href="{{ Route('address.edit', $address->id) }}" class="c-section-table--button-edit">
                            <i class="fas fa-pencil-alt fa-sm"></i>
                        </a>
                        <form action="{{ Route('address.destroy', $address->id) }}" method="POST" onsubmit="return remover()" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="text-danger border-none"><i class="fas fa-trash fa-sm"></i></button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection
