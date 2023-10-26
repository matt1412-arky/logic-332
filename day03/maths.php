<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
    echo "Nilai pi : " . number_format(pi(), 2) . "<br>";

    // Menghitung Nilai minimal
    $numbers = [5, 10, 3, 8, 2];
    $minValue = min($numbers);
    echo "Nilai minimal: " . $minValue . "<br>";

    // Menghitung Nilai maksimal
    $maxValue = max($numbers);
    echo "Nilai maksimal: " . $maxValue . "<br>";

    // Nilai Absolut
    $number = -5;
    $absoluteValue = abs($number);
    echo "Nilai absolut: " . $absoluteValue . "<br>";

    // Membulatkan nilai / angka
    $number = 3.7;
    $roundedNumber = round($number);
    echo "Rounded number: " . $roundedNumber . "<br>";

    // Membuat nilai acak
    $minValue = 1;
    $maxValue = 100;
    $randomNumber = rand($minValue, $maxValue);
    echo "Random number: " . $randomNumber . "<br>";
    ?>
</body>

</html>