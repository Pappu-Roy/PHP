<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $x = 5; // global scope
    function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";


    // The global keyword is used to access a global variable from within a function.
    //To do this, use the global keyword before the variables (inside the function):

    $x = 5;
    $y = 10;
    function Test(){
    global $x, $y;
    $y = $x + $y;
    }

    Test();
    echo "Sum using global keyword: ". $y; // outputs 15

    ?>
</body>
</html>