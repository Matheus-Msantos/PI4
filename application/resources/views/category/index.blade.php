@extends('layouts.head')
@section('content')
{{-- <link rel="stylesheet" href="{{asset('css/base.css')}}"> --}}

<body class="c-section-container">

    @if(session()->has('success'))
        <div class="alert alert-info" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="mt-5 input-group rounded justify-content-center">
        <span class="input-group-text border-0 bg-white" id="search-addon">
            <i class="fas fa-search"></i>
        </span>
        <span class="border-bottom">
            <input type="search" class="form-control rounded text-center" placeholder="Buscar Eventos" style="border: none">
        </span>
    </div>

    <div class="d-flex justify-content-center">
        <h1 class="c-section-title mt-5 text-center fw-bold" id="titleIndex">Lista de Categorias</h1>

        <div>
            <a href="{{ Route('category.create') }}" class="c-section-table--button btn btn-warning text-white" id="btn-plus">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    </div>

    <table class="c-section-table table table-borderless">
        <thead class="c-section-table--head">
            <tr class="c-section-table--row text-center text-primary text-uppercase">
                <th class="c-section-table--header">ID</th>
                <th class="c-section-table--header">Nome</th>
            </tr>
        <thead>

        <tbody class="c-section-table--body">
            @foreach($categories as $category)
                <tr class="c-section-table--head text-center border-bottom">
                    <td class="c-section-table--data">{{ $category->id }}</td>
                    <td class="c-section-table--data">{{ $category->name }}</td>
                    <td class="c-section-table--data">
                        <a href="#" class="c-section-table--button btn btn-success" style="border-radius: 100%">
                            <i class="fas fa-eye text-white"></i>
                        </a>
                        <a href="{{ Route('category.edit', $category->id) }}" class="c-section-table--button btn btn-warning" style="border-radius: 100%">
                            <i class="fas fa-pen text-white"></i>
                        </a>
                        <a onclick="remove('{{ Route('category.destroy', $category->id) }}');" href="#" class="c-section-table--button btn btn-danger" style="border-radius: 100%">
                            <i class="fas fa-trash-alt text-white"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection
