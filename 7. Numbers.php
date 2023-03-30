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

    $x = 120;

    echo var_dump(is_int($x));
    echo "<br>";

    echo PHP_INT_MAX;
    echo "<br>";

    $text = "123.45";
    $num = (int) $text;
    echo $num;


    ?>
</body>
</html>