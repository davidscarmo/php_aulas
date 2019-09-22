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
        $nome = $_GET["nome"];
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];
        $n4 = $_GET["n4"];

        $media = ($n1 + $n2 + $n3 + $n4)/4;

        if($nome == NULL || $n1 == NULL || $n2 == NULL || $n3 == NULL || $n4 == NULL)
            echo "Volte e preencha todos os campos!";
        else
        {
            if($media > 10 || $media <0)
                echo "Média incorreta, algum valor digitado está errado";
            else
            {
            echo "A aluno $nome obteve a média = $media! <br>"; 

            if($media >= 6)
                echo "$nome está aprovado! <br>"; 
            else if($media >= 3)
                echo "$nome está de exame! <br>"; 
            else
                echo "$nome está reprovado! <br>"; 
            }
        }
    ?>
</body>
</html>