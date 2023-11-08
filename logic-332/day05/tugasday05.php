<?php
    /*
    Soal 01   N => 7
    1   3   5   7   9   11   13
    */
    echo "No 1  = ";
    for($i=1; $i<=13; $i+=2) {
        echo $i." ";
    }
    echo "\n";

    /*
    Soal 03   N => 7
    1   4   7   10   13   16   19
    */
    echo "No 3  = ";
    for($i=1; $i<=19; $i+=3) {
        echo $i." ";
    }
    echo "\n";
    
    /*
    Soal 04   N => 7
    1   5   9   13   17   21   25
    */
    echo "No 4  = ";
    for($i=1; $i<=25; $i+=4) {
        echo $i." ";
    }
    echo "\n";
    
    /*
    Soal 05  N => 7
    1   5   *   9   13   *   17
    */
    echo "No 5  = ";
    $n=1;
    for ($i = 1; $i <= 17; $i+=4) {
        echo "$i ";
        if (($n % 2) == 0) {
            echo "* ";
        }
        $n++;
    }
    echo "\n";
    
    /*
    Soal 06   N => 7
    1   5   *   13   17   *   25
    */
    echo "No 6  = ";
    $n=0;
    for ($i = 1; $i <= 25; $i+=4) {
        echo "$i ";
        $n++;
        if (($n % 2) == 0) {
            echo "* ";
            $i+=4;
        }
    }
    echo "\n";
    
    /*
    Soal 08   N => 7
    3   9   27   81   243   729   2187
    */
    echo "No 8  = ";
    for ($i = 3; $i <= 2187; $i*=3) {
        echo "$i ";
    }
    echo "\n";
    
    /*
    Soal 09   N => 7
    4   16   *   64   256   *   1024
    */
    echo "No 9  = ";
    $n=0;
    for ($i = 4; $i <= 1024; $i*=4) {
        echo "$i ";
        $n++;
        if (($n % 2) == 0) {
            echo "* ";
        }
    }
    echo "\n";
    
    /*
    Soal 10   N => 7
    3   9   27   xxx   243   729   2187
    */
    echo "No 10 = ";
    $n=0;
    for ($i = 3; $i <= 2187; $i*=3) {
        $n++;
        if (($n % 4) == 0) {
            echo "xxx ";
            $i*=3;
        }
        echo "$i ";
    }
    echo "\n";



?>