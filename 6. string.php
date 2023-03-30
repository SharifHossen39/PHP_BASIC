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

    $text = "Sharif Hossen";
    $x = strlen($text);

    echo $x;
    echo "<br>";

    echo strlen("Sharif Hossen");
    echo "<br>";

    echo str_word_count("My name is Sharif Hossen");
    echo "<br>";

    echo strrev("Sharif Hossen");
    echo "<br>";

    echo strpos("Sharif Hossen", "Hoss"); //The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
    echo "<br>";
    echo strpos("Sharif Hossen", "Sharp");
    echo "<br>";

    ?>
</body>
</html>