<?php

    $vehicle = array(
        array("Mobil", 4, 8),
        array("Truck", 8, 2),
        array("Sepeda Motor", 2,2)
    );
        echo($vehicle[0][0]. " | ". $vehicle[0][1] ." | ". $vehicle[0][2] . "\n");
        echo($vehicle[1][0]. " | ". $vehicle[1][1] ." | ". $vehicle[1][2] . "\n");
        echo($vehicle[2][0]. " | ". $vehicle[1][1] ." | ". $vehicle[2][2] . "\n");

        $vehicle[0][0] = "Car"; //merubah data dalam array di index [0][0] 
        echo($vehicle[0][0]. "\n");

        echo("Kendaraan, \tJumlah Roda, \tJumlah Penumpang, \tTahun\n");
        for($i = 0; $i < count($vehicle); $i++) {
            for($j = 0; $j < count($vehicle[$i]); $j++) {
                echo($vehicle[$i][$j].",\t\t");
            }
            echo("\n");
        }
        //print_r($vehicle);

        // fungsi/procedure untuk membaca array
        function readArray($arr){
            for($i = 0; $i < count($arr); $i++) {
                for($j = 0; $j < count($arr[$i]); $j++){
                    echo ($arr[$i][$j]."\t");
                }
                    echo("\n");
            }
        }

            $matrixA= array(
                array(1, 2, 3),
                array(4, 5, 6),
                array(7, 8, 9)
            );
                echo "\n";

            $matrixB= array(
                array(9, 8, 7),
                array(6, 5, 4),
                array(3, 2, 1)
            );

            $matrixC= array(
                array(9, 8),
                array(6, 5),
                array(3, 2)
            );
                readArray($matrixA);
                readArray($matrixB);
                readArray($matrixC);

                echo "\n";

        $matrixD = array(array());
        $matrixD[0][0] = "Blue";
        $matrixD[0][1] = "Red";
        $matrixD[0][2] = "Green";

           readArray($matrixD);
            echo "\n";

        /* buat array
        //    1, 3, 5, 7
        //    9, 11, 13, 15
            yang di input datanya dilakukan dalam loop
         */
        
        $ar = array();
        $n=1;
        for ($i = 0 ; $i < 2 ; $i++) {
            for ($j = 0 ; $j < 4; $j++){
                $ar[$i][$j] = $n;
                $n+=2;
            }
        }
            readArray($ar);
            echo "\n";

        $matr = array(array());
            for ($i = 0; $i < 3; $i++){
                for ($j = 0; $j < 3; $j++){
                    $matr[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
                    }
                    
                }
              readArray($matr);  
              print_r($matr);
            echo "\n";
        

        /* 
            ***********************************************************************
            PHP list()
            List adalah function yang di gunakan untuk memasukan nilai kedalam list
            dalam sekali operasi
            ***********************************************************************
            */
            $fruit = array("Manggo", "Pineaple", "Orange");
            //$a = $fruit[0];
            //$b = $fruit[1];
            //$c = $fruit[2];
            list ($a, $b, $c) = $fruit;
            echo("Buah buahan didalam array fruit adalah $a, $b, $c\n");

            list($a, ,$c) = $fruit;
            echo("Buah buahan di dalam array fruit adalah $a, $c\n");

            array_push($fruit, "Apple", "Banana");
            //print_r($fruit);


        
?>