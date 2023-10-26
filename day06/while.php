<?php

    // while selama $i lebih kecil dari 5 maka akan menjumlahkan sampai 5
    // while melakukan loop sambil cek kondisi

    $i=1;
    while($i<=5){
        echo ($i.",");
        $i++;
    }
    echo ("\n");
    
    // do-while melakukan loop terlebih dahulu setelah itu cek kondisi
    
    $i=1;
    do {
        echo ($i.",");
        $i++;
    } while($i<=5);
    echo ("\n\n");

    // $input = readline("Masukan data : ");
    // echo ($input. "\n");


    // $key = "";
    // while($key != "x") {
    //     $key = readline("Your Key : ");
    //     echo ($key . "\n");
    // }
    // echo ("Exited /n");
    
    
    
    // $menu = "";
    // while($menu != "5") {
    //     echo ("1. Nasi Goreng\n");
    //     echo ("2. Mie Ayam\n");
    //     echo ("3. Soto Ayam\n");
    //     echo ("4. Mie Goreng\n");
    //     echo ("5. Selesai\n");

    //     $menu = readline("Pilih Menu : ");

    //     $item = "";
    //     switch($menu) {
    //         case 1 : $item = "Nasi Goreng";
    //         break;
    //         case 2 : $item = "Mie Ayam";
    //         break;
    //         case 3 : $item = "Soto Ayam";
    //         break;
    //         case 4 : $item = "Mie Goreng";
    //         break;
    //         case 5 : $item = "Selesai";
    //         break;
    //         default : $item = "Tidak Sesuai Menu";
    //         break;
    //     }
    //     echo ("Anda memilih $item \n");
    // }
    // echo ("Selesai\n");



    //nested while
    $i=1;
    while($i <= 3) {
        $j = 1;
        while($j <= 3) {
            echo ($i . $j . " ");
            $j++;
        }
        echo ("\n");
        $i++;
    }
    echo ("\n");


    /*
    ----1
    ---2-
    --3--
    -4---
    5----
    */
    
    $n = 5;
    $c = 1;
    $i = 1;
    while ($i <= $n) {
        $j = 1;
        while ($j <= $n) {
            if ($i+$j == $n+1) {
                echo $c;
                $c++;
            } else {
                echo "-";
            }
            $j++;
        }
        echo "\n";
        $i++;
    }
    echo "\n";


    /*
    2  5  8  3 11 14 17
    3                 3
    53               20
    50               23
    47               26
    3                 3
    44 41 38 3 35 32 29
    */
    //----------------------------- ilham ---------------------------
    /*
    $a = 2;
    $b = 53;
    $ganjil = 3;
    $mx = 7;
    $i = 1;
    while($i <= $mx) {
        $j = 1;
        while($j <= $mx) {
            if((($j == $ganjil + 1) && ($i == 1)) || (($j == $ganjil + 1) && ($i == $mx))) {
                echo ("$ganjil ");
            }
            elseif((($i == $ganjil - 1) && ($j == 1)) || (($i == $ganjil - 1) && ($j == $mx))) {
                echo ("$ganjil ");
            }
            elseif((($i == $ganjil * 2) && ($j == 1)) || (($i == $ganjil * 2) && ($j == $mx))) {
                echo ("$ganjil ");
            }
            elseif($i == 1) {
                echo ("$a ");
                $a+=3;
            }
            elseif($i > 1 && $j == $mx) {
                echo ("$a ");
                $b+=3;
            }
            elseif($i > 1 && $j == 1) {
                echo ("$b ");
                $b-=3;
            }
            elseif($i == $mx) {
                echo ("$b ");
                $b-=3;
            }
            else {
                echo "  ";
            }
            $j++;
        }
        $i++;
        echo ("\n");
    }
    echo ("\n");
    */

    //---------------------- tata -----------------------

    function sum_3($x, $n) {
        for($i = 1; $i <= (($n * 2) + ($n-2 * 2)); $i++) {
            $x+3;
        }
        return $x;
    }

    $i = 1;
    $x = 1;
    $n = 5;
    $x = 2;
    $mid = round($n/2);
    $max = sum_3($x, $n);

    while($i <= $n) {
        $j = 1;
        while($j <= $n) {
            switch($i) {
                case $j == $mid && ($i == 1 || $i == $n):
                    echo ("3 ");
                    break;
                case $i == 2 && ($i > $j || $j == $n):
                    echo ("3 ");
                    break;

            }
        }
    }

?>