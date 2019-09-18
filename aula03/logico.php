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
        echo "<h3>Operadores lógicos</h3>";
        
        $ano = 1995;
        $idade = 2019 - $ano;

        echo "Quem nasceu em $ano tem idade de $idade anos.";

        $tipo = ($idade >= 18 && $idade < 65) ? "é obrigatório!" : "não é obrigatório!";
        echo "<br> Seu voto $tipo"; 
    ?>
</body>
</html>