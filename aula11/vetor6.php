<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vetor</title>
</head>
<body>
    <pre>
    <?php
         $clientes[0]['Nome'] = 'José da Silva';
         $clientes[0]['Sexo'] = 'Masculino';
         $clientes[0]['Cidade'] = 'Jales/SP';
         
         $clientes[1]['Nome'] = 'Maria Souza';
         $clientes[1]['Sexo'] = 'Feminino';
         $clientes[1]['Cidade'] = 'Urânia/SP';
         
         echo "<h3>Mostrando com print_r</h3>";
         print_r($clientes);

         echo "<h3>Percorrendo um array com foreach mostrando suas chaves</h3>"; 

         foreach ($clientes as $chaveA => $linha) {
             echo "--> Clientes" . $chaveA;
             foreach($linha as $chaveB => $coluna)
                echo "$chaveA  $coluna" ;
            
            echo "<br>";
         }
    ?>
    </pre>
</body>
</html>