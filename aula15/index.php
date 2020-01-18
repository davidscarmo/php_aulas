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
            
            $carro = new Veiculo("Gol",2015,true);
          /*  $carro->setNome("Gol");
            $carro->setCor("Branco");
            $carro->setAno(2015);
            $carro->setBotao(true);*/
            
            echo "<h3>Mostrando o objeto carro com var_dump</h3>";
            var_dump($carro);
            
            echo "<h3>Mostrando o objeto carro com print_r</h3>";
            print_r($carro);
            echo "<h3>Mostrando o objeto carro com echo</h3>"; 
            echo "Eu tenho um carro modelo {$carro->getNome()} , cor{$carro->getCor()}." . "{$carro->getAno()} e o estado dele {$carro->getBotao()}";
            echo "<h3>Mostrando os métodos</h3>";
            $carro->acelerar();
            $carro->desligar();
            $carro->acelerar();
            $carro->ligar();
            $carro->acelerar();

            $onibus = new Veiculo("Scania", 2015, false); 
            echo "<h3>Mostrando o objeto ônibus com var_dump</h3>";
            var_dump($onibus);

        ?>
        </pre>
    </body>
</html>
