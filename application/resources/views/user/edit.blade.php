@extends('layouts.head')
@section('content')
{{-- <link rel="stylesheet" href="{{asset('css/base.css')}}"> --}}

<body class="c-section-container">
    <h1 class="c-section-title mt-5 text-center text-uppercase fw-bold">Editar Usuário</h1>
    <a href="{{ Route('user.index') }}" class="mb-3 btn btn-primary">Voltar</a>

    <form method="POST" action="{{ Route('user.update', $user->id) }}" enctype="multipart/form-data">
        @csrf

        <label class="h6 form-label">Admin</label>
        <input class="c-section-input mb-3 form-control" id="isAdmin" name="isAdmin" type="number" placeholder="0 ou 1" value="{{ $user->isAdmin }}">

        <button type="submit" class="c-section-table--button mb-3 btn btn-secondary">Atualizar</button>
    </form>
</body>
@endsection
