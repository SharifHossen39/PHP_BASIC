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

    function simple($x, $y)
    {
        return $x + $y;
    }
    echo simple(100, 20.50);
    echo "<br>";

    function myFunction(int $x, int $y)
    {
        echo $x + $y;
    }
    myFunction(10,30);
    echo "<br>";

    function newFunction(float $x, float $y) : int{

        return (int) ($x + $y);
    }

    echo newFunction(10.50,20.60);

    ?>
</body>
</html>