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

    $arr = array(
        array("Sharif", "Hossen", 24, 3.81, "Cumilla"),
        array("Fahad", "Badshah", 23, "No", "malasiya"),
        array(1, 2, 3, 4, 5)
    );
    echo $arr[0][0], " ", $arr[1][3];
    echo "<br> <br>";

    for($i = 0; $i < count($arr); $i++)
    {
        for($j = 0; $j < count($arr[$i]); $j++)
        {
            echo $arr[$i][$j], " ";
        }
        echo "<br>";
    }



    ?>
</body>
</html>