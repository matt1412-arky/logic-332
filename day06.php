<?php
    
    /* While -- melakukan loop sambil check kondisi*/

    $i= 1;
    while($i<=5){
        echo ($i . ",");
        $i++;
    }
        echo("\n");

    echo("\n");

    /* Do While -- melakukan loop terlebih dahulu setelah itu check kondisi*/

    $i=1;
    do {
        echo ($i . ",");
        $i++;
    } while($i<=5);
        echo("\n");
    echo("\n");

    $input = readline("Masukan Data : ");
    echo($input. "\n");
    echo("\n");

    $key= "";
    while($key != "x"){
        $key = readline("Masukan Data : ");
        echo($key. "\n");
    }
        echo("Exited \n");
    echo("\n");

    $menu= "";
    while($menu != "5"){
        echo("1. Nasi Goreng\n");
        echo("2. Mie Goreng\n");
        echo("3. Soto Ayam\n");
        echo("4. Sate Madura\n");
        echo("5. Selesai\n");

        $menu = readline("Pilih Menu : ");
        
        $item= "";
        switch($menu){
            case 1: $item = "Nasi Goreng"; break;
            case 2: $item = "Mie Goreng"; break;
            case 3: $item = "Soto Ayam"; break;
            case 4: $item = "Sate Madura"; break;
            case 5: $item = "Selesai"; break;
            default:$item = "Pilihan ada tidak sesuai dengan menu";break;

        }
        echo("Anda memilih $item. \n");
    }
        echo("Selesai \n");
    
    echo ("\n");
    
    /* Nested While */

    $i= 1;
    while($i <= 3){
        $j=1;
        while($j <= 3){
            echo($i . $j . " ");
            $j++;
        }
        echo("\n");
        $i++;
    }
    echo("\n");

    /*
    
     ----1
     ---2-
     --3--
     -4---
     5----

     menggungakan while

    */
    $i= 1;
    $n= 5;
    while($i <= $n){
        $j=1;
        while($j <= $n){
            if(($i+$j) == ($n+1))
            echo($i. " ");
            else {
                echo ("- ");
            }
            $j++;
        }
        echo("\n");
        $i++;
    }
    echo("\n");

    /*
        2  5  8  3  11 14 17
        3                 3
        53                20
        50                23
        47                26
        3                 3
        44 41 38 3 35 32 29

    */
    $i=1;
    $inputa=2;
    $inputb=53;
    $tambah=3;
    $n=7;
    while($i <= $n){
        $j=1;
        while($j <= $n){
            if((($j == $tambah+1) && ($i == 1)) || (($j == $tambah+1) &&($i == $n))) {
                echo str_pad("$tambah",3). " ";
            } else if((($i == $tambah-1) && ($j == 1)) || (($i == $tambah-1) && ($j == $n))) {
                echo str_pad("$tambah", 3). " ";
            } else if((($i == $tambah*2) && ($j == 1)) || (($i == $tambah*2) && ($j == $n))) {
                echo str_pad("$tambah", 3). " ";
            } elseif($i == 1){
                echo str_pad("$inputa", 3). " ";
                $inputa+=3;
            } elseif($i > 1 && $j == $n){
                echo str_pad("$inputa", 3). " ";
                $inputa+=3;
            } elseif($i > 1 && $j == 1){
                echo str_pad("$inputb", 3). " ";
                $inputb-=3;
            } elseif($i == $n){
                echo str_pad("$inputb", 3). " ";
                $inputb-=3;
            }
            else {
                echo str_pad (" ", 3). " ";
            }
            $j++;
        }
        $i++;
        echo("\n");
    }
    echo("\n");







?>