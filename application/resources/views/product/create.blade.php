<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ADM - Cadastrar Evento</title>
</head>
<body>
    <h1>Cadastrar Evento</h1>
    <a href="{{ Route('product.index') }}">Voltar</a>

    <form method="POST" action="{{ Route('product.store') }}">
        @csrf

        <label>Nome</label>
        <input id="nome" name="name" type="text" placeholder="nome" />

        <label>Preço</label>
        <input id="preco" name="price" type="number" placeholder="Preço"/>

        <label>Hora</label>
        <input id="hora" name="time" type="text" placeholder="16:20h" />

        <label>Data</label>
        <input id="data" name="date" type="text" placeholder="DD/MM/YYYY" />

        <label>Classificação</label>
        <input id="classification" name="classification" type="text" placeholder="+18" />

        <label>Descrição</label>
        <textarea name="description"></textarea>

        <label>Categoria</label>
        <select id="category" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <label>Endereço</label>
        <select id="address" name="address_id">
            @foreach($addresses as $address)
                <option value="{{ $address->id }}">
                    {{ $address->street }}
                </option>
            @endforeach
        </select>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
