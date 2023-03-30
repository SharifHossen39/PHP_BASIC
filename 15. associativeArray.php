<!DOCTYPE html>
<html lang="en" declare(strict_types=1);>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bangladesh</h1>
    <?php

    $age["Sharif"] = "24";
    $age["Arif"] = "28";
    echo $age["Sharif"];
    echo "<br>";

    $AGE = array("Sharif" => "24", "Arif" => 28.5, "Fahad" => 23);
    echo $AGE["Fahad"];
    echo "<br><br>";

    /*sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    asort() - sort associative arrays in ascending order, according to the value
    ksort() - sort associative arrays in ascending order, according to the key
    arsort() - sort associative arrays in descending order, according to the value
    krsort() - sort associative arrays in descending order, according to the key 
    */

    asort($AGE);

    foreach($AGE as $x => $x_value)
    {
        echo $x, "  ", $x_value;
        echo "<br>";
    }



    ?>
</body>
</html>