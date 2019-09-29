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
        function bemVindo()
        {
            echo "<p align = 'center'> Olá, Seja bem vindo! </p>";
        }

        echo "<h3> Invocando a função bemVindo() </h3>"; 
        bemVindo();

        echo "<h3> Função bemVindo() dentro do laço For </h3>";

        for($i = 1; $i <= 5; $i++)
            bemVindo();
    ?>
</body>
</html>