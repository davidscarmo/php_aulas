<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário 1</title>
</head>
<body>
    <?php 
        $valor = $_GET["v"];
        $pi = intval($valor); //transforma número float em int 

        echo "<h3>Recebendo dados do formulário 1</h3>";
        echo "A parte inteira de $valor = $pi </br>";
    ?>
    <br>
    <a href="form1.html">Voltar</a>
</body>
</html>