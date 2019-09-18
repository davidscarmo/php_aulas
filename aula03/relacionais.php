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
        echo "<h3>Operadores aritméticos</h3>";
        $num1 = 5; 
        $num2 = 3;
        $tipo = "s";

        $r = $tipo == "s" ? $num1 + $num2 : $num1 * $num2;
        echo "O Resultado é = $r";
    ?>
</body>
</html>