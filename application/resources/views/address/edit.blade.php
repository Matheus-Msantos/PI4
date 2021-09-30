@extends('layouts.head')
@section('content')
<body class="container">
    <h1 class="mt-5 text-center text-uppercase fw-bold">Editar Endereço</h1>
    <a href="{{ Route('address.index') }}" class="mb-3 btn btn-primary">Voltar</a>

    <form method="POST" action="{{ Route('address.update', $address->id) }}">
        @csrf

        <label class="h6 form-label">Rua / Av</label>
        <input class="mb-3 form-control" id="street" name="street" type="text" placeholder="Rua / Av" value='{{ $address->street }}'/>

        <label class="h6 form-label">Bairro</label>
        <input class="mb-3 form-control" id="district" name="district" type="text" placeholder="Bairro" value='{{ $address->district }}'/>

        <label class="h6 form-label">Número</label>
        <input class="mb-3 form-control" id="number" name="number" type="number" placeholder="Número" value='{{ $address->number }}'/>

        <label class="h6 form-label">Cidade</label>
        <input class="mb-3 form-control" id="city" name="city" type="text" placeholder="Cidade" value='{{ $address->city }}'/>

        <label class="h6 form-label">Estado</label>
        <input class="mb-3 form-control" id="state" name="state" type="text" placeholder="Estado" value='{{ $address->state }}'/>

        <label class="h6 form-label">Pais</label>
        <input class="mb-3 form-control" id="country" name="country" type="text" placeholder="Pais" value='{{ $address->country }}'/>

        <button type="submit" class="mb-3 btn btn-secondary">Atualizar</button>
    </form>
</body>
@endsection
