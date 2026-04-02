<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functionsEx3</title>
</head>
<body>
    <?php

        function calcular($n1, $n2, $operacao){
            
            switch($operacao){
                case "+" :
                    $result = $n1 + $n2;
                     echo "o resultado da soma de $n1 e $n2 é: $result";
                     break;
                case "-" : 
                    $result = $n1 - $n2;
                    echo "o resultado da subtracao de $n1 e $n2 é: $result";
                    break;
                case "*":
                    $result = $n1 * $n2;
                    echo "o resultado da multiplicacao de $n1 e $n2 é: $result";
                    break;
                case "/": 
                    $result = $n1 / $n2;
                    echo "o resultado da divisao de $n1 e $n2 é: $result";
                    break;
                    default:
                    echo "operacao invalida";
            }

           
        }
    ?>
    <?= calcular(10, 5, "-") ?>

</body>
</html>