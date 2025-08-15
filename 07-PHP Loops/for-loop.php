<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    for($x=1; $x<5; $x++){
        echo "WOW PHP WOW <br>";
    }

    for ($x = 1; $x <= 10; $x++) {
        if ($x == 3) break;
        echo "The number is: $x <br>";
    }

    $s = 0;
    for($x = 1; $x<=10; $x++){
        $s = $s +$x;
    }
    echo "Sum of series : " . $s;

    ?>
</body>
</html>