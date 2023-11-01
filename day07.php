<?php

$vehicle = [["mobil", 4, 8],["Truk", 8, 2],["Motor", 2, 2]];

echo ($vehicle[0][0]."|".$vehicle[0][1]."|".$vehicle[0][2]."\n");
echo ($vehicle[1][0]."|".$vehicle[1][1]."|".$vehicle[1][2]."\n");
echo ($vehicle[2][0]."|".$vehicle[2][1]."|".$vehicle[2][2]."\n");


$vehicle[0][0] = "Car"; // merubah data dalam array di index[0][0]
echo ($vehicle[0][0]."|".$vehicle[0][1]."|".$vehicle[0][2]."\n");

echo ("Kendaraan \tJumlah Roda \tJml Penumpang \tTahun \n");
for($i=0;$i<count($vehicle);$i++){
    for($j=0;$j<count($vehicle[$i]);$j++){
        echo ($vehicle[$i][$j]."\t\t");
    }
    echo "\n";
}

echo "\n";


function readArray($arr){
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
            echo($arr)[$i][$j]."\t";
        }
        echo "\n";
    }
}

$matrixA=[[1,2,3],[4, 5,6],[7, 8, 9]];
$matrixB=[[9,8,7],[6, 5,4],[3, 2, 1]];
$matrixC=[[9,8],[6, 5],[4,6]];

readArray($matrixA);
echo "\n";
readArray($matrixB);
echo "\n";
readArray($matrixC);
echo "\n";

$matrixD=[[]];
// $matrixD[0]="Warna";
$matrixD[0][0]="Red";
$matrixD[1][0]="Merah";
$matrixD[0][1]="Blue";
$matrixD[0][2]="Green";

readArray($matrixD);

echo "\n";



// function nilai1($nilai){
    $nilai=1;
    $numbers1=[];
    for($i=0;$i<2;$i++){
            for($j=0;$j<4;$j++){
            $numbers1[$i][$j]=$nilai;
            $nilai+=2;
            }
        }

readArray($numbers1);
print_r($numbers1);
echo "\n";
echo "\n";


for($i=0;$i<count($matrixB);$i++){
    for($j=0;$j<count($matrixB[$i]);$j++){
    $matrixHasil[$i][$j]=$matrixA[$i][$j]+$matrixB[$i][$j];
    }
}

readArray($matrixHasil);



/*
PHP list() function
list adalah function yang digunakan untuk memasukan nilai kedalam list
dalam sekali operasi
*/

$fruit = ["Manggo", "Pineaple", "Orange"];
//$a = fruit[0];
//$b = fruit[1];
//$c = fruit[2];
list($a, $b, $c) = $fruit; //mempermudah assigment isi dari array ke variabel
echo ("Buah buahan di dalam array fruit adalah $a, $b, $c \n");


list($a, , $c) = $fruit; 
echo ("Buah buahan di dalam array fruit adalah $a, $c \n");

// array_push($fruit, "apple", "banana");
// print_r ($fuirt);

?>