@extends('layouts.head')
@section('content')
<body class="c-section-container">

    <h1 class="c-sectino-title mt-5 text-center text-uppercase fw-bold">Cadastrar Evento</h1>

    <a href="{{ Route('product.index') }}" class="c-section-button--back mb-3 mt-3 btn btn-primary fw-bold">Voltar</a>

    <form class="c-section-form" method="POST" action="{{ Route('product.store') }}" enctype="multipart/form-data">
        @csrf

            <a href="{{ Route('address.create') }}" target="_blank" class="c-section-button-address mb-3 mt-3 btn btn-primary fw-bold">endereço</a>

            <label class="c-section-label">Endereço</label>
            <select class="c-section-select form-control" id="address" name="address_id">
                @foreach($addresses as $address)
                    <option value="{{ $address->id }}">
                        {{ $address->street }}
                    </option>
                @endforeach
            </select>

            <label class="c-section-label h6 form-label">Nome</label>
            <input class="c-section-input mb-3 form-control" id="nome" name="name" type="text" placeholder="nome" required>



            <label class="c-section-label h6 form-label">Preço</label>
            <input class="c-section-input mb-3 form-control" id="preco" name="price" type="number" placeholder="Preço" required>



            <label class="c-section-label h6 form-label">Hora</label>
            <input class="c-section-input mb-3 form-control" id="hora" name="time" type="text" placeholder="16:20h"  required>



            <label class="c-section-label h6 form-label">Data</label>
            <input class="c-section-input mb-3 form-control" id="data" name="date" type="text" placeholder="DD/MM/YYYY" required>



            <label class="c-section-label h6 form-label">Classificação</label>
            <input class="c-section-input mb-3 form-control" id="classification" name="classification" type="text" placeholder="+18"  required>


            <label class="c-section-label h6 form-label">Descrição</label>
            <textarea class="c-section-textArea mb-3 form-control" name="description"s rows="5"></textarea>

            <label class="c-section-label h6 form-label">Imagem</label>
            <input class="c-section-input mb-3 form-control" id="image" name="image" type="file">

            <label class="c-section-label h6 form-label">Categoria</label>
            <select class="c-section-select c-section-select mb-3 form-control" id="category" name="category_id" class="form-select" aria-label="Default select example">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
            </select>

        <button type="submit" class="c-section-button--salve mt-3 mb-3 btn btn-secondary fw-bold">Cadastrar</button>
    </form>
</body>
@endsection
