<?php
    /*
        Soal 01
            N => 7
        1 3 5 7 9 11 13
    */

    for($i=1; $i<=13; $i+=2){
        echo ("$i ");
    }
        echo "\n";
    /*
        Soal 03 
            N => 7
        1 4 7 10 13 16 19
     */
    for($i=1; $i<=19; $i+=3){
        echo ("$i ");
    }
        echo "\n";

    /*
        Soal 04
            N => 7
        1 5 9 13 17 21 25
    */
    for($i=1; $i<=25; $i+=4){
        echo ("$i ");
    }
        echo "\n";

    /*
        Soal 05
            N => 7
        1 5 * 9 13 * 17
    */
    $n=1;
    for($i=1; $i<=17;$i+=4){
        echo ("$i ");
            if(($n % 2) == 0){
                echo (" * ");
            }
            $n++;
    }
        echo "\n";
    /*
        Soal 06
            N => 7
        1 5 * 13 17 * 25
    */
    $n=1;
    for($i=1; $i<=25;$i+=4){
            if(($n % 3) == 0){
                echo (" * ");
            } else {
                echo ("$i ");
            }
            $n++;
    }
        echo "\n";
    /*
        Soal 08
            N => 7
        3 9 27 81 243 729 2187
    */
    for($i=3; $i<=2187; $i*=3){
        echo ("$i ");
    }
        echo "\n";
    /*
        Soal 09
            N => 7
        4 16 * 64 256 * 1024
    */
    $n=1;
    for($i=4; $i<=1024;$i*=4){
        echo ("$i ");
            if(($n %2) == 0){
                echo (" * ");
            } 
            $n++;
    }
        echo "\n";
    /*
        Soal 10
            N => 7
        3 9 27 xxx 243 729 2187
    */
    $n=1;
    for($i=3; $i<=2187;$i*=3){

            if(($n %4) == 0){
                echo (" xxx ");
            } else {
                echo ("$i ");
            }

            $n++;
    }
        echo "\n";
        
?>