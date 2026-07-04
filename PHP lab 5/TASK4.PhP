<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP</title>
</head>

<body>
    <?php
    $celsius = 35;
    $kelvin = $celsius + 273.15;
    $newCelsius = $celsius + 8;
    $fahrenheit = ($newCelsius * 9 / 5) + 32;
    $difference = $newCelsius - $celsius;
    $roundedFahrenheit = round($fahrenheit);
    echo "Original Temperature: " . $celsius . "°C<br>";
    echo "Temperature in Kelvin: " . $kelvin . " K<br>";
    echo "New Temperature in Celsius: " . $newCelsius . "°C<br>";
    echo "Temperature in Fahrenheit: " . $fahrenheit . "°F<br>";
    echo "Difference in Celsius: " . $difference . "°C<br>";
    echo "Rounded Fahrenheit: " . $roundedFahrenheit . "°F<br>";
    ?>
</body>

</html>