<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora - Resultado</title>
</head>
<body>
    <?php
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];

        $op = $_GET['op'];

        if($n1 == NULL || $n2 == NULL)
        {
            echo "Preencha os dois campos!";
        }
        else
        {
            switch($op)
            {
                case 1: 
                    $op = $n1 + $n2;
                    echo "O resultado da Soma é: $op";
                    break;
                case 2: 
                    $op = $n1 - $n2;
                    echo "O resultado da Subtração é: $op";
                    break;
                case 3: 
                    $op = $n1 * $n2;
                    echo "O resultado da Multiplicação é: $op";
                    break;
                case 4: 
                    $op = $n1 + $n2;
                    echo "O resultado da Divisão é: $op";
                    break;
                default: 
                    echo "não foi escolhida nenhuma operação!";
            }
        }
    ?>
    <br>
    <a href="calculadora.html">Voltar</a>
</body>
</html>