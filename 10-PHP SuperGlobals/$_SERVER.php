<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
    echo $_SERVER['PHP_SELF'];  // The filename of the currently executing script, relative to the document root.
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];  // The name of the host server under which the current script is executing.
    echo "<br>";
    echo $_SERVER['SERVER_ADDR']; // The IP address of the server under which the current script is executing.
    echo "<br>";
    echo $_SERVER['SERVER_PORT']; // The port on the server machine being used by the web server for communication.
    echo "<br>";
    echo $_SERVER['SERVER_PROTOCOL'];
    echo "<br>";
    echo $_SERVER['SERVER_SOFTWARE'];  // The server identification string, given in the response header.
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];  // The User-Agent string of the browser that is viewing the current page.
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];  // The path of the current script.
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];  // The request method used to access the page (e.g., GET, POST).

    ?>
</body>
</html>