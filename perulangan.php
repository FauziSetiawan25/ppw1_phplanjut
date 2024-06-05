<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $x = 1;
        while($x < 5){
            echo "The number is: $x <br>";
            $x++;
        };
    ?>
    <?php 
        $x = 1;
        do{
            echo "The number is: $x <br>";
            $x++;
        }while($x < 5);
    ?>
    <?php 
        for($x = 1; $x <= 10; $x++){
            echo "The number is: $x <br>";
        };
    ?>
    <?php 
        $colors = array("red", "green", "blue", "yellow");
        foreach($colors as $value){
            echo "$value <br>";
        };
    ?>
</body>
</html>