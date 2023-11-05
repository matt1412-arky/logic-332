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
    for ($i = 1; $i <= 5; $i += 1) {
        echo ("nilai ke $i = " . $i . "\n");
    }
    
    for ($i = 1; $i <= 5; $i += 2) {
        echo ("Hello \n");
    }
    $x = 100;
    for ($i = 1; $i <= 5; $i++) {
        echo ("nilai x ke $i = " . $x . "\n");
        $x = $x + 5;
    }
    
    for ($i = 2015; $i <= 2020; $i += 1) {
        echo ("Tahun $i " . "\n");
    }
    
    for ($i = 2023; $i >= 2019; $i -= 1) {
        echo ("Tahun $i " . "\n");
    }
    
    
    $awal = 0;
    $akhir = 10;
    for ($i = 1; $i <= $akhir; $i++) {
        echo $i;
        if ($i < $akhir) {
            echo " + ";
        }
        $awal += $i;
    }
    
    echo " = $awal \n";
    
    // other ways bilangan ganjil
    for ($i = 1; $i <= 20; $i += 2) {
        if (($i % 2) != 0) {
            echo ("$i = Ganjil \n");
        } else {
            echo ("$i = Genap \n");
        }
    }
    $x = 0;
    for ($i = 2000; $i <= 2023; $i++) {
        if (($i % 4) == 0) {
            $x++;
            echo ("$i = Tahun Kabisat ke $x \n");
        }
    }
    
    for ($tahun = 2001; $tahun <= 2023; $tahun += 2) {
        $tahunSelanjutnya = $tahun + 1;
        $hasil = $tahun + $tahunSelanjutnya;
        echo $tahun . " + " . $tahunSelanjutnya . " = " . $hasil . "\n";
    }
    
    /*
    1. Buat loop dari 1 -15
    2. buat variable untuk mencari berapa banyak total loop
    3. buat variable untuk menampung sigma (jumlah total) dari bilangan ganjil
    4. buatlah rumus untuk menacri nilai rata - rata di luar loop
    5. print rata - rata nya
    
    
    $totalLoop = 0;
    $sigmaGanjil = 0;
    
    for ($i = 1; $i <= 15; $i++) {
        $totalLoop++;
        
        if ($i % 2 != 0) {
            $sigmaGanjil += $i;
        }
    }
    
    $rataRata = $sigmaGanjil / $totalLoop;
    
    echo "Rata-rata dari bilangan ganjil dari 1 hingga 15 adalah: " . $rataRata;
    
    
     */
    
    $totalLoop = 0;
    $sigmaGanjil = 0;
    $totalganjil = 0;
    for ($i = 1; $i <= 15; $i++) {
        if (($i % 2) != 0) {
            $totalLoop++;
            $sigmaGanjil += $i;
        }
    }
    
    $rataRata = $sigmaGanjil / $totalLoop;
    echo "total loopnya adalah : $totalLoop \n";
    echo "total bilangan ganjil : $sigmaGanjil \n";
    echo "Rata-rata dari bilangan ganjil dari 1 hingga 15 adalah: " . $rataRata;
    ?>