<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $data = array(
        array("Lukas", 170, 20), 
        array("Pedro", 172, 21), 
        array("Ziko", 180, 17)
        );
        if($data[0][0] == "Lukas"){
            echo "Nama pertama pada array adalah ". $data[0][0] ." dengan tinggi ". $data[0][1] ." cm berusia ". $data[0][2] ." tahun";
        }else{
            echo "Nama pertama pada array bukan Lukas, tetapi ". $data[0][0] ." dengan tinggi ". $data[0][1] ." cm berusia ". $data[0][2] ." tahun";
        };

    ?>
</body>
</html>