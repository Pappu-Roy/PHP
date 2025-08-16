<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $cars = ["brand" => "Ford", "model" => "Mustang", "year" => 1964];
    echo $cars["brand"];
    echo "<br>";
    echo $cars["year"];

    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as $x) {
        echo "$x <br>";
    }
    $cars[]="Prado";
    echo "$cars[3]"."<br>";

    array_push($cars,"Tata","TVS");
    foreach($cars as $x){
        echo "$x<br>";
    }

    ?>
</body>
</html>