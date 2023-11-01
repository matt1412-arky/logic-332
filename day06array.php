<?php

/*
Array : Sekumpulan struktur data yang dipakai untuk menyimpan sekumpulan nilai dengan tipe data yang sama. sekumpulan nilai tersebut disimpan dalam satu variable.
setiap elemen atau data diidentifikasi dari indeks, indeks biasanya dimulai dari 0;
Array bisa diisi banyak tipe data.
*/


$motor = array("Honda Win100" , "Honda XL125" , "Honda DT100");
echo ("$motor[0] \n");
echo "\n";

for ($i=0; $i<count($motor); $i++){
    echo "$motor[$i] \n";
}
echo "\n";


$btypedata = array("Honda Win100" , "Honda XL125" , "Honda DT100" , 1 , '#', "@dahh", '@dah');
echo ("$btypedata[0] \n");
echo "\n";

for ($i=0; $i<count($btypedata); $i++){
    echo "$btypedata[$i] \n";
}
sort($btypedata);
print_r($btypedata);
echo "\n";

//LATIHAN
$angka = array(99, 5, 7, 31, 85, 10 ,15);
$panjangArray = count($angka);
$a=0;

//1. Mencari Nilai Rata Rata
for ($i=0; $i<$panjangArray; $i++){
    $a+=$angka[$i];
}
$avg= $a/$panjangArray;
echo "$avg ";
echo "\n";


//2. Nilai Tengah Ganjil Genap
sort($angka);
if($panjangArray%2!=0){
    $ntGanjil=($angka[round(($panjangArray/2))-1]);
    echo "$ntGanjil ";
}
else{
    $ntGenap1=($angka[round(($panjangArray/2))-2]);
    $ntGenap2=($angka[round(($panjangArray/2))+1]);
    $ntGenap=($ntGenap1+$ntGenap2)/2;
    echo "$ntGenap ";
}
echo "\n";


//3. Nilai Minimum
sort($angka);
$nMin=($angka[1]);
echo "$nMin ";
echo "\n";


//4. Nilai Maksimum
sort($angka);
$nMax=($angka[$panjangArray-1]);
echo "$nMax ";
echo "\n";


// Penggabungan atau perbandingan dua array agar mendapatkan nilai untuk array selanjutnya
$a=array(1,2,3,4);
$b=array(1,1,1,1);
$c=array();
$ca=count($a);
$ba=count($b);

for($i=0; $i<$ca; $i++){
    $c[$i]=$a[$i]-$b[$i];
}
print_r($c);
echo "\n";

//$x = bilangan ganjil
//$y = bilangan genap
//$z = array penampung hasil dari perkalian bilangan $x dan $y

// $x=array();
// $y=array();
// $z=array();
// $jArray=5;
 
// for($j=0; $j<=1; $j++){
//     $x[$j]=$j+1;
//     $y[$j]=$j+2;
// }
// print_r($x);
// print_r($x);
// for($i=1; $i<=$jArray; $i++){
//     $z[$i]= $x[$i]*$y[$i];
//     $x[$i]+=2;
//     $y[$i]+=2;
// }
// print_r($z);


//Revisi
$x=array();
$y=array();
$z=array();
$jArray=5;
 
for($j=1; $j<=$jArray; $j+=2){
    $x[]=$j;
}
for($j=0; $j<=$jArray; $j+=2){
    $y[]=$j+2;
}
print_r($x);
print_r($y);
for($i=0; $i<=count($x)-1; $i++){
    $z[$i]= $x[$i]*$y[$i];
}
print_r($z);
?>