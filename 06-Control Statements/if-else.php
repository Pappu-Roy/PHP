<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $n = 10;
    if($n%2==0){
        echo "Even Number<br>";
    }
    else
        echo "Odd Number<br>";

    $x = 2025;
    if($x<2025){
        echo "Previous Year<br>";
    }
    else if($x == 2025)
        echo "Current Year <br>";
    else echo "Upcoming Year<br>";

    $s = "Pappu Roy";
    if(strlen($s)<10){
        if($s[0]=='P')
            echo $s;
        else
            echo "Nothing to display";
    }

    echo "<br>";
    $n = 15;
    $s = $n%2==0? "Even": "Odd";
    echo $s;

    ?>
</body>
</html>