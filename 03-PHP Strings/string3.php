<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $x = "PHP";
    $y = "Laravel";
    echo $x . $y;                // String concatenation 
    echo "<br>";
    echo $x . " " . $y;         // String concatenation 

    echo "<br>$x $y";           // String concatenation 

    $x = "Hello World!";
    echo "<br> String x is : $x";
    echo "<br>Slicing of x : ";
    echo substr($x, 6, 5);      // Slicing a string with substr() function where start to slicing at index 6 and ending 5 position later
    
    echo "<br>";
    echo substr($x, 6);         // Slicing again from index 6 to end

    echo "<br>Slicing from end of x : ";
    echo substr($x, -5, 3);

    echo "<br>Slicing until last 3 of x : ";
    echo substr($x, 5, -3);     // Slicing from index 5 and ending the 3 from last index

    ?>
</body>
</html>