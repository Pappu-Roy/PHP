<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $x = 2;
    while($x<=10){
        echo "The number is : $x<br>";
        $x +=2;
    }

    $i = 1;
    while ($i < 6) {
        if ($i == 3) break;
        echo $i; echo "<br>";
        $i++;
    }

    // Another way to write while loop
    $i = 1;
    while ($i < 6):
        echo $i . "<br>";
        $i++;
    endwhile;

    $n = 2;
    $s = 0;
    while($n<=100){
        $s +=$n;
        $n +=2;
    }
    echo "Sum of the series : $s";


    ?>
</body>
</html>