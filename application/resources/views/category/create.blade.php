@extends('layouts.head')
@section('content')
<body class="container">
    <a href="{{ Route('category.index') }}" class="mt-5 btn btn-secondary fw-bold text-uppercase text-center" style="border-radius: 30px">Voltar</a>
    <h1 class="mb-5 mt-5 text-center fw-bold" id="title">Cadastrar Categoria</h1>

    <form method="POST" action="{{ Route('category.store') }}">
        @csrf

        <input class="mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" / style="border-radius: 20px">

        <div class="mt-5 d-flex justify-content-end">
            <button type="submit" class="btn btn-warning text-uppercase fw-bold text-white" style="border-radius: 20px">Cadastrar</button>
        </div>
    </form>
</body>
@endsection
