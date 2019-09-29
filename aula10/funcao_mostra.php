<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include "funcoes.php";
        echo "<h1> Testando funções </h1>";
        texto(); 
        mostraValor(5);
        $r = mostraMult(1,2,3);
        echo "O Resultado da mult é: $r";
    ?>
    
</body>
</html>