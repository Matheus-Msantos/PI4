@extends('layouts.head')
@section('content')
{{-- <link rel="stylesheet" href="{{asset('css/base.css')}}"> --}}

<body class="c-section-container">
    <a href="{{ Route('category.index') }}" class="c-section-button--back">Voltar</a>

    <h1 class="c-section-title--form">Editar Categoria</h1>

    <form class="c-section-form" method="POST" action="{{ Route('category.update', $category->id) }}">
        @csrf
        <label class="c-section-label h6 form-label">Nome</label>
        <input class="c-section-input mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" value='{{ $category->name }}'/ style="border-radius: 20px">

        <div class="c-section-group-buttom">
            <a class="c-section-button--cancel" href="{{ Route('category.index') }}">Cancelar</a>
            <button type="submit" class="c-section-button--salve">Salvar</button>
        </div>
    </form>
</body>
@endsection
