@extends('layouts.head')
@section('content')

<body class="c-section-container">

    <a href="{{ Route('order.index') }}" class="c-section-button--back">Voltar</a>

    <h1 class="c-section-title--form">Editar Pedido</h1>

    <form class="c-section-form" method="POST" action="{{ Route('order.update', $order->id) }}" enctype="multipart/form-data">
        @csrf

        <label class="c-section-label h6 form-label">Nome</label>
        <input class="c-section-input mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" value='{{ $order->user->name }}' disabled/>


        <label class="c-section-label h6 form-label">Status</label>
        <input class="c-section-input mb-3 form-control" id="status" name="status" type="text" value='{{ $order->status }}'/>


        <label class="c-section-label h6 form-label">Cartão</label>
        <input class="c-section-input mb-3 form-control" id="hora" name="cc_number" type="number" value='{{ $order->cc_number }}' disabled />


        <div class="c-section-group-buttom">
            <a class="c-section-button--cancel" href="{{ Route('order.index') }}">Cancelar</a>
            <button type="submit" class="c-section-button--salve">Atualizar</button>
        </div>
    </form>
</body>
@endsection
