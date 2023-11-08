<?php
  //LOOPING
  //for loop  
  /*
  for(init counter; conditional counter; increment counter) {
    code;
  }
  init counter : menentukan nilai/counter/hitungan awal
  conditional counter : menentukan batas akhir dari counter
  expresionList counter : menentukan banyaknya lompatan tiap counter
   */

   for($i=1; $i<=5; $i+=1) {
    echo ("Nilai ke $i = ".$i)."\n";
   }

   for($i=1; $i<=5; $i+=1) {
    echo ("Hello \n");
   }
   
   $x = 100;
   for($i=1; $i<=5; $i+=1) {
    echo ("Nilai x ke $i = ".$x."\n");
    $x = $x + 5;
   }

   //print tahun 2015-2020

   $tahun = 2015;
   for($i=1; $i<=6; $i+=1) {
    echo ("Tahun x ke $i = ".$tahun."\n");
    $tahun = $tahun++;
   }

   //contoh for decrement
   for ($i=5; $i>=1; $i--) {
    echo ("Hello $i... \n");
   }

   //print tahun (5 tahun terakhir)
   for ($i=2023; $i>=2019; $i--) {
    echo ("Tahun $i \n");
   }

   // 1+2+3+4+5 = 15
    $hasil = 0;
    for ($i = 1; $i <= 5; $i++) {
        $hasil += $i;
        echo ("$i + ".$hasil."\n");
    }
    echo "Maka hasilnya = " . $hasil . "\n";

    //print bilangan genap 0 - 20
    for($i=0; $i<=20; $i+=2) {
        echo ("$i \n");
    }

    //print bilangan ganjil 0 - 19
    for($i=1; $i<=20; $i+=2) {
        echo ("$i \n");
    }

    //other ways bilangan ganjil
    for($i=0; $i<=20; $i++) {
        if(($i % 2) !=0) {
            echo("$i = Ganjil\n");
        } else {
            echo("$i = Genap\n");
        }
    }

    //dari tahun 2000 - 2023 print tahun kabisat
    $jumlahKabisat = 0;
    for($i=2000; $i<=2023; $i++) {
        if(($i % 4) == 0) {
            // echo("$i = Tahun Kabisat\n");
            $jumlahKabisat++;
        } 
        // else {
        //     echo("$i \n");
        // }
        $jumlahKabisat == $i;
    }
        echo ("dari tahun 2000 - 2023 ada $jumlahKabisat tahun kabisat\n");

    /*
    
    2001 + 2002 = 4003
    2003 + 2004 = 4007
    2005 + 2006 = 4011

    */
   $tahun = 2001;   
    for($i=1; $i<=5; $i+=2) {
        echo ("$tahun + " . $tahun+1 ." = " . $tahun+($tahun+1) . "\n");
        $tahun+=2;
   }
   
    for($i=2001; $i<=2005; $i+=2) {
        echo ("$i + " . $i+1 ." = " . $i+($i+1) . "\n");
    }

    /*
    Cari nilai rata2 (average) dari suatu bilangan ganjil dari 1-15
    langkah2:
    1. Buat loop dari 1-15
    2. buat variable cari berapa banyak total loop
    3. buat variable untuk menampung sigma (jumlah total) dari bilangan ganjil
    4. buat rumus mencari nilai rata2 di luar loop
    5. print rata2nya
    */
    $total = 0; 
    $sigma = 0;

    for ($i = 1; $i <= 15; $i++) {
        if ($i % 2 != 0) { 
            $total++; 
            $sigma += $i; 
        }
    }
        $average = $sigma / $total;
        echo "Jumlah Ganjil = " . $total . "\n";
        echo "Jumlah total = " . $sigma . "\n";
        echo "Rata-rata dari bilangan ganjil dari 1 hingga 15 adalah = " . $average . "\n";
    
   ?>