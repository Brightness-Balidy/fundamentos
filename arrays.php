<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recomended Books</h1>

        <?php 

            $books = [
                "Do Androids Dream of Electric Sheep",
                "The Langoliers",
                "Hail Marry",
            ];

        ?>

        <ul>
            
            <?php
                foreach ($books as $book){
                    echo "<li>{$book}™</li>";
                }
            ?>

            <?php foreach($books as $book) : ?>
                 <li>HELLO</li>
            <?php endforeach; ?>
        </ul>


        <p><?= $books[2] ?></p>
</body>
</html>