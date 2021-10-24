@extends('layouts.head')
@section('content')
<body class="c-section-container">

    @if(session()->has('success'))
        <div class="c-section-alert alert" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <h1 class="c-section-title">Lista de Eventos</h1>

    <a href="{{ Route('product.create') }}" class="c-section-button--create">Cadastrar Evento</a>

    <table class="c-section-table table table-hover">
        <thead class="c-section-table--head">
            <tr class="c-section-table--row">
                <th class="c-section-table--header">ID</th>
                <th class="c-section-table--header">Image</th>
                <th class="c-section-table--header">Nome</th>
                <th class="c-section-table--header">Preço</th>
                <th class="c-section-table--header">Data</th>
                <th class="c-section-table--header">Hora</th>
                <th class="c-section-table--header">Classificação</th>
                <th class="c-section-table--header">Descrição</th>
                <th class="c-section-table--header">Categoria</th>
                <th class="c-section-table--header">Endereço</th>
                <th class="c-section-table--header">Ação</th>
            </tr>
        <thead>

        <tbody class="c-section-table--body">
            @foreach($products as $product)
                <tr class="c-section-table--head">

                    <td class="c-section-table--data">{{ $product->id }}</td>
                    <td class="c-section-table--data">
                        <img class="c-section-table--image" src="{{ $product->image }}">
                    </td>
                    <td class="c-section-table--data">{{ $product->name }}</td>
                    <td class="c-section-table--data">{{ $product->price }}</td>
                    <td class="c-section-table--data">{{ $product->date }}</td>
                    <td class="c-section-table--data">{{ $product->time }}</td>
                    <td class="c-section-table--data">{{ $product->classification }}</td>
                    <td class="c-section-table--data">{{ $product->description }}</td>
                    <td class="c-section-table--data">{{ $product->category_id }}</td>
                    <td class="c-section-table--data">{{ $product->address_id }}</td>
                    <td class="c-section-table--data">

                        <a class="c-section-table--button-edit" href="{{ Route('product.edit', $product->id) }}">
                            <i class="fas fa-pencil-alt fa-sm"></i>
                        <a>
                        <a class="c-section-table--button-delete" onclick="remove('{{ Route('product.destroy', $product->id) }}');" href="#" >
                            <i class="fas fa-trash fa-sm"></i>
                        </a>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection
