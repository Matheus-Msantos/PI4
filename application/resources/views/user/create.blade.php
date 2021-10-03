@extends('layouts.head')
@section('content')
{{-- <link rel="stylesheet" href="{{asset('css/base.css')}}"> --}}

<body class="c-section-container">
    <h1 class="c-section-title mt-5 text-center text-uppercase fw-bold">Cadastrar Usuário</h1>
    <a href="{{ Route('user.index') }}" class="mb-3 mt-3 btn btn-primary fw-bold">Voltar</a>

    <form method="POST" action="{{ Route('user.store') }}" enctype="multipart/form-data">
        @csrf

            <label class="h6 form-label">Nome</label>
            <input class="c-section-input mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" required>

            <label class="h6 form-label">email</label>
            <input class="c-section-input mb-3 form-control" id="email" name="email" type="email" placeholder="email" required>

            <label class="h6 form-label">senha</label>
            <input class="c-section-input mb-3 form-control" id="password" name="password" type="password" placeholder="senha" required>

            <label class="h6 form-label">Imagem</label>
            <input class="c-section-input mb-3 form-control" id="image" name="image" type="file" >

            <label class="h6 form-label">Admin</label>
            <input class="c-section-input mb-3 form-control" id="isAdmin" name="isAdmin" type="number" placeholder="0 ou 1" value="0" disabled>

        <button type="submit" class="c-section-table--button mt-3 mb-3 btn btn-secondary fw-bold">Cadastrar</button>
    </form>
</body>
@endsection
