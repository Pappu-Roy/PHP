<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $s = "Hello World!";
    echo "The string of s is : $s";
    
    echo "<br> Uppercase of s is : ". strtoupper($s);    // Converting uppercase letter of string s

    echo "<br> Lowercase of s is : " . strtolower($s);   // Converting lowercase letter of string s

    echo "<br> Replacing 'World' with 'Pappu' of s : " . str_replace("World", "Pappu", $s);   // Replacing a word with another word

    echo "<br> Reversing of the string s : " . strrev($s);   // Reversing a string 

    echo "<br>Trimming of ' Hello   PHP ' is : " . trim(" Hello PHP ");   // It removes the extra white spaces

    echo "<br> Converting string to array of s : <br>";
    $ss = explode(" ", $s);
    print_r($ss);




    ?>
</body>
</html>