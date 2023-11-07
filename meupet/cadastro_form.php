<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Pet</h1>
    <form action="cadastro_action.php" method="POST">

    Nome: <input type="text" name="nome">
    <br>

    Sexo: 
    <input type="radio" name="sexo" value="macho"> Macho
    &nbsp;&nbsp;
    <input type="radio" name="sexo" value="femea">Femea
    <br>

    Especie: 
    <select name="especie">
        <option value="1">Cachorro</option>
        <option value="2">Gato</option>
        <option value="3">Coelho</option>
    </select>
    <br>

    <input type="submit" value="Ok">
    
    </form>

    <br><br>
<a href="index.php">Voltar</a>
</body>
</html>