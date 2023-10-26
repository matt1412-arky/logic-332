<?php

    /* array
        array adalah struktur data yang dipakai untuk menyimpan
        sekumpulan nilai dengan tipe dataya yang sama. Sekumpulan nilai
        tersebut disimpan dalam satu variabel. Setiap elemen diidentifikasi
        oleh indeks, indeks biasanya dimulai dari 0.
    
        variabel = array [4,6,9,5]
        variabel = array ["BMW", "Volvo", "Jaguar", "Bajaj"]
        variabel = array [4.1, 6.4, 9.3 ,5.0]
        */

        $mobil= array("Mercedes", "Jaguar", "Masserati", "Mustang". "Shelby", "Bajaj");
        echo($mobil[2]."\n");
        echo($mobil[4]."\n");
        echo($mobil[5]."\n"); // PHP warning : Undefined array key 5
        echo($mobil[0]."\n");
        
        //untuk mengetahui panjang array
        echo(count($mobil). "\n");

        for($i=0; $i<count($mobil);$i++) { // pemberian batas / panjang array yang hard code
            echo($mobil[$i]. "\n");
        }
        // php bukan pemrograman strong type, jadi bisa berbeda beda tipe data dalam satu array
        $numbers = array (1, 3, 5, 7, 9, "Buldozer");
        for($i=0; $i<count($numbers);$i++) {
            echo($numbers[$i]."\n");
        }
            sort($numbers);
        //    print_r($numbers);
        echo "\n";
        
        $angka = array(99, 5, 7, 31, 85, 10, 15,);
        $panjangArray = count($angka);
        
        //1. mencari nilai rata-rata dari $angka
        $hasil= array_sum($angka)/$panjangArray;
            echo "Nilai rata - rata : ".$hasil. "\n";
        //2. mencari nilai tengah dari $angka
        sort($angka);
        //print_r ($angka);
            if($panjangArray % 2 == 0 ) {
                echo $angka [($panjangArray / 2 )]. "\n";
                echo $angka [(($panjangArray / 2 )- 1)]. "\n";
                $med = ($angka [($panjangArray / 2 )] + $angka [(($panjangArray / 2 )- 1)]) /2 ;
            } else {
                $med = $angka [floor($panjangArray / 2 )];        
            }       
        
            echo "Nilai Tengah : ".$med;
            echo "\n";
        //3. mencari nilai minimum dari $angka
        $min = min($angka);
            echo "Minimal : ".$min. "\n";
        //4. mencari nilai maximum dari $angka
        $max = max($angka);
            echo "Maximal : ".$max. "\n";
        
        echo "\n"; 
        //Penjumlahan 2 Array
        $A = array (1, 1, 1);
        $B = array (1, 2, 3);
        $C = array ();

        for($i = 0; $i < count($A); $i++) {
            $C[$i] = $A[$i] + $B [$i];
        }
        print_r($C);
        
        echo "\n";
        /*
            $X = bilangan ganjil
            $Y = bilangan genap
            $Z = menyimpan hasil perkalian $X dan $Y */
        $X = array ();
        $Y = array ();
        $Z = array ();
        $n = 10;

        for($i= 0; $i<=$n*2; $i++){
            if(($i %2) != 0){
                $Y[]= $i;
            } else {
                $X[]= $i;
            }
        }
        
        for($i = 0; $i < $n; $i++) {
            $Z[] = $X[$i] * $Y [$i];
        }
        print_r($Z);
        
        echo "\n";
?>