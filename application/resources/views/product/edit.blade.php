@extends('layouts.head')
@section('content')

<body class="c-section-container">

    <a href="{{ Route('product.index') }}" class="c-section-button--back">Voltar</a>

    <h1 class="c-section-title--form">Editar Evento</h1>


    <form class="c-section-form" method="POST" action="{{ Route('product.update', $product->id) }}" enctype="multipart/form-data">
        @csrf

        <label class="c-section-label h6 form-label">Nome</label>
        <input class="c-section-input mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" value='{{ $product->name }}'/>


        <label class="c-section-label h6 form-label">Preço</label>
        <input class="c-section-input mb-3 form-control" id="preco" name="price" type="number" placeholder="Preço" value='{{ $product->price }}'/>


        <label class="c-section-label h6 form-label">Hora</label>
        <input class="c-section-input mb-3 form-control" id="hora" name="time" type="text" placeholder="16:20h" value='{{ $product->time }}' />


        <label class="c-section-label h6 form-label">Data</label>
        <input class="c-section-input mb-3 form-control" id="data" name="date" type="text" placeholder="DD/MM/YYYY" value='{{ $product->date }}'/>



        <label class="c-section-label h6 form-label">Classificação</label>
        <input class="c-section-input mb-3 form-control" id="classification" name="classification" type="text" placeholder="+18" value='{{ $product->classification }}' />



        <label class="c-section-label h6 form-label">Descrição</label>
        <textarea class="c-section-input mb-3 form-control" name="description">{{ $product->description }}</textarea>


        <label class="c-section-label h6 form-label">Imagem</label>
        <input class="c-section-input mb-3 form-control" id="image" name="image" type="file">


        <label class="c-section-label h6 form-label">Categoria</label>
        <select class="c-section-select mb-3 form-control" id="category" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>


        <label class="c-section-label h6 form-label">Endereço</label>
        <select class="c-section-select mb-3 form-control" id="address" name="address_id">
            @foreach($addresses as $address)
                <option value="{{ $address->id }}" @if($address->id == $product->address_id) selected @endif>
                    {{ $address->street }}
                </option>
            @endforeach
        </select>

        <div class="c-section-group-buttom">
            <a class="c-section-button--cancel" href="{{ Route('product.index') }}">Cancelar</a>
            <button type="submit" class="c-section-button--salve">Atualizar</button>
        </div>

    </form>
</body>
@endsection
