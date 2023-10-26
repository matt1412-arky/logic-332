<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
    $a = 5;
    $b = "3.5";

    echo "Hasil : " . ($a + $b) . "<br>"; // conversi secara implisit / otomatis
    echo "Hasil : " . ($a + (int)$b) . "<br>"; // conversi secara eksplisit / manual
    var_dump($a + $b);
    var_dump($a + (int)$b);
    var_dump(($a + $b) . "");

    $result = strval($a + $b); // Mengkonversi hasil ekspresi ke dalam string
    var_dump($result);
    ?>
</body>

</html>