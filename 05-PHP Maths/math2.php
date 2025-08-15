<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // To create a constant, use the define() function.
    // define(name, value);

    define("php", "Welcome to PHP!");
    echo php;

    echo "<br>";
    const me = "Pappu Roy";
    echo me;

    echo "<br>";

    // Definig an array
    define("course", ["CSE","EEE","SWE"]);
    echo course[0];

    echo "<br>";
    
    // Constants are automatically global and can be used across the entire script.

    function myTest() {
    echo course[1];
    }
    myTest();

    ?>
</body>
</html>