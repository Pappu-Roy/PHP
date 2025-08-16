<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Remove Array Item
    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 1);      // array_splice(arr_name, index_start, element_delete_from_starting_index)
    // After the deletion, the array gets reindexed automatically, starting at index 0.
    var_dump($cars); 

    echo "<br>";
    // We can delete array items by using the unset() function.
    $cars = array("Volvo", "BMW", "Toyota");
    unset($cars[1]);
    var_dump($cars);
    // The unset() function does not re-index the array. So, if you remove an element at index 1, 
    // the other elements (e.g., at index 0, 2, 3, etc.) will keep their original indices, 
    // leading to a "gap" in the sequence of indices.

    // Removing multiple array items

    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    unset($cars[0], $cars[1]);
    var_dump($cars);

    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 2);       // It remove the items from index 1 and total 2 items removed
    var_dump($cars);


    // To remove items from an associative array, we can use the unset() function.
    echo "<br>";
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    unset($cars["model"]);
    var_dump($cars);

    // You can also use the array_diff() function to remove items from an associative array.
    // This function returns a new array, without the specified items.
    echo "<br>";
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    $newarray = array_diff($cars, ["Mustang", 1964]);      // Create a new array, without "Mustang" and "1964":
    var_dump($newarray);

    // The array_pop() function removes the last item of an array.
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    array_pop($cars);
    var_dump($cars);

    // The array_shift() function removes the first item of an array.
    echo "<br>";
    $dept = array ("EEE","CSE","SWE");
    array_shift($dept);
    var_dump($dept)

    ?>
</body>
</html>