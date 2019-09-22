<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário 1</title>
</head>
<body>
    <?php 
        $nome = !empty($_GET["nome"]) ? $_GET["nome"] : "[Campo Vazio]" ;
        $ano = !empty($_GET["ano"]) ? $_GET["ano"] : "[Campo Vazio]" ;
        $sexo = !empty($_GET["sexo"]) ? $_GET["sexo"] : "[Campo Vazio]" ;
        
        $idade = ($ano != 0) ?  date("Y") - $ano : "[Campo Vazio]";

        echo "<h3>Recebendo dados do Formulário 2</h3>";
        echo "$nome é do sexo $sexo e tem $idade anos <br>";
    ?>
    <br>
    <a href="form2.html">Voltar</a>
</body>
</html>