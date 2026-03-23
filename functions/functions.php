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
                'age'=> 16
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
        ];
    ?>

        <?php
            function filterByAge($people, $age){
                //
                $filteredPeople = [];

                    foreach($people as $person){
                    
                        if($person['age'] === $age){

                            $filteredPeople[]= $person;
                        }
                    }

                    return $filteredPeople;

            }

            
        ?>
        
        <?php foreach (filterByAge($people, 16 ) as $person) : ?>

            <?php if($person['nome'] === 'Jenifer Aniston') : ?>
                <li>
                    <a href="#">
                        <h4><?=" pelo " . $person['email'] ?> </h4>
                    </a>
                </li>

            <?php endif ?>
        <?php endforeach ?>
</body>
</html>