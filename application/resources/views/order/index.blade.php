@extends('layouts.head')
@section('content')
<body class="c-section-container">

    @if(session()->has('success'))
        <div class="c-section-alert alert" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <h1 class="c-section-title">Lista de Pedidos</h1>

    <table class="c-section-table table table-hover">
        <thead class="c-section-table--head">
            <tr class="c-section-table--row">
                <th class="c-section-table--header">ID</th>
                <th class="c-section-table--header">Usuario</th>
                <th class="c-section-table--header">Status</th>
                <th class="c-section-table--header">Cartão</th>
                <th class="c-section-table--header">Ação</th>
            </tr>
        <thead>

        <tbody class="c-section-table--body">
            @foreach($orders as $order)
                <tr class="c-section-table--head">

                    <td class="c-section-table--data">{{ $order->id }}</td>
                    <td class="c-section-table--data">{{ $order->user()->name }}</td>
                    <td class="c-section-table--data">{{ $order->status }}</td>
                    <td class="c-section-table--data">{{ $order->cc_number }}</td>
                    <td class="c-section-table--data">
                        <a class="c-section-table--button-edit" href="{{ Route('order.edit', $order->id) }}">
                            <i class="fas fa-pencil-alt fa-sm"></i>
                        <a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection
