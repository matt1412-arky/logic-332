<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
    /* Tukar nilai a menjadi nilai b dan sebaliknya.
    Constraint : tidak boleh menambahkan variable apapun itu. */
    $a = 5;
    $b = 3;

    // Logic
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    echo "Nilai a : " . $a . "<br>";
    echo "Nilai b : " . $b . "<br>";
    ?>
</body>

</html>