<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 20;
    $y = 30;             // PHP recognizes this as an integer
    $s = "Pappu Roy";    // PHP now recognizes this as a string
    $s1 = "PHP";
    echo "$x <br>";   // we will use <br> fro printing a newline in php
    echo $y."<br>";
    echo "$s<br>";
    echo $s1;
    print "<br>";
    echo $s . " Learning " . $s1;  // printing two string variables by using . (concatenaton)

    // Checking data types

    echo "<br><br>Checking DataTypes: <br>";
    var_dump(5);
    echo "<br>";
    var_dump($x);
    echo "<br>";
    var_dump($s);
    echo "<br>";
    $bol = true;
    var_dump($bol);

    echo "<br>";
    var_dump("SUST");
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);

    $x = $y = $z = 50;
    Echo "<br>$x $y $z";    // PHP is not a case sensitive language

    ?>
</body>
</html>