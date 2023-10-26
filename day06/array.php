<?php
/* Array
    Array adalah struktur data yang dipakai untuk menyimpan sekumpulan nilai dengan tipe data yang sama.
    Sekumpulan nilai tersebut disimpan dalam satu variable. Setiap elemen diidentifikasi dengan oleh indeks,
    indeks biasanya dimulai dari 0;

    variable = array(4, 6, 9, 5)    //numerik
    variable = array("BMW", "Volvo", "Jaguar", "Bajaj")     //string
    variable = array(4.1, 6.4, 9.3, 5.0)    //numerik
*/

    $mobil = array("Mercedes", "Jaguar", "Masserati", "Mustang", "Shelby", "Bajaj");
    echo ($mobil[2]."\n");
    echo ($mobil[4]."\n");
    echo ($mobil[0]."\n");
    echo ($mobil[5]."\n");
    //PHP Warning: Undefined array apabila inputan lebih dari array
    
    //untuk mengetahui panjang array
    echo (count($mobil) . "\n");

    for($i=0; $i<count($mobil); $i++) {    //pemberian batas atau panjang array yang hard code
        echo($mobil[$i]."\n");
    }
    
    $numbers = array(1, 3, 5, 7, 9);
    for($i=0; $i<count($numbers); $i++) {
        echo($numbers[$i]."\n");
    }
    
    //php bukan pemrograman strong type, jadi bisa berbeda tipe data dalam satu array
    $mix = array(1, 3.5, 5, 7, "String", 'Character', "@", '$');
    for($i=0; $i<count($mix); $i++) {
        echo($mix[$i]."\n");
    }

    // sort($mix);
    // print_r($mix);

    $angka = array(99, 5, 7, 31, 85, 10, 15);
    $panjangArray = count($angka);

    /*  1. mencari nilai rata2 dari $angka
        2. mencari nilai tengah dari $angka
        3. mencari nilai minimum dari $angka
        4. mencari nilai maksimum dari $angka
    */

    // No 1
    $total = array_sum($angka);
    $rata_rata = $total / $panjangArray;
    echo ("1. Rata-rata: " . $rata_rata);
    echo ("\n");

    // No 2
    sort($angka);
    if ($panjangArray % 2 == 0) {
        $tengah1 = $angka[($panjangArray / 2) - 1];
        $tengah2 = $angka[$panjangArray / 2];
        $nilaiTengah = ($tengah1 + $tengah2) / 2;
    } else {
        $nilaiTengah = $angka[($panjangArray - 1) / 2];
    }
    echo "2. Nilai Tengah: " . $nilaiTengah;
    // echo ("\n");
    // echo print_r($angka);
    echo ("\n");

    // No 3
    $min = min($angka);
    echo ("3. Nilai Minimum: " . $min);
    echo ("\n");
    
    // No 4
    $max = max($angka);
    echo ("4. Nilai Maximum: " . $max);
    echo ("\n");

    
    // Penjumlahan 2 Array
    $a = array(1, 1, 1);
    $b = array(1, 2, 3);
    $c = array();
    
    for($i = 0; $i < count($a); $i++) {
        $c[$i] = $a[$i] + $b[$i];
    }
    // print_r($c);


    /*
        $x = bilangan ganjil
        $y = bilangan genap
        $z = menyimpan hasil perkalian $x dan $y
    */

    $x = array();
    $y = array();
    $z = array();

    for($i = 1; $i <= 5; $i+=2) {
        $x[] = $i;
    }
    
    for($i = 2; $i <= 6; $i+=2) {
        $y[] = $i;
    }

    print_r($x);
    print_r($y);

    for($i = 0; $i <count($x); $i++) {
        $z[$i] = $x[$i] * $y[$i];
    }

    print_r($z);

    /*
    $ganjil = array();
    $genap = array();
    $kali = array();
    
    for($i = 1; $i <= 10; $i+=2) {
        $ganjil[] = $i;
    }
    for($j = 0; $j <= 10; $j+=2) {
        $genap[] = $j;
    }
    for($k = 1; $k < count($ganjil); $k++) {
        for($l = 0; $l < count($genap); $l++) {
            $kali[$k] = $ganjil[$i] * $genap[$l];
        }
    }
    print_r($ganjil);
    print_r($genap);
    print_r($kali);
    */





    // if ($panjangArray % 2 == 0) {
    //     $tengah1 = $angka[($panjangArray / 2) - 1];
    //     $tengah2 = $angka[$panjangArray / 2];
    //     $nilaiTengah = ($tengah1 + $tengah2) / 2;
    // } else {
    //     $nilaiTengah = $angka[($panjangArray - 1) / 2];
    // }
?>