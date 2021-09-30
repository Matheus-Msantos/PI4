@extends('layouts.head')
@section('content')
<body class="container">
    <h1 class="mt-5 text-center text-uppercase fw-bold"s>Cadastrar Endereço</h1>
    <a href="{{ Route('address.index') }}" class="mb-3 mt-3 btn btn-primary fw-bold">Voltar</a>

    <form method="POST" action="{{ Route('address.store') }}">
        @csrf

        <label class="h6 form-label">Rua / Av</label>
        <input class="mb-3 form-control" id="street" name="street" type="text" placeholder="Rua / Av" />

        <label class="h6 form-label">Número</label>
        <input class="mb-3 form-control" id="number" name="number" type="number" placeholder="Número" />

        <label class="h6 form-label">Bairro</label>
        <input class="mb-3 form-control" id="district" name="district" type="text" placeholder="Bairro" />

        <label class="h6 form-label">Cidade</label>
        <input class="mb-3 form-control" id="city" name="city" type="text" placeholder="Cidade" />

        <label class="h6 form-label">Estado</label>
        <input class="mb-3 form-control" id="state" name="state" type="text" placeholder="Estado" />

        <label class="h6 form-label">Pais</label>
        <input class="mb-3 form-control" id="country" name="country" type="text" placeholder="Pais" />



        <button type="submit" class="btn btn-secondary">Cadastrar</button>
    </form>
</body>
@endsection
