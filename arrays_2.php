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
                'name' => 'Do Android Dream of Elecronic Sheep',
                'author' => 'Philip K. Dick',
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Philip K. Dick',
                'purchaseUrl' => 'http://example.com'
            ],
                        
        ]
    ?>

    <?php foreach($books as $book) : ?>
        <a href="<?= $book ?>">
            <li><?= $book['name']; ?></li>
        </a>
    <?php endforeach ?>
</body>
</html>