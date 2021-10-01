@extends('layouts.head')
@section('content')
<body class="c-section-container">

    @if(session()->has('success'))
        <div class="c-section-alert alert alert-info" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    {{-- <ul class="nav justify-content-center bg-secondary">
        <li class="nav-item">
            <a class="h5 nav-link active text-white fw-bold" href="{{ Route('category.index') }}">Categoria</a>
        </li>
        <li class="nav-item">
            <a class="h5 nav-link active text-white fw-bold" href="{{ Route('address.index') }}">Endereço</a>
        </li>
    </ul> --}}

    <h1 class="c-section-title  mt-5 text-center text-uppercase fw-bold">Lista de Eventos</h1>



    <a href="{{ Route('product.create') }}" class="c-section-button--create btn btn-primary mb-3 fw-bold">Cadastrar Evento</a>

    <table class="c-section-table table table-bordered border-primary">
        <thead class="c-section-table--head">
            <tr class="c-section-table--row" class="text-center">
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
                        <img class="c-section-table--image" src="{{ $product->image }}" style="width:35px;">
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
                        <a class="c-section-table--button" href="{{ Route('product.edit', $product->id) }}" class="btn btn-warning">Editar<a>
                        <a class="c-section-table--button" onclick="remove('{{ Route('product.destroy', $product->id) }}');" href="#" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection
