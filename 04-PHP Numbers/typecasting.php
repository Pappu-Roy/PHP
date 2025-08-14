<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $x = "1508.2025";
    $cast = (int)$x;     // it converts its type from string to int, but it count the numbers before the decimal point(.) cause it is an int number
    echo $cast;          // Output : 1508
    echo "<br>";
    var_dump($cast);     // Output : int(1508)

    echo "<br>". (float)$x;   // Output : 1508.2025

    ?>
    <pre>
    <?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    ?> 
    </pre>

    <p>Note that when casting a Boolean into string it gets the value "1", and 
        when casting NULL into string it is converted into an empty string "".</p>

    <pre>

    <?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 kilometers"; // String
    $d = "kilometers 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL

    $a = (int) $a;
    $b = (int) $b;
    $c = (int) $c;
    $d = (int) $d;
    $e = (int) $e;
    $f = (int) $f;
    $g = (int) $g;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    var_dump($g);
    ?> 
    </pre>

    <p>Note that when casting a string that starts with a number, the (int) function uses that number. If it does not start with a number, the (int) function convert strings into the number 0.</p>

    <pre>
    <?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    ?> 
    </pre>

    <p>When converting into arrays, most data types converts into an indexed array with one element.</p>

    <p>NULL values converts to an empty array object.</p>

    <pre>
    <?php
    $a = array("Volvo", "BMW", "Toyota"); // indexed array
    $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

    $a = (object) $a;
    $b = (object) $b;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    var_dump($b);
    ?> 
    </pre>

    <p>Indexed arrays converts into objects with the index number as property name and the value as property value.</p>

    <p>Associative arrays converts into objects with the keys as property names and values as property values.</p>

</body>
</html>