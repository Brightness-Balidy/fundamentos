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
                'contact'=>'860749853',
                'age'=> 30
            ],
            [
                'nome'=>'Brightness Balidy',
                'email'=>'brightness@gmail.com',
                'contact'=>'857055975',
                'age'=>24
            ],
            [
                'nome'=>'henry Balidy',
                'email'=>'henry@gmail.com',
                'contact'=>'878688975',
                'age'=>16
            ]
        ]
    ?>
        
        <?php foreach ($people as $person) : ?>

            <?php if($person['age'] === 24) : ?>
                <li>
                    <a href="#"></a>
                        <?= "contacte o "?> <h4><?= $person['nome'] ?></h4> (<?=" pelo " . $person['email'] ?>) </h1>
                </li>

            <?php endif ?>
        <?php endforeach ?>
</body>
</html>