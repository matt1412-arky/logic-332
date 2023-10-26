<?php
    for ($i=1; $i<=3; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=3; $j++) { //di loop sampai selesai (kolom)
            echo($i . $j . " ");
        }
        echo("\n");
    }
        echo ("\n");

    /* 1 2 3 
       4 5 6
       7 8 9
     */

    $temp = 1;
    for ($i=1; $i<=3; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=3; $j++) { //di loop sampai selesai (kolom)
            echo($temp .  " ");
            $temp++;
        }
        echo("\n");
    }
        echo("\n");
    
    /* 9 8 7
       6 5 4
       3 2 1 
     */

    $temp = 9;
    for ($i=1; $i<=3; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=3; $j++) { //di loop sampai selesai (kolom)
            echo($temp .  " ");
            $temp--;
        }
        echo("\n");
    }
        echo("\n");

    /*
      0 0 0
      0 X 0
      0 0 0 
     */
    for ($i=1; $i<=3; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=3; $j++) { //di loop sampai selesai (kolom)
            if($i == $j)
                echo("X ");
            else
                echo ("0 ");
        }
        echo("\n");
    }
        echo("\n");
    /*
      X Y Y
      0 X Y
      0 0 Y 
     */
    for ($i=1; $i<=3; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=3; $j++) { //di loop sampai selesai (kolom)
            if($i == $j)
                echo("X ");
            elseif ($i < $j)
                echo ("Y ");
            else 
                echo ("0 ");
        }
        echo("\n");
    }
        echo("\n");
    /*
      X Y Y
      Z X Y
      Z Z X 
     */
    for ($i=1; $i<=3; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=3; $j++) { //di loop sampai selesai (kolom)
            if($i == $j)
                echo("X ");
            elseif ($i < $j)
                echo ("Y ");
            else 
                echo ("Z ");
        }
        echo("\n");
    }
        echo ("\n");

    /*
      X Y Y Y Y
      Z X Y Y Y
      Z Z X Y Y
      Z Z Z X Y
      Z Z Z Z Y
     */
    $n =5;
    for ($i=1; $i<=$n; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=$n; $j++) { //di loop sampai selesai (kolom)
            if($i == $j)
                echo("X ");
            elseif ($i < $j)
                echo ("Y ");
            else 
                echo ("Z ");
        }
        echo("\n");
    }
        echo ("\n");

    /*
      X Y *
      Z * Y
      * Z X 
     */
    $n = 3;
    for ($i=1; $i<=3; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=3; $j++) { //di loop sampai selesai (kolom)
            if (($i+$j) == ($n+1))
                echo ("* ");
            elseif($i == $j)
                echo("X ");
            else if ($i < $j)
                echo ("Y ");
            else if ($i > $j)
                echo ("Z ");
            else
                echo(" ");
        }
        echo("\n");
    }
        echo("\n");
    /* Tugas :
        1. Buat matrix dinamis dengan isi bilangan ganjil dari 15 - n 
    */
    $n= 3; 
    $z =15;
    for ($i=1; $i<=$n; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=$n; $j++) { //di loop sampai selesai (kolom)
            echo($z . " ");
            $z+=2;
        }
        echo("\n");
    }
        echo ("\n");

    /* 2. 1 3 5
          2 4 6
          7 9 11
    */  
    $n= 3; 
    $z =1;
    $y= 2;
    for ($i=1; $i<=$n; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=$n; $j++) { //di loop sampai selesai (kolom)
            if (($i % 2) == 0) {
                echo($y . " ");
                $y+=2; 
            } else {
                echo ($z . " ");
                $z+=2;
            }   
            
        }
        echo("\n");
    }
        echo ("\n");

    /* 3. A A A A A
          D       B
          D       B
          D       B
          C C C C C 
     */
    $n=5;
    for ($i=1; $i<=$n; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=$n; $j++) { //di loop sampai selesai (kolom)
            if($i == 1)
                echo("A ");
            elseif ($i == $n) 
                echo("C ");
            elseif ($i > 1 && $j == $n) {
                echo ("B ");
            }
            elseif ($i > 1 && $j == 1) {
                echo ("D ");
            }
            else
                echo ("  ");
        }
        echo("\n");
    }
        echo("\n");

    /*  4. Buat tabel matematika dengan menggunakan matrix    */
    $n=12;
    for ($i=1; $i<=$n; $i++) { // di loop terlebih dahulu (baris)
        for ($j=1; $j<=$n; $j++) { //di loop sampai selesai (kolom)
            $result = $i*$j; 
           echo str_pad($result, 4, ' ', STR_PAD_RIGHT);
        }
        echo("\n");
    }
        echo("\n");







?>