<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Array items of four different data types:
    function myFunction() {
        echo "This text comes from a function.<br>";
    }

    // create array:
    $myArr = array("Volvo", 15, ["apples", "bananas"], "myFunction");

    // calling the function from the array item:
    $myArr[3]();
    echo $myArr[2][0];    // Printing the vaalue of $myArr[2][0] element 

    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
    echo "<br>";
    var_dump($cars);

    ?>
</body>
</html>