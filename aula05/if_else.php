<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IF ELSE</title>
</head>
<body>
    <?php
        $idade = $_GET["idade"];
        if($idade == NULL)
            echo "Volte e difite a idade!";
        else
        {
        echo "Você tem $idade anos <br>";
        if($idade >= 18)
            echo "Você pode tirar habilitação!";
        else
            echo "Você não pode tirar habilitação!";
        }
    ?>
    <a href="if_else.html">Voltar</a>
</body>
</html>