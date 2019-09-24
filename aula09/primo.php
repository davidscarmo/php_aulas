<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $n = $_GET['primo'];
        $j = 0;
        for($i = 1; $i <= $n; $i++)
        {
            $aux = $n%$i;
            
            if($aux ==0)
            {
                $mult[$j] = $i;
                $j++;
            }

        }
        
        if((count($mult)) == 2)
                $primo = "O número $n é primo!";
            else
                $primo = "O número $n não é primo!";

        $multPrint = implode(",", $mult); //array to string, "," separador

       
        echo "Valores múltiplos: " . $multPrint . "<br>";
        echo "Total de múltiplos: " . (count($mult)) . "<br>" ;
        echo "$primo";
    ?>
    
</body>
</html>