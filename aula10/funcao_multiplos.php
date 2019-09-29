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
    function soma()
    {
        $v = func_get_args(); 

        $t = func_num_args(); 
        $s = 0; 

        for($i = 0; $i < $t; $i++)
            $s += $v[$i];

        return $s;
    }

    echo "<h3> Soma da Função com múltiplos parâmetros. ";

    $r = soma(3,5,2,8,9,4);

    echo "A soma = $r";

?>
    
</body>
</html>