<?php 

/* array

array adalah struktur data yang dipakai untuk menyimpan sekumpulan nilai
dengan tipe data yang sama. Sekumpulan nilai tersebut disimpan dalam satu 
variabel. Setiap elemen diidentifikasi oleh indeks, indeks biasanya dimulai dari 0;

variabel = array(4, 6, 9, 5)
variabel = array("BMW", "Volvo", "Jaguar", "Bajaj")
variabel = array(4.1, 6.4, 9.3, 5.0)

*/

$cc="Honda";
$mobil = array("Marcedes", $cc, "Jaguar", "Masserati", "Mustang", "Shelby");
// echo ($mobil[2]."\n");
// echo ($mobil[3]."\n");
// echo ($mobil[1]."\n");
// echo ($mobil[0]."\n");
for($i=0; $i<count($mobil); $i++){
    echo ($mobil[$i] . "\n");
}

//php bukan pemograman strong type, jadi bisa berbeda type data dalam satu array
$angka=[1, 3, 5.6, 7, "Buldozer",'@','&', '$'];
for($i=0; $i<count($angka); $i++){
    echo ($angka[$i] . "\n");
}
sort($angka);
print_r($angka);
echo "\n";


$angka=[99, 5, 7, 31, 85, 10, 15];
sort($angka);
print_r($angka);
$panjangArray=count($angka);
//1. Mencari nilai rata2 dari angka
//2. Mencari nilai tengah dari angka
//3. Mencari nilai minimum dari angka
//4. Mencari nilai maksimum dari angka

$rata=(array_sum($angka) / $panjangArray);
if($panjangArray % 2 == 0 ){
    $mid1=($angka[($panjangArray / 2) - 1]) ;
    $mid2=($angka[$panjangArray / 2]);
    $median=($mid1 + $mid2) / 2;
}
else{
    $median=($angka[$panjangArray/2]);
}

$min=min($angka);
$max=max($angka);

echo ("Rata-rata = " . $rata . "\n");
echo ("Median = " . $median . "\n");
echo ("Minimum = " . $min . "\n");
echo ("Maksimum = " . $max . "\n");


//Penjumlahan 2 Array
$A = [1, 1, 1];
$B = [1, 2, 3];
$C = [];

for($i=0;$i<count($A);$i++){
    $C[$i]=$A[$i]+$B[$i];
}
print_r($C);

//$X = bilangan ganjil
//$Y = bilangan genap
//$z = menyimpan hasil perkalian $X dan $Y


for($i = 1; $i<=5; $i+=2){
        $X[]=$i;
}

for($i = 2; $i<=8; $i+=2){
        $Y[]=$i;
}


print_r($X) . "\n";
print_r($Y) . "\n";


// echo ganjil($X[]);

for($i=0;$i<count($X);$i++){
    $Z[$i]=$Y[$i]*$X[$i];
}
print_r($Z);


?>