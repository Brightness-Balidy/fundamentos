<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $books = [
            [
                "title" => "The Great Gatsby",
                "author" => "F. Scott Fitzgerald",
                "year" => 1925
            ],
            [
                "title" => "To Kill a Mockingbird",
                "author" => "Gabriel Monjane",
                "year" => 2024
            ],
            [
                "title" => "1984",
                "author" => "George Orwell",
                "year" => 1949
            ],
            [
                "title"=>"Voce é o seu maior problema",
                "author"=>"Gabriel Monjane",
                "year"=>2024
            ]
            ];
            
    $album = [

        [
            "song"=> "Perfeita",
            "album"=>"Terapia do coração",
            "artist"=> "Hot Blaze",
            "year"=> 2020
        ],
        [
            "song"=>"Tin Tin",
            "album"=>"Doutor Amor",
            "artist"=>"Hot Blaze",
            "year"=>2021
        ],
        [
            "song"=>"Aniquilacao",
            "album"=>"punchlines for days",
            "artist"=>"Hernani da Silva",
            "year"=>2020           
        ],    
        [
            "song"=>"Summer of 69'",
            "album"=>"So far so good",
            "artist"=>"Bryan Adams",
            "year"=>1999
        ]

    ];
    

        //lambda function para filtrar os livros por ano/ ou tambem conhecida com unamed functions, podemos atribuir a variaveis e utilizar em outros contextos 
        //deixamos a funcao um pouco mais generica nao especificando sobre de que array se trata mas colocando valores que serao interpretados levando em conta o tipo de array se trata 
        $filter = function ($items, $key, $value){
            $filteredItems =[];

            foreach($items as $item){
                if($item[$key] === $value){
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        };
            $filteredAlbums = $filter($album, 'year', 1999);
    ?>
    
    <?php foreach($filteredAlbums as $item) : ?>
        
            <div style="width: 350px; background-color: lightgray; padding: 10px; margin-bottom: 10px; list-style: none; border-radius:8px;">
                
            <li>
                <?= "O titulo do livro escrito por <strong>Gabriel Monjane</strong> é:   \n"  ?>
                <div style="color:blue; font-weight:bold">
                    <?=$item['album'] ?>
                </div>
            </li>
        </div>

      <?php endforeach?>

</body>
</html>