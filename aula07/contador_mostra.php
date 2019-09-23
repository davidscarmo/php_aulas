<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador Result</title>
</head>
<body>
    <?php 
    $vInicial = $_GET['vInicial'];
    $vFinal = $_GET['vFinal'];
    $increDecre = $_GET['select'];

    if($vInicial == NULL || $vFinal == NULL )
    {
        echo "Preencha o valor inicial e o valor final";
    }
    else if($vInicial<$vFinal)
    {
        $i = $vInicial;

        while($i <= $vFinal)
        {
            echo "$i <br>"; 
            $i += $increDecre;
            
        }
    }
    else
        {
            $i = $vInicial;

        while($i >= $vFinal)
        {
            echo "$i <br>"; 
            $i -= $increDecre;
            
        }

        }
    ?>
</body>
</html>