@extends('layouts.head')
@section('content')
{{-- <link rel="stylesheet" href="{{asset('css/base.css')}}"> --}}

<body class="c-section-container">
    <a href="{{ Route('category.index') }}" class="c-section-table--button mt-5 btn btn-secondary fw-bold text-uppercase" style="border-radius: 30px">Voltar</a>

    <h1 class="c-section-title mb-5 mt-5 text-center fw-bold" id="titleEdit">Editar Categoria</h1>

    <form method="POST" action="{{ Route('category.update', $category->id) }}">
        @csrf

        <input class="c-section-input mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" value='{{ $category->name }}'/ style="border-radius: 20px">

        <div class="mt-5 d-flex justify-content-end">
            <a href="{{ Route('category.index') }}" class="c-section-table--button btn btn-danger text-uppercase fw-bold text-white" style="border-radius: 20px">Cancelar</a>
            <button type="submit" class="c-section-table--button btn btn-warning text-uppercase fw-bold text-white" style="border-radius: 20px">Salvar</button>
        </div>
    </form>
</body>
@endsection
