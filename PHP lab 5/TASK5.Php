<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>

<body>
    <?php
    function analyzeNumber($num)
    {
        if ($num > 0) {
            return "Positive Number";
        } elseif ($num < 0) {
            return "Negative Number";
        } else {
            return "Zero";
        }
    }
    echo "15: " . analyzeNumber(15);
    echo "<br>";
    echo "-7: " . analyzeNumber(-7);
    echo "<br>";
    echo "0: " . analyzeNumber(0);
    ?>
</body>
</html>