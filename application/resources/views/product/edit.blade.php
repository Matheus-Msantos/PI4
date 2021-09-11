<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ADM - Editar Evento</title>
</head>
<body>
    <h1>Editar Evento</h1>
    <a href="{{ Route('product.index') }}">Voltar</a>

    <form method="POST" action="{{ Route('product.update', $product->id) }}">
        @csrf

        <label>Nome</label>
        <input id="nome" name="name" type="text" placeholder="nome" value='{{ $product->name }}'/>

        <label>Preço</label>
        <input id="preco" name="price" type="number" placeholder="Preço" value='{{ $product->price }}'/>

        <label>Hora</label>
        <input id="hora" name="time" type="text" placeholder="16:20h" value='{{ $product->time }}' />

        <label>Data</label>
        <input id="data" name="date" type="text" placeholder="DD/MM/YYYY" value='{{ $product->date }}'/>

        <label>Classificação</label>
        <input id="classification" name="classification" type="text" placeholder="+18" value='{{ $product->classification }}' />

        <label>Descrição</label>
        <textarea name="description">{{ $product->description }}</textarea>

        <label>Categoria</label>
        <select id="category" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <label>Endereço</label>
        <label>Endereço</label>
        <select id="address" name="address_id">
            @foreach($addresses as $address)
                <option value="{{ $address->id }}" @if($address->id == $product->address_id) selected @endif>
                    {{ $address->street }}
                </option>
            @endforeach
        </select>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
