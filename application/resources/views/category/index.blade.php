@extends('layouts.head')
@section('content')
<body class="container">

    @if(session()->has('success'))
        <div class="alert alert-info" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    {{-- <ul class="nav justify-content-center bg-secondary">
        <li class="nav-item">
            <a class="h5 nav-link active text-white fw-bold" href="{{ Route('product.index') }}">Produto</a>
        </li>
        <li class="nav-item">
            <a class="h5 nav-link active text-white fw-bold" href="{{ Route('address.index') }}">Endereço</a>
        </li>
    </ul> --}}

    <form action="" class="mt-5 navbar-form navbar-right">
        <div class="input-group">
            <div class="input-group-btn">
                <button class="btn btn-info">
                <span class="glyphicon glyphicon-search"></span>
                </button>
            </div>
            <input type="Search" placeholder="Search..." class="form-control" />
        </div>
     </form>



    <h1 class="mt-5 text-center fw-bold" id="title"s>Lista de Categorias</h1>

    <div class="d-flex justify-content-end">
        <a href="{{ Route('category.create') }}" class="btn btn-warning text-white" style="border-radius: 100%;" id="btn-plus">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    <table class="table table-borderless">
        <thead>
            <tr class="text-center text-primary">
                <th>ID</th>
                <th>Nome</th>
            </tr>
        <thead>

        <tbody>
            @foreach($categories as $category)
                <tr class="text-center" scope="row">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="#" class="btn btn-success" style="border-radius: 100%">
                            <i class="fas fa-eye text-white"></i>
                        </a>
                        <a href="{{ Route('category.edit', $category->id) }}" class="btn btn-warning" style="border-radius: 100%">
                            <i class="fas fa-pen text-white"></i>
                        </a>
                        <a onclick="remove('{{ Route('category.destroy', $category->id) }}');" href="#" class="btn btn-danger" style="border-radius: 100%">
                            <i class="fas fa-trash-alt text-white"></i>
                        </a>
                        <hr>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection
