@extends('layouts.head')
@section('content')
<body class="c-section-container">

    <a href="{{ Route('category.index') }}" class="c-section-button--back">Voltar</a>

    <h1 class="c-section-title--form">Cadastrar Categoria</h1>

    <form class="c-section-form" method="POST" action="{{ Route('category.store') }}">
        @csrf

        <label class="c-section-label h6 form-label">Nome</label>
        <input class="c-section-input mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" />

        <div class="c-section-group-buttom">
            <a class="c-section-button--cancel" href="{{ Route('category.index') }}">Cancelar</a>
            <button type="submit" class="c-section-button--salve">Cadastrar</button>
        </div>
    </form>
</body>
@endsection
