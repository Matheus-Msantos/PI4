@extends('layouts.head')
@section('content')

<body class="c-section-container">

    <a href="{{ Route('user.index') }}" class="c-section-button--back">Voltar</a>

    <h1 class="c-section-title--form">Editar Usuário</h1>

    <form class="c-section-form" method="POST" action="{{ Route('user.update', $user->id) }}" enctype="multipart/form-data">
        @csrf

        <label class="c-section-label form-label">Admin</label>
        <input class="c-section-input form-control" id="isAdmin" name="isAdmin" type="number" placeholder="0 ou 1" value="{{ $user->isAdmin }}">

        <div class="c-section-group-buttom">
            <a class="c-section-button--cancel" href="{{ Route('user.index') }}">Cancelar</a>
            <button type="submit" class="c-section-button--salve">Atualizar</button>
        </div>

    </form>
</body>
@endsection
