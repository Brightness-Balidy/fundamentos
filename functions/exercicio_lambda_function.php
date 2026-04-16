<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $produtos = [
            [
                "nome"=>"camiseta",
                "preco"=> 50,
                "categoria"=> "roupas",

            ],
            [
                "nome"=>"calca",
                "preco"=> 100,
                "categoria"=>"roupas",
            ],
            [
                "nome"=>"cabo HDMI",
                "preco"=> 30,
                "categoria"=>"electronicos",
            ],
            [
                "nome"=>"monitor",
                "preco"=>400,
                "categoria"=>"electronicos"
            ]
        ]
    ?>
    <?php 

        $filter = function($items, $fn){

        $filteredItems = [];

        foreach($items as $item){
            if($fn($item)){
                $filteredItems [] = $item;
            }
        }
            return $filteredItems;

        };
        
         $filteredProds = $filter($produtos, function ($arr){

            return $arr['preco'] > 30;
        });
    ?>
    
        <?php foreach($filteredProds as $item) : ?>

            <li>
                <?= "o preco do produto é: " . $item['nome'] ?>
            </li>

        <?php endforeach ?>

</body>
</html>