<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name = array("Lukas", "Pedro", "Ziko");
    if($name[0] == "Lukas"){
        echo "Nama pertama pada array adalah ". $name[0];
    }else{
        echo "Nama pertama pada array bukan Lukas, tetapi ". $name[0];
    };
    ?>
</body>
</html>
