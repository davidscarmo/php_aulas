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
        function referencia(&$x) /* faz referência a variável $x e não somente ao valor */ 
        {
            $x = $x +2; 
            echo "<p> O valor de x = $x </p>";
        }

        echo "<h3> Função que retorna parâmetro por referência";
        $a = 3;
        referencia($a);
        echo "<p> O valor de a= $a </p>";

    ?>
    
</body>
</html>