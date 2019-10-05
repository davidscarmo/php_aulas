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
            $bandas[] = 'Queen';
            $bandas[] = 'Scorpions';
            $bandas[] = 'Bon Jovi';
            $bandas[] = 'U2';

            print_r($bandas); 

            echo "<h3>Mostrando com var_dump</h3>";
            var_dump($bandas);

            echo "<h3>Percorrendo um array com for</h3>"; 
            for($i = 0; $i < count($bandas); $i++)
                echo "$bandas[$i] <br>";
            
            echo "<h3>Percorrendo um array com foreach</h3>";
            
            foreach ($bandas as $valor) 
            {
                echo "$valor <br>";
            }
        ?>
    </pre>
</body>
</html>