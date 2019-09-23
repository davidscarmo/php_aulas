<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>while Dinâmico</h3>
    <form method="get" action="while_dinamico_mostra.php">
        <?php 
            $i = 1;

            while($i <= 5)
            {
                echo "<p> $i º valor: <input type='number' name='v$i'/> </p>";
                $i++;
            }
            
        ?>
        <button type="submit">Enviar</button>
    </form> 
</body>
</html>