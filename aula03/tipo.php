<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipo de variável</title>
</head>
<body>
    <?php 
        echo "<h3>Tipo de variável</h3>";

        $var1 = 10;
        $var2 = 35.86;
        $var3 = "PHP Hypertext Preprocessor";
        $var4 = false;
        $var5 = null;

        echo '$var1 é do tipo ' . gettype($var1) . "<br>";
        echo '$var2 é do tipo ' . gettype($var2) . "<br>";
        echo '$var3 é do tipo ' . gettype($var3) . "<br>";
        echo '$var4 é do tipo ' . gettype($var4) . "<br>";
        echo '$var5 é do tipo ' . gettype($var5) . "<br>";
    ?>
</body>
</html>