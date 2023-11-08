<?php
    $vehicle = array(
        array("Mobil", 4, 8),
        array("Truk", 8, 2),
        array("Sepeda Motor", 2, 2)
    );

    echo($vehicle[0][0]. " | " . $vehicle[0][1] . " | " . $vehicle[0][2] . "\n");
    echo($vehicle[1][0]. " | " . $vehicle[1][1] . " | " . $vehicle[1][2] . "\n");
    echo($vehicle[2][0]. " | " . $vehicle[2][1] . " | " . $vehicle[2][2] . "\n");

    $vehicle[0][0] = "Car"; //merubah data dalam array di index [0][0]
    echo($vehicle[0][0]."\n");

    echo("Kendaraan, \tJumlah Roda, \tJumlah Penumpang, \tTahun\n");
    for($i=0; $i<count($vehicle); $i++) {
        for($j=0; $j<count($vehicle[$i]); $j++) {
            echo($vehicle[$i][$j].",\t\t");        
        }
        echo("\n");
    }
    // print_r($vehicle);

    $matrixA = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    for($i=0; $i<count($matrixA); $i++) {
        for($j=0; $j<count($matrixA[$i]); $j++) {
            echo($matrixA[$i][$j]."\t");        
        }
        echo("\n");
    }

    //fungsi untuk membaca array
    function readArray($arr) {
        for($i=0; $i<count($arr); $i++) {
            for($j=0; $j<count($arr[$i]); $j++) {
                echo($arr[$i][$j]."\t");        
            }
            echo("\n");
        } 
    }
    

    $matrixA = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
    
    $matrixB = array(
        array(9, 8, 7),
        array(6, 5, 4),
        array(3, 2, 1)
    );
    
    $matrixC = array(
        array(1, 2),
        array(4, 5),
        array(7, 8)
    );
    
    $matrixE = array(
        array(),
        array(),
        array()
    );

    $matrixD = array(array());
    $matrixD[0][0] = "Blue";
    $matrixD[0][1] = "Red";
    $matrixD[0][2] = "Green";

    readArray($matrixA);
    readArray($matrixB);
    readArray($matrixC);
    readArray($matrixD);

    /*
    buat array
    1, 3, 5, 7
    9, 11, 13, 15
    yang input datanya dilakukan dalam loop
    2baris 4kolom
    */

    $angka = array();

    for($i=0; $i<2; $i++) {
        $baris = [];
        for($j=0; $j<4; $j++) {
            $jumlah = 2 * $i * 4 + 1 + 2 * $j;
            array_push($baris, $jumlah);
        }
        array_push($angka, $baris);
    }
    // print_r($angka);


    // menghitung jumlah dalam array

    for($i=0; $i<count($matrixA); $i++) {
        for($j=0; $j<count($matrixA[$i]); $j++) {
            echo($matrixE[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j]."\t");        
        }
        echo("\n");
    }













    ?>