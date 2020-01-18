<?php

echo "<h3>Conexão com MYSQL</h3>";

//mysqli_connect: abre uma conexão Mysql
$con = mysqli_connect('localhost', 'root', '', 'crud');

//mysqli_query : executa uma consulta(query)
$dados = mysqli_query($con, "select * from pessoa");

echo"<pre>";

//mysqli_fetch_all() retorna um array que contém todas as linhas (registros) de uma consulta
print_r(mysqli_fetch_all($dados));
echo "</prev>";

?> 
