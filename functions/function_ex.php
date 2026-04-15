<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $album = [

        [
            "tittle"=> "Perfeita",
            "album"=>"Terapia do coração",
            "artist"=> "Hot Blaze",
            "year"=> 2020
        ],
        [
            "tittle"=>"Tin Tin",
            "album"=>"Doutor Amor",
            "artist"=>"Hot Blaze",
            "year"=>2021
        ],
        [
            "tittle"=>"Aniquilacao",
            "album"=>"punchlines for days",
            "artist"=>"Hernani da Silva",
            "year"=>2020           
        ],    
        [
            "tittle"=>"Summer of 69'",
            "album"=>"So far so good",
            "artist"=>"Bryan Adams",
            "year"=>1999
        ]

    ]
?>

    <?php
    //esta função foi criada para fazer a filtragem das musicas consoante o ano de lancamento 
        function filterAlbumByYear($alb, $ano){
        
        $songYear = [];

         foreach($alb as $song){
               
            if($song["year"] === $ano ){
                $songYear [] = $song;
            }
         } 
            return $songYear;
            
        }
    
        $songYear = filterAlbumByYear($album, 2020);
    ?>
    
    //com o filtererAlbumByYear(), nao estamos fazendo o loop da funcao, mas pelo que é retornado pela funcao que é o $songYear
    
    //foreach(filterAlbumByYear($album, 2020)as $song)
        <?php foreach($songYear as $song)   :  ?>
        //daqueleas musicas filtradas, que foram lançadas em 2020, queremos filtrar ainda mais, para que mostre apenas aquelas que foram feitas pelo artista "Hot Blaze"
            <?php if($song['artist'] === "Hot Blaze") : ?>
                <li>
                    <?= "O titulo da musica é: " . $song['tittle'] ?>
                </li>
            <?php endif?>
        <?php endforeach?>






</body>
</html>