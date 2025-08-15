<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $x = 10;
    $y = 5;

    echo "Value of x : $x";
    echo "<br>Value of y : $y";

    echo "<br> <br>Operations of x and y : <br>";
    echo "Multiplication : " . $x*$y;
    echo "<br>Division : " . $x/$y;
    echo "<br>Modulus : " . $x%$y;

    echo "<br>Exponentiation : " . $x**$y;
    print "<br>";

    $n = 2025;
    $m = "2025";

    echo ($n == $m);   // it returns true (Returns true if $x is equal to $y)

    echo "<br>";
    var_dump($n === $m);     // Returns false; Returns true if $x is equal to $y, and they are of the same type (Identical)
    echo "<br>";

    // Spaceship in PHP 

    $x = 5;  
    $y = 10;

    echo ($x <=> $y); // returns -1 because $x is less than $y
    echo "<br>";

    $x = 10;  
    $y = 10;

    echo ($x <=> $y); // returns 0 because values are equal
    echo "<br>";

    $x = 15;  
    $y = 10;

    echo ($x <=> $y); // returns +1 because $x is greater than $y


    ?>
</body>
</html>