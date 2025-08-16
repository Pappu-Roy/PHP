<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // The sort() function sort arrays in ascending order.
    $num = array(4, 6, 2, 22, 11);
    sort($num);
    var_dump($num);

    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    var_dump($cars);

    echo "<br>";
    rsort($num);             // Sorting the array in descending order
    var_dump($num);

    echo "<br><br>";
    
    $age = array("Peter"=>"40", "Ben"=>"37", "Joe"=>"43");
    echo "The original array : <br>";
    var_dump($age);
    echo "<br><br>";

    // The asort() function sort associative arrays in ascending order, according to the value.
    echo "Applying asort() : <br>";
    asort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    echo "<br>";
    // The ksort() function sort associative arrays in ascending order, according to the key.
    echo "Applying ksort() : <br>";
    $age = array("Peter"=>"40", "Ben"=>"37", "Joe"=>"43");
    ksort($age);
    foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }

    // In the same technique
    // The arsort() function sort associative arrays in descending order, according to the value.

    // The krsort() function sort associative arrays in descending order, according to the key.


    ?>
</body>
</html>