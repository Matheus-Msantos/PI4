@extends('layouts.head')
@section('content')

<body class="container">
    <a href="{{ Route('category.index') }}" class="mt-5 btn btn-secondary fw-bold text-uppercase" style="border-radius: 30px">Voltar</a>

    <h1 class="mb-5 mt-5 text-center fw-bold" id="titleEdit">Editar Categoria</h1>

    <form method="POST" action="{{ Route('category.update', $category->id) }}">
        @csrf

        <input class="mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" value='{{ $category->name }}'/ style="border-radius: 20px">

        <div class="mt-5 d-flex justify-content-end">
            <button type="submit" class="btn btn-danger text-uppercase fw-bold text-white" style="border-radius: 20px">Cancelar</button>
            <button type="submit" class="btn btn-warning text-uppercase fw-bold text-white" style="border-radius: 20px">Salvar</button>
        </div>
    </form>
</body>
@endsection
