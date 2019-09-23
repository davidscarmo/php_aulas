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
        $i = 1; 

        while($i <= 5)
        {
            $valor = $_GET["v" . $i];
            if($valor == NULL)
                echo "<p> Falta digitar o $i º valor </p>";
            else
                echo "<p> $i º valor: $valor </p>";

            $i++;
        }
    ?>
    <a href="while_dinamico.php">Voltar</a>
</body>
</html>