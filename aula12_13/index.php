<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Veiculo.php';
            
            $carro = new Veiculo;
            $carro->nome = "Gol";
            $carro->cor = "Branco";
            $carro->ano = 2015;
            $carro->botao = false;
            
            echo "<h3>Mostrando o objeto carro com var_dump</h3>";
            var_dump($carro);
            
            echo "<h3>Mostrando o objeto carro com print_r</h3>";
            print_r($carro);
            
            echo "<h3>Mostrando os métodos</h3>";
            $carro->acelerar();
            
            
        ?>
        </pre>
    </body>
</html>
