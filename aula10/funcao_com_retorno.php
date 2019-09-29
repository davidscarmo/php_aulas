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
    function soma($a, $b)
    {
        $s = $a + $b;
        return $s;
    }

    echo "<h3> Função com retorno </h3>";


    $x = 20; 
    $y = 30;

    $r = soma($x, $y);

    echo "A soma entre $x + $y = $r";
?>
    
</body>
</html>