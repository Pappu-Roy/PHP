<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $colors = array("Red", "Green", "Blue", "Yellow");

    foreach ($colors as $x) {
        echo "$x <br>";
    }


    $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach ($members as $x => $y) {
        echo "$x : $y <br>";
    }
    

    $colors = array("Red", "Green", "Blue", "Yellow");
    foreach ($colors as $x) :
        echo "$x <br>";
    endforeach;
    ?>
</body>
</html>