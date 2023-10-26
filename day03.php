<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $name = "Endro Muhammad Akbar Wijiantoro";
    /*
    strlen : menghitung jumlah karakter
    */
    echo "Panjang karakter nama :" . strlen($name) . "<br>";

    /*
    st_word_count : menghitung jumlah kata tetapi hanya kata saja tidak termasuk dengan angka dan simbol kecuali -
    */
    echo "Panjang kata nama :" . str_word_count($name) . "<br>";

    /*
    strrev : Membalikan kata
    */
    echo "Pembalik nama :" . strrev($name) . "<br>";

    /*
    strpos : mencari teks didalam string jika ada kecocokan ditemukan fungsi ini mengembalikan posisi karakter pertama yang cocok. jika tidak ada kecocokan yang ditemukan maka akan mengembalikan false/kosong.
    */
    echo "mencari akbar :" . strpos($name, "Akbar") . "<br>";

    /*
    str_replace : Menganti teks dalam string
    */
    echo "Setelah di replace :" . str_replace("Muhammad", "M.", $name) . "<br>";

    // CamelCase
    $wordLengthArr = strlen($name);
    // SnakeCase
    $word_length_arr;
    $a = 5;
    $b = "3.5";
    echo "hasil : " . ($a + $b) . "<br>"; //conversi secara implisit
    echo "hasil : " . ($a + (int)$b) . "<br>"; //conversi secara eksplisit
    var_dump($a + $b) . "<br>";
    var_dump($a + (int)$b) . "<br>";
    var_dump(($a + $b) . " ") . "<br>";
    //var_dump digunakan untuk melihat tipe data yang dipake


    // Math

    echo (number_format((float)pi(), 2, ".")) . "<br>";
    echo "Nilai Minimal " . min(0, 150, 30, 20, -8, -200) . "<br>";
    echo "Nilai Maksimal " . max(0, 150, 30, 20, -8, -200) . "<br>";
    echo "Nilai absolut " . abs(-6.17) . "<br>";
    echo "Nilai bulat " . round(-6.17) . "<br>";
    echo "Nilai acak " . rand(10, 100) . "<br>";

    //Constant tidak bisa dirubah tetapi bisa dikonversi

    define("greeting", "Welcome to xsis academy!");
    define("PI", 3.14);
    define("isiLogin", false);

    echo PI . "<br>";
    echo greeting . "<br>";
    echo (int)isiLogin . "<br>";
    var_dump(isiLogin) . "<br>";
    var_dump((int)PI) . "<br>";

    function myXsis()
    {
        echo greeting . "<br>";
    }
    myXsis();

    // If Else Statement
    // If ...Else..Statement digunakan untuk mengendalikan alur eksekusi kode berdasarkan kondisi tertentu, memungkinkan untuk menjalankan satu blok kode jika kondisi tertentu terpenuhi (if) dan menjalankan blok lain jika kondisi tidak terpenuhi atau else.

    // Pernyataan If Statement
    $nilai = 85;
    if ($nilai >= 65) {
        echo "anda lulus  <br>";
    }

    //Pernyataan If Else Statement
    $nilai1 = 60;
    if ($nilai1 > 60) {
        echo "anda lulus";
    } else {
        echo "Anda Tidak Lulus <br>";
    }

    //Pernyataan If Elseif Else Statement digunakan untuk mengatasi kondisi secara berurutan, jika kondisi pertama tidak terpenuhi , maka pernyataan elseif berikutnya diperiksa, dan jika tidak ada yang terpenuhi maka blok else dijalankan 
    $nilai2 = rand(10, 100);
    if ($nilai2 >= 75) {
        echo "Anda mendapatkan Nilai A <br>";
    } elseif ($nilai2 >= 50) {
        echo "Anda Mendapatkan Nilai B <br>";
    } else {
        echo "Anda Mendapatkan Nilai C <br>";
    }

    // Switch Case
    // switch case adalah konstruksi pengendalian alur yang digunakan untuk memilih satu dari banyak blok kode yang akan dieksekusi berdasarkan nilai ekspresi atau variable tertentu. kondisi ini berguna ketika kita memiliki banyak kasus yang berbeda dan ingin menjalankan kode yang berbeda untuk setiap kasus
    $hari = "senin";
    switch ($hari) {
        case "senin":
            echo "Hari ini adalah Senin";
            break;
        case "selasa":
            echo "Hari ini adalah Selasa";
            break;
        case "rabu":
            echo "Hari ini adalah Rabu";
            break;
        default:
            echo "Hari ini bukan hari kerja";
    }
    ?>
</body>

</html>