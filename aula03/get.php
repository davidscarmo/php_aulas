<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atribuição</title>
</head>
<body>
    <?php
        echo "<h3>Personalizando os valores inseridos</h3>";
        //GET vai pegar na url o parâmetro de "a" e colocar em $n1 
        $n1 = $_GET["a"]; 
        //GET vai pegar na url o parâmetro de "b" e colocar em $n2 
        $n2 = $_GET["b"];

        //mostra a soma dos parâmetros digitados na URL
        echo "A soma = " . ($n1 + $n2);
    ?>
</body>
</html>