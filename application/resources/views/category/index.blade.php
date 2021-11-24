@extends('layouts.head')
@section('content')

<body class="c-section-container">

    @if(session()->has('success'))
        <div class="c-section-alert alert" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-center">
        <h1 class="c-section-title">Lista de Categorias</h1>

        <div>
            <a href="{{ Route('category.create') }}" class="c-section-button--create mt-4">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    </div>

    <table class="c-section-table table table-hover">
        <thead class="c-section-table--head">
            <tr class="c-section-table--row">
                <th class="c-section-table--header">ID</th>
                <th class="c-section-table--header">Nome</th>
                <th class="c-section-table--header">Ação</th>
            </tr>
        <thead>

        <tbody class="c-section-table--body">
            @foreach($categories as $category)
                <tr class="c-section-table--head">
                    <td class="c-section-table--data">{{ $category->id }}</td>
                    <td class="c-section-table--data">{{ $category->name }}</td>
                    <td class="c-section-table--data c-section-table--button">
                        {{-- <a href="#" class="c-section-table--button btn btn-success" style="border-radius: 100%">
                            <i class="fas fa-eye text-white"></i>
                        </a> --}}
                        <a href="{{ Route('category.edit', $category->id) }}" class="c-section-table--button-edit" style="border-radius: 100%">
                            <i class="fas fa-pencil-alt fa-sm"></i>
                        </a>
                        <form action="{{ Route('category.destroy', $category->id) }}" method="POST" onsubmit="return remover()" class="d-inline">
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
