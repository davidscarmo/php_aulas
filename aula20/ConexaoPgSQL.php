<?php

    echo "<h3>Conexão com PostGres </h3>" ;

    $con = pg_connect("host=localhost dbname=crud user=postgres password=123456"); 

    $dados = pg_query($con, "select * from pessoa"); 

    echo "<pre>"; 

    print_r(pg_fetch_all($dados));

    echo "</pre>"; 
?>
