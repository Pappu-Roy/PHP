<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Hello PHP...<br>";
    $x = "Pappu";
    echo "Hello $x";
    $p = "Pappu Roy";
    echo "<br>";
    echo "Variable p is '$p'<br>";
    echo "String length of p = " . strlen($p);     // Printing string length of $p
    echo "<br>";
    echo "Word of p = ".str_word_count($p);    // Counting the string word and printing it

    echo "<br> Position of 'Roy' in p is : ".strpos($p,"Roy");   // Finding the position of a word in the string and printing it 

    ?>
</body>
</html>