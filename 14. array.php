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

    $arr = array("Sharif", "Hossen", 24, 25.5);
    echo $arr[1], " ", $arr[3];
    echo "<br>";

    echo count($arr); // returns number of element of an array.
    echo "<br>";

    sort($arr); // rsort() -> to sort dsecnding Order.

    for($i = 0; $i < count($arr); $i++)
    {
        echo $arr[$i];
        echo "<br>";
    }

    print_r ($arr);

    ?>
</body>
</html>