<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // $GLOBALS is an array that contains all global variables. 
    // To use a global variable inside a function you have to either define them as global
    //  with the global keyword, or refer to them by using the $GLOBALS syntax.
    
    // Using $GLOBALS array
    $x = 120;
    function myfunction() {
        echo $GLOBALS['x'];
        $GLOBALS['y'] = 150; // You can also set a global variable using $GLOBALS
    }
    myfunction();      // Output : 120
    echo "<br>";
    echo $GLOBALS['y']; // Output : 150, since we set it in the function

    echo "<br>";

    // Using the global keyword
    // The global keyword is used to access a global variable from within a function.
    $n = 10;
    function myfunction2() {
        global $n;
        echo $n;
    }
    myfunction2();    // Output : 10 


    ?>
</body>
</html>