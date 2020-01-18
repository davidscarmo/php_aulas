<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
        require_once 'cartaoTravel.php';

        echo "<h3>Criando o objeto user1</h3>" ;
        $user1 = new CartaoTravel();
        $user1->cadastrarCartao("Black");
        $user1->setNumero(1);
        $user1->setUsuario("José");
        print_r($user1); 
    
        
        echo "<h3>Criando o objeto user2</h3>" ;
        $user2 = new CartaoTravel();
        $user2->cadastrarCartao("Compacto");
        $user2->setNumero(2);
        $user2->setUsuario("Maria");
        print_r($user2); 
    ?>
</pre>
</body>
</html>