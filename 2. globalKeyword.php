<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bangladesh</h1>
    <?php 

    $x = 10;
    $y = 20;

    function myTest()
    {
        global $x, $y;

        $x += $y;
    }

    myTest();

    echo $x;
    echo "<br>";

    function myTest2()
    {
        $GLOBALS['x'] += $GLOBALS['y'];
    }

    myTest2();
    echo $x;


    ?>
</body>
</html>