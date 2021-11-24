@extends('layouts.head')
@section('content')

<body class="c-section-container">

    <a href="{{ Route('order.index') }}" class="c-section-button--back">Voltar</a>

    <h1 class="c-section-title--form">Editar Pedido</h1>

    <form class="c-section-form" method="POST" action="{{ Route('order.update', $order->id) }}" enctype="multipart/form-data">
        @csrf

        <label class="c-section-label h6 form-label">Número do pedido</label>
        <input class="c-section-input mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" value='000{{ $order->id }}' disabled/>


        <label class="c-section-label h6 form-label">Status</label>
        <select class="c-section-select form-control" id="status" name="status" class="form-select">
            <option value="Processando">Processando</option>
            <option value="Aprovado">Aprovado</option>
            <option value="Cancelado">Cancelado</option>
        </select>

        <div class="c-section-group-buttom">
            <a class="c-section-button--cancel" href="{{ Route('order.index') }}">Cancelar</a>
            <button type="submit" class="c-section-button--salve">Atualizar</button>
        </div>
    </form>
</body>
@endsection
