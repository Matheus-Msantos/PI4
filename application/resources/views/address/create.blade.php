<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ADM - Cadastrar Endereço</title>
</head>
<body>
    <h1>Cadastrar Endereço</h1>
    <a href="{{ Route('address.index') }}">Voltar</a>

    <form method="POST" action="{{ Route('address.store') }}">
        @csrf


        <label>Rua / Av</label>
        <input id="street" name="street" type="text" placeholder="Rua / Av" />

        <label>Bairro</label>
        <input id="district" name="district" type="text" placeholder="Bairro" />

        <label>Número</label>
        <input id="number" name="number" type="number" placeholder="Número" />

        <label>Cidade</label>
        <input id="city" name="city" type="text" placeholder="Cidade" />

        <label>Estado</label>
        <input id="state" name="state" type="text" placeholder="Estado" />

        <label>Pais</label>
        <input id="country" name="country" type="text" placeholder="Pais" />


        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
