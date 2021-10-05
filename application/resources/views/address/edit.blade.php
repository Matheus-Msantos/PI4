@extends('layouts.head')
@section('content')
<body class="c-section-container">

    <a href="{{ Route('address.index') }}" class="c-section-button--back">Voltar</a>

    <h1 class="c-section-title--form">Editar Endereço</h1>

    <form class="c-section-form" method="POST" action="{{ Route('address.update', $address->id) }}">
        @csrf

        <label class="c-section-label form-label">Rua / Av</label>
        <input class="c-section-input form-control" id="street" name="street" type="text" placeholder="Rua / Av" value='{{ $address->street }}'/>

        <label class="c-section-label form-label">Bairro</label>
        <input class="c-section-input form-control" id="district" name="district" type="text" placeholder="Bairro" value='{{ $address->district }}'/>

        <label class="c-section-label form-label">Número</label>
        <input class="c-section-input form-control" id="number" name="number" type="number" placeholder="Número" value='{{ $address->number }}'/>

        <label class="c-section-label form-label">Cidade</label>
        <input class="c-section-input form-control" id="city" name="city" type="text" placeholder="Cidade" value='{{ $address->city }}'/>

        <label class="c-section-label form-label">Estado</label>
        <input class="c-section-input form-control" id="state" name="state" type="text" placeholder="Estado" value='{{ $address->state }}'/>

        <label class="c-section-label form-label">Pais</label>
        <input class="c-section-input form-control" id="country" name="country" type="text" placeholder="Pais" value='{{ $address->country }}'/>

        <div class="c-section-group-buttom">
            <a class="c-section-button--cancel" href="{{ Route('address.index') }}">Cancelar</a>
            <button type="submit" class="c-section-button--salve">Atualizar</button>
        </div>
    </form>
</body>
@endsection
