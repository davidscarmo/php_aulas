<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $value = $_GET['select'];
    $j = 0; 
            do
            {
                echo "$value x $j = " . $j * $value . "<br>";
                $j++; 
            }while($j <=10); 

    ?>
</body>
</html>