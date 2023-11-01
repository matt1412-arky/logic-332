<?php
//Array di dalam array

$rokok = array(
        array("Djarum Coklat Extra", 12 , 15000),
        array("Juara Kretek Teh", 12 , 14000),
        array("Gudang Garam Filter", 12 , 25000)
);

echo ($rokok[0][0]); //Tampilkan data array satu satu
$rokok[0][2]="10000";//Untuk mengubah data array

echo "\n";
echo "\n";

//Untuk mendapatkan data dari array berulang bisa menggunakan fungsi
//Dibawah adalah untuk menampilkan data array secara berulang 
function readArray($rokok){
for($i=0; $i<count($rokok); $i++){
    for($j=0; $j<count($rokok[$i]); $j++){
        echo ($rokok[$i][$j]."\t") ;
    }
    echo "\n";
}}

echo "Merk \t\t" . "Jumlah Btg \t" . "Harga";
echo "\n";
readArray($rokok);


//Percobaan lain
$ganjil=array(array());
$forNum=1;
for($i=0; $i<=1; $i++){
    for($j=0; $j<=3; $j++){
        $ganjil[$i][$j]=$forNum;
        $forNum+=2;
    }
}
print_r($ganjil);
readArray($ganjil);
echo "\n";

$matrixA=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
$matrixB=array(
    array(9,8,7),
    array(6,5,4),
    array(3,2,1)
);
$matrixHasil=array(array());
// $a=0;
// function angka($matrixA){
// for ($i=0; $i<3; $i++){
//     for ($j=0; $j<3; $j++){
//         $matrixA[$i][$j]= $a;
//     }
// }}
// angka($matrixB);
// print_r($matrixA);

for ($i=0; $i<3; $i++){
    for ($j=0; $j<3; $j++){
        $matrixHasil[$i][$j]=$matrixA[$i][$j]+$matrixB[$i][$j];
    }
}
print_r($matrixHasil);
readArray($matrixHasil);
echo "\n";

// List adalah function yang digunakan untuk memasukan data/assignment array kedalam suatu list variabel
$vegetable = array("Tomat", "Timun", "Kentang");
list($a,$b,$c) = $vegetable; //Bisa mengambil semua
echo "Sayur ada $a, $b, $c";
echo "\n";

list($a,,) = $vegetable; //Bisa mengambil satu data
echo "Sayur ada $a";
echo "\n";

array_push($vegetable, "Cabe"); //Array_push fungsi untuk menambahkan data kearray
print_r($vegetable);
echo "\n";


?>