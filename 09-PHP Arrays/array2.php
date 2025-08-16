<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $cars = array("Volvo", "BMW", "Toyota");
    echo "$cars[1]<br>";
    foreach ($cars as $x) {
        echo "$x <br>";
    }
    $cars[0]="Prado";
    echo "$cars[0]<br>";

    array_push($cars, "Ford");
    foreach ($cars as $x) {
        echo "$x <br>";
    }

    // Associative Array

    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    var_dump($car);
    echo "<br>";
    echo $car["model"];

    echo "<br>";
    $dept = array('CSE'=>"Software Enginner", 'EEE'=>"EEE Engineer", "SWE"=>"Software Engineer");
    foreach($dept as $x=>$y){
        echo "$x : $y<br>";
    }

    ?>
</body>
</html>