<?php

require_once 'Config.php';

echo "<h3>Conexão com PDO</h3>" ;

try 
{
    //$con = new PDO('pgsql:host=localhost;dbname=crud;port=5432', 'postgres', '123456'); //conexão via pgsql com pdo

    //$con = new PDO('mysql:host=localhost;dbname=crud;port=3306;charset=utf8', 'root', '123456');

    $con = new PDO(DRIVER . ':host=' . ENDERECO . ';dbname=' . BD . ';port=' . PORTA, USUARIO, SENHA);

    $dados = $con->query("SELECT * FROM pessoa");

    echo "<pre>"; 

    print_r($dados->fetchAll(PDO::FETCH_ASSOC));
    
    echo "</pre>"; 

} 
catch (PDOException $ex) 
{
    echo $ex->getMessage();
}

?>