<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP</title>
</head>

<body>
    <?php
    $name = "Haider Ali";
    echo "Full Name: " . $name . "<br>";
    echo "Length: " . strlen($name) . "<br>";
    echo "Uppercase: " . strtoupper($name) . "<br>";
    echo "Lowercase: " . strtolower($name) . "<br>";
    echo "Reversed: " . strrev($name) . "<br>";
    echo "Word Count: " . str_word_count($name) . "<br>";
    ?>
</body>

</html>