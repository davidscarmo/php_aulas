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
        echo "<h3>Operadores aritméticos</h3>";

        $n1 = 3;
        $n2 = 2;

        echo "A soma de $n1 + $n2 = " . ($n1 + $n2);
        echo "<br> A subtração de $n1 - $n2 = " . ($n1 - $n2);
        echo "<br> A multiplicação de $n1 * $n2 = " . ($n1 * $n2);
        echo "<br> A divisão de $n1 / $n2 = " . ($n1 / $n2);
        echo "<br> O módulo de $n1 % $n2 = " . ($n1 % $n2);

        $n3 = "10";

        //Em expressões o php convcerte automaticamente os tipos

        echo "<br> A soma de $n1 + $n3 = " . ($n1 + $n2); 
        
    ?>
</body>
</html>