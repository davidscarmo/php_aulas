<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Mostrar Telefone</h1>
<pre>
    <?php 
        require_once 'Controle.php';
        $galaxyS = new Telefone();
        var_dump($galaxyS); 

        $galaxyS->ligar();
        $galaxyS->abrirMenu();
        $galaxyS->maisVolume();
        $galaxyS->menosVolume();
        $galaxyS->desligar();
        $galaxyS->maisVolume();
    ?> 
</pre>

</body>
</html>