<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
    </form>

    <?php

    // $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".

    echo "Welcome " . $_POST["name"] . "<br>";
    echo "Your email address is: " . $_POST["email"] . "<br>";

    ?>
</body>
</html>