<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vetor</title>
</head>
<body>
    <pre>
    <?php
         $numeros[0][0] = 5;
         $numeros[0][1] = 30;
         $numeros[0][2] = 45;
         $numeros[1][0] = 100;
         $numeros[1][1] = 200;
         $numeros[1][2] = 300;

         echo "<h3>Mostrando com print_r</h3>";
         print_r($numeros);

         echo "<h3>Percorrendo um array com foreach mostrando as suas chaves</h3>";
        foreach ($cliente as $chave => $valor) 
        {
            echo "-->Linha: $chave <br>";
            foreach ($cliente as $chaveB => $coluna) 
            {
                echo "Coluna $chaveB: $coluna!";    
            }
        echo "<br>";
        }
    ?>
    </pre>
</body>
</html>