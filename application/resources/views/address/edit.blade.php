<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ADM - Editar Endereço</title>
</head>
<body>
    <h1>Editar Endereço</h1>
    <a href="{{ Route('address.index') }}">Voltar</a>

    <form method="POST" action="{{ Route('address.update', $address->id) }}">
        @csrf

        <label>Rua / Av</label>
        <input id="street" name="street" type="text" placeholder="Rua / Av" value='{{ $address->street }}'/>

        <label>Bairro</label>
        <input id="district" name="district" type="text" placeholder="Bairro" value='{{ $address->district }}'/>

        <label>Número</label>
        <input id="number" name="number" type="number" placeholder="Número" value='{{ $address->number }}'/>

        <label>Cidade</label>
        <input id="city" name="city" type="text" placeholder="Cidade" value='{{ $address->city }}'/>

        <label>Estado</label>
        <input id="state" name="state" type="text" placeholder="Estado" value='{{ $address->state }}'/>

        <label>Pais</label>
        <input id="country" name="country" type="text" placeholder="Pais" value='{{ $address->country }}'/>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
