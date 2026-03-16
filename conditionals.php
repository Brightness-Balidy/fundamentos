<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="
    display: grid;
    place-items: center;
    height: 100vh;
    margin: 0;
    font-family: sans-serif;">
    
    <h1>
        <?php
            $name = "DARK MATTER";
            $read = false;
            

            if($read){
                
                $message = "You have read  $name";
                
            }else{

                $message = "You have not read $name";
            }

        ?>

        <?= $message ?>
       


    </h1>

</body>
</html>