<?php 
    function texto()
    {
        echo "<p> Está função mostra o texto sem argumento </p>";
    }

    function mostraValor($valor)
    {
        echo "<p> Esta função mostra o valor informado com argumento = $valor </p>";
    }

    function mostraMult()
    {
        $v = func_get_args(); 

        $t = func_num_args(); 
        $s = 1; 

        for($i = 0; $i < $t; $i++)
            $s *= $v[$i];

        return $s;
    }
?> 