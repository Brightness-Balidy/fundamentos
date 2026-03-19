<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $people = [
            [
                'nome'=>'Jenifer Aniston',
                'email'=>'jenifer@gmail.com',
                'contact'=>'860749853' 
            ],
            [
                'nome'=>'Brightness Balidy',
                'email'=>'brightness@gmail.com',
                'contact'=>'857055975'
            ],
            [
                'nome'=>'henry Balidy',
                'email'=>'henry@gmail.com',
                'contact'=>'878688975'
            ]
        ]
    ?>

        <?php foreach ($people as $person) : ?>
            <a href="<?= $person ?>">
                <li><?= $person['nome']?></li>
            </a>
        <?php endforeach ?>
</body>
</html>