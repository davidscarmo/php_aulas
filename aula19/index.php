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
        require_once 'Prefeito.php';
        require_once 'Vereador.php';
        require_once 'Secretario.php'; 

        $p = new Prefeito(); 
        $v = new Vereador();
        $s = new Secretario();

        $p->setId(25);
        $p->setNome("Flavio Prandi"); 
        $p->setSalario(9000);
        $p->setGratificacao(1000);
        print_r($p); 

        $v->setId(35); 
        $v->setNome("Chico");
        $v->setSalario(5000);
        print_r($v);

        $s->setId(45);
        $s->setNome("José da Silva");
        $s->setSalario(2000);
        $s->setCargaHoraria(40); 
        print_r($s);
    ?>
</pre>
</body>
</html>