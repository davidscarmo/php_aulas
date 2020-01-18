<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes</title>
</head>
<body>
<pre>
    <?php

    require_once 'Administrador.php';
    require_once 'Contador.php';
    require_once 'Estagiario.php';
    require_once 'Assistente.php';

    $a = new Administrador();
    $c = new Contador(); 
    // $p = new Profissional(); 'Fatal error: Cannot instantiate abstract class Profissional '
    $e = new Estagiario();
    $ass = new Assistente();

    $a->setId(1);
    $a->setNome("Mauro");
    $a->setSalario(8000);
    $a->setCra(1111);
    print_r($a);

    $c->setId(2);
    $c->setNome("Livia");
    $c->setSalario(5000);
    $c->setCrc(2222);
    print_r($c);

    $e->setId(3);
    $e->setNome("Pedro");
    $e->setSalario(1000);
    print_r($e);

    $ass->setId(4);
    $ass->setNome("Otavio");
    $ass->setSalario(3000);
    print_r($ass);

    echo "<h1>Métodos do Administrador</h1>";
    $a->consultar(); 
    $a->contratar($c->getNome());

    echo "<h1>Métodos do contador</h1>";
    $c->consultar();
    $c->pagar($a->getNome(), $a->getSalario());

    echo "<h1>Métodos do Estagiário</h1>";
    $e->consultar();

    echo "<h1>Métodos do Assistente</h1>";
    $ass->pagar($e->getNome(), $e->getSalario());
    ?>
</pre>
</body>
</html>