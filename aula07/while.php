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
        echo "<h3>Contagem de 0 a 10</h3>";
        $i = 0; 

        while($i <= 10)
        {
            echo "$i" ."<br>";
            $i++;
        }
    ?>
</body>
</html>