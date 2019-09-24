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
       echo "<h3>Contagem de 1 a 10</h3>"; 
       $i = 1; 
       do {
           echo "$i <br>";
           $i++;
       } while ($i <= 10);
    ?>
</body>
</html>