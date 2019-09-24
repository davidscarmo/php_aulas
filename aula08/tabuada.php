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
        echo "<h3>Tabuada</h3>";
        echo "<form action = 'tabuada_mostra' method = 'get'>";
        echo "<label for='tabuada'>Escolha qual a tabuada que deseja saber: </label>";
        echo  "<select name='select' id='select'>";
       for($i = 0; $i<=10; $i++)
                echo "<option value='$i'> $i</option>";
        echo "</select>";
        echo "<button type='submit'> Gerar </button>";
        echo "</form>"
    ?>
</body>
</html>