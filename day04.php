<?php
// Looping
// for looping
/* 
for(init counter; conditional counter; expresionlist counter){
    code
}
init counter : menentukan nilai/counter/hitungan awal
conditional counter : menentukan batas akhir dari counter
expreionalist counter : menentukan banyaknya lompatan tiap counter
*/

for ($i = 1; $i <= 5; $i += 1) {
    echo ("nilai ke $i = " . $i . "\n");
}

for ($i = 1; $i <= 5; $i += 2) {
    echo ("Hello \n");
}
$x = 100;
for ($i = 1; $i <= 5; $i++) {
    echo ("nilai x ke $i = " . $x . "\n");
    $x = $x + 5;
}

for ($i = 2015; $i <= 2020; $i += 1) {
    echo ("Tahun $i " . "\n");
}

for ($i = 2023; $i >= 2019; $i -= 1) {
    echo ("Tahun $i " . "\n");
}


$awal = 0;
$akhir = 10;
for ($i = 1; $i <= $akhir; $i++) {
    echo $i;
    if ($i < $akhir) {
        echo " + ";
    }
    $awal += $i;
}

echo " = $awal \n";

// other ways bilangan ganjil
for ($i = 1; $i <= 20; $i += 2) {
    if (($i % 2) != 0) {
        echo ("$i = Ganjil \n");
    } else {
        echo ("$i = Genap \n");
    }
}
$x = 0;
for ($i = 2000; $i <= 2023; $i++) {
    if (($i % 4) == 0) {
        $x++;
        echo ("$i = Tahun Kabisat ke $x \n");
    }
}

for ($tahun = 2001; $tahun <= 2023; $tahun += 2) {
    $tahunSelanjutnya = $tahun + 1;
    $hasil = $tahun + $tahunSelanjutnya;
    echo $tahun . " + " . $tahunSelanjutnya . " = " . $hasil . "\n";
}

/*
1. Buat loop dari 1 -15
2. buat variable untuk mencari berapa banyak total loop
3. buat variable untuk menampung sigma (jumlah total) dari bilangan ganjil
4. buatlah rumus untuk menacri nilai rata - rata di luar loop
5. print rata - rata nya


$totalLoop = 0;
$sigmaGanjil = 0;

for ($i = 1; $i <= 15; $i++) {
    $totalLoop++;
    
    if ($i % 2 != 0) {
        $sigmaGanjil += $i;
    }
}

$rataRata = $sigmaGanjil / $totalLoop;

echo "Rata-rata dari bilangan ganjil dari 1 hingga 15 adalah: " . $rataRata;


 */

$totalLoop = 0;
$sigmaGanjil = 0;
$totalganjil = 0;
for ($i = 1; $i <= 15; $i++) {
    if (($i % 2) != 0) {
        $totalLoop++;
        $sigmaGanjil += $i;
    }
}

$rataRata = $sigmaGanjil / $totalLoop;
echo "total loopnya adalah : $totalLoop \n";
echo "total bilangan ganjil : $sigmaGanjil \n";
echo "Rata-rata dari bilangan ganjil dari 1 hingga 15 adalah: " . $rataRata;
