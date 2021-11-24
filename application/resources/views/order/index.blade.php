@extends('layouts.head')
@section('content')
<body class="c-section-container">

    @if(session()->has('success'))
        <div class="c-section-alert alert" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <h1 class="c-section-title">Lista de Pedidos</h1>

    @foreach($orders as $order)
    <div class="c-order-container">
        <div class="c-order-container--row1">
            <div class="c-order-id">
                <span class="c-order--title">Número do pedido</span>
                <span class="c-order--text">000{{ $order->id }}</span>
            </div>

            <div class="c-order-nameUser">
                <span class="c-order--title">Nome do comprador</span>
                <span class="c-order--text">{{ $order->user->name }}</span>
            </div>
        </div>

        <div class="c-order-container--row2">
            @foreach($order->items() as $item)
                <div class="c-order-product-name">
                    <span class="c-order--title">Produto</span>
                    <span class="c-order--text">{{ $item->product()->name }}</span>
                </div>

                <div class="c-order-product-quantity">
                    <span class="c-order--title">Quantidade</span>
                    <span class="c-order--text">{{ $item->quantity }}</span>
                </div>

                <div class="c-order-product-price">
                    <span class="c-order--title">Preço</span>
                    <span class="c-order--text">{{ $item->price }}</span>
                </div>
            @endforeach
            <div class="c-order-product-status">
                <span class="c-order--title">Status</span>
                @if($order->status == 'Aprovado')
                    <span class="c-order--text green">{{ $order->status }}</span>
                @endif
                @if($order->status == 'Cancelado')
                    <span class="c-order--text red">{{ $order->status }}</span>
                @endif
                @if($order->status == 'Processando')
                    <span class="c-order--text">{{ $order->status }}</span>
                @endif
            </div>

            @foreach($order->items() as $image)
            <div class="c-order-product-image">
                <span class="c-order--title">Imagem</span>
                <img class="c-section-table--image" src="{{ asset($item->product()->image) }}">
            </div>
            @endforeach
        </div>

        <div class="c-order-button">
            <a class="c-section-table--button-edit" href="{{ Route('order.edit', $order->id) }}">
                <i class="fas fa-pencil-alt fa-sm"></i>
            <a>
        </div>

    </div>

    @endforeach

</body>
@endsection
