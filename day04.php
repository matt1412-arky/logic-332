<?php
    // LOOPING
    // for loop
    /*
        for(init counter; conditional counter; expresionList counter){
            code;
        }    
        init counter : menentukan nilai/counter/hitung awal
        conditional counter : menentukan batas akhir dari counter
        expresionList : menentukan banyaknya lompatan tiap counter
    */
        for($i = 1; $i <= 5; $i += 1) {
            echo("Nilai ke $i = ".$i."\n");
        }

        for($i = 1; $i <= 5; $i += 1) {
            echo("Hello ...\n");
        }
        
        $x = 100;
        for($i = 1; $i <= 5; $i += 1) { // i = i + 1;
            echo ("Nilai x ke $i = ".$x."\n");
            $x = $x + 5;
        }

    // print tahun 2015 - 2020
        for($i = 2015; $i <= 2020; $i ++){
            echo($i."\n");
        }
    // print tahun (5 tahun terakhir) versi 1
        for($i = 2023; $i >= 2019; $i --){
            echo($i."\n");
        }
    // print tahun (5 tahun terakhir) versi 2
        $tahun = 2023;    
        for($i = 5; $i >= 1; $i --){
            echo("Tahun $tahun...\n");
            $tahun--;
        }

    // 1 + 2 + 3 + 4 + 5 = 15
        $hasil = 0;
        for($i = 1; $i <= 5; $i ++){
            $hasil += $i;
        }
        echo("1 + 2 + 3 + 4 + 5 = $hasil...\n");
    // 1 + 2 + 3 + 4 + 5 = 15 versi 2
        $hasil = 0;
        for($i = 1; $i <= 5; $i ++){
            $hasil += $i;
            echo ("$i : ".$hasil. "\n");
        }
        echo("1 + 2 + 3 + 4 + 5 = $hasil...\n");
    
    // print bilangan genap 0-20
        for($i=0; $i<=20; $i+=2){
            echo("$i \n");
        }
    // print bilangan ganji
        for($i=1; $i<=20; $i+=2){
            echo("$i \n");
        }
    // print bilangan ganjil/genap dengan cara lain
        for($i=0; $i<=20;$i++){
            if(($i %2) != 0){
                echo ("$i = Ganjil\n");
            } else {
                echo("$i = Genap \n");
            }
            
        }
    // dari tahun 2000 - 2023 print tahun kabisat
        for($i = 2000; $i <=2023; $i+=4){
            echo ("$i Tahun Kabisat\n");
        }
    // dari tahun 2000 - 2023 print tahun kabisat dengan modulus
        for($i = 2000; $i <=2023; $i++){
            if (($i % 4) == 0){
                echo ("$i Tahun Kabisat\n");
            } else {
                echo ("$i Bukan Tahun Kabisat\n");
            }    
        }
    // menghitung ada berapa tahun kabisat dari tahun 2000 - 2023
        $tahunAwal= 2000;
        $tahunAkhir= 2023;
        $count=0;
        for($i = $tahunAwal; $i <=$tahunAkhir; $i++){
            if (($i % 4) == 0){
                $count++;
            }    
        }  
            echo("Dari Tahun $tahunAwal - $tahunAkhir ada $count Tahun Kabisat ");
    
  /* 2001 + 2002 = 4003
     2003 + 2004 = 4007
     2005 + 2006 = 4011
     versi pa bowo 
     */ 
        $tahun1 = 2001;
        for($i=1; $i<=5; $i+=2){
            echo ("$tahun1 + ". $tahun1+1 ."=". $tahun1 + ($tahun1 + 1)."\n");
            $tahun1+=2;
        }
        
        for($i=2001; $i<=2005; $i+=2) {
            echo("$i + ". $i+1 . "=" . $i+($i+1)."\n");
        }
        
        for($i=1; $i<=5; $i+=2) {
            echo("$i + ". $i+1 . "=". $i+($i+1)."\n");
        }

    /**Carilah nilai rata rata (average) dari suatu bilangan ganjil dari 1 - 15
     * langkah - langkah
     * 1. Buat loop dari 1 - 15
     * 2. Buat variabel untuk cari berapa banyak total loop
     * 3. buat variabel untuk menampung sigma (jumlah total) dari bilangan ganjil
     * 4. buat rumus untuk mencari nilai rata rata di luar loop
     * 5. print rata ratanya
     */
        $tambah=0;
        $loop=0;
        for($i = 1; $i <= 15; $i ++) {
            if (($i % 2) != 0){
                $tambah+= $i;
                $loop++;
                echo("Nilai loop $i = ".$tambah."\n");
            }    
        }
        $avg = $tambah/$loop;
        echo("Nilai rata- rata dari 1- 15 adalah $avg"."\n")








?>