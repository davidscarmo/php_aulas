<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
</head>
<body>
    <?php 
        $valor_total = $_GET['valor-pgto'];

        $pagamento = $_GET['op']; 

        switch($pagamento)
        {
        case 1:
            $val_pgto = $valor_total * 0.9;
            echo "O valor de pagamento com 10% de desconto é: $val_pgto";
            break;
        case 2:
            $val_pgto = $valor_total * 1.05;
            echo "O valor de pagamento com 5% de juros é: $val_pgto";
            break;
        case 3:
            $val_pgto = $valor_total * 1.10;
            echo "O valor de pagamento com 10% de juros é: $val_pgto";
            break;
        default:
            echo "Não foi selecionada uma forma de pagamento!";
        }
    ?> 


</body>
</html>