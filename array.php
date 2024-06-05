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
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I Like ". $cars[0] .", ". $cars[1] ." and ". $cars[2] .".";
    ?>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
    ?>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    $arrLength = count($cars);
    for($x = 0; $x < $arrLength; $x++){
        echo $cars[$x];
        echo "<br>";
    }
    ?>

    <?php 
    $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    echo "Peter is ". $age["Peter"] ." years old.";
    ?>

    <?php 
    $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    foreach($age as $x=>$xValue){
        echo "Key = ". $x .", Value = ". $xValue;
        echo "<br>";
    }
    ?>
    
    <?php
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Sabb", 5, 2),
        array("Land Rover", 17, 15)
    );
    for($row = 0; $row < 4; $row++){
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for($col = 0; $col < 3; $col++){
            echo "<li>". $cars[$row][$col] ."</li>";
        };
        echo "</ul>";
    }
    ?>
    
</body>
</html>