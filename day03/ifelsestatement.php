<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
    /* if else statement digunakan untuk mengendalikan alur eksekusi kode 
    berdasarkan kondisi tertentu. Memungkinkan untuk menjalankan satu blok 
    kode jika kondisi tertentu terpenuhi (if) dan menjalankan blok lain jika
    kondisi tidak terpenuhi (else).
    */

    // Pernyataan if statement
    $nilai = 85; // nilai dapat berupa string, angka atau boolean
    if ($nilai >= 60) {
        echo "Anda lulus!" . "<br>";
    }

    // Pernyataan if else statement
    $nilai = 45; // nilai dapat berupa string, angka atau boolean
    if ($nilai >= 60) {
        echo "Anda lulus!" . "<br>";
    } else {
        echo "Anda tidak lulus!" . "<br>";
    }

    /* Pernyataan if elseif else statement digunakan untuk mengatasi kondisi 
    secara berurutan. Jika kondisi pertama tidak terpenuhi, maka pernyataan 
    elseif berikutnya diperiksa, dan jika tidak ada yang terpenuhi maka blok
    else yang dieksekusi.
    */
    $nilai = rand(0, 100); // nilai dapat berupa string, angka atau boolean
    $grade = "";
    if ($nilai >= 90) {
        $grade = "A";
    } elseif ($nilai >= 80) {
        $grade = "B";
    } elseif ($nilai >= 70) {
        $grade = "C";
    } elseif ($nilai >= 60) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    echo "Nilai Anda: " . $nilai . " Grade: " . $grade;
    ?>
</body>

</html>