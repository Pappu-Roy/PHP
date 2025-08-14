<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $x = 20;
    echo is_int($x);  // output : 1 which means bollean true
    echo "<br>";
    var_dump(is_int($x));    // Output : bool(true)
    $y = 20.25;
    echo "<br>";
    var_dump(is_float($y));  // Output : bool(true)
    var_dump(is_int($y));    // Output : bool(false)

    echo "<br>";
    $x = 20_5.15_32;           
    echo $x;                    // Output : 205.2532

    echo "<br>";


    // Printing the max and min value of int and float
    echo PHP_INT_MAX;  
    echo "<br>";
    echo PHP_INT_MIN;
    echo "<br>";
    echo PHP_FLOAT_MAX;
    echo "<br>";
    echo PHP_FLOAT_MIN;

    echo"<br>";
    var_dump(is_finite($x));

    echo "<br>";
    $x = 1.9e411;
    var_dump(is_infinite($x));
    echo "<br>";

    // Invalid calculation will return a NaN value
    $x = acos(8);
    var_dump($x);     // Output : float(NAN)

    echo "<br>";

    $x = 5985;
    var_dump(is_numeric($x));     // Output: bool(true)

    $x = "5985";
    var_dump(is_numeric($x));     // Output: bool(true)
    $x = "59.85" + 100;
    var_dump(is_numeric($x));     // Output: bool(true)

    $x = "Hello";
    var_dump(is_numeric($x));     // Output: bool(false)
    

    ?>
</body>
</html>