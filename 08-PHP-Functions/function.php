<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function myMessage() {
        echo "Hello world!";
    }

    myMessage();

    echo "<br>";
    function familyName($fname) {
        echo "$fname Roy<br>";
    }

    familyName("Pappu");
    familyName("Pollobi");

    function nameAge($name, $age){
        echo "Name : $name <br> Age: $age <br>";
    }

    nameAge("Pappu", 25);
    nameAge("Leo Messi", 38);

    function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(25);

    // Factorial Finding function

    function fact($n){
        if($n==1 || $n==0)
            return 1;
        else
            $fact = $n*fact($n-1);
        return $fact;
    }

    echo "Factorial of 5 is : " . fact(5);
    echo "<br>";
    echo "Factorial of 5 is : " . fact(10);

    ?>
</body>
</html>