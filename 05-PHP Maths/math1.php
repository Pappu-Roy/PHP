<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo pi();      // Printing thw value of pi using pi()

    echo "<br>";
    echo(min(0, 150, 30, 20, -8, -200));     // Printing the min value using min()

    echo "<br>";
    echo(max(0, 150, 30, 20, -8, -200));     // Printing the max value using max()

    echo "<br>";
    echo(abs(-20.25));          // Printing the absolute value using abs()

    echo "<br>";
    echo sqrt(16);          // Printing the square root of 16 using sqrt() function

    echo "<br>";
    echo(round(0.60));         // output : 1
    echo "<br>";
    echo(round(0.49));         // Output : 0

    echo "<br>";
    echo(rand());            // Printing a random number
    echo "<br>";
    echo(rand(10, 100));     // Printing a random number from 10 to 100

    ?>
</body>
</html>