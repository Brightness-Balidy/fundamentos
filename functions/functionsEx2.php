<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functionex2</title>
</head>
<body>
    <?php

        $nome= "Hernani";

        function saudar($name){

            return "Olá $name, Seja bem vindo ao sistema!";

        }
    ?>

    <?= saudar($nome) ?>
</body>
</html>