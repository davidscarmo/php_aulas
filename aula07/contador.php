<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="get" action="contador_mostra.php">
    <label for="vInicial"> Valor Inicial: </label>
    <input type="number" name="vInicial" id="vInicial"><br><br>

    <label for="vInicial"> Valor Final: </label>
    <input type="number" name="vFinal" id="vFinal"><br><br>

    <label for="incre_decre">Incremento/Decremento</label>
    <select name="select" id="select">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <button type="submit">Enviar</button>
    </form>
    <?php 

    ?>
</body>
</html>