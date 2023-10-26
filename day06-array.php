<?php
/*
    Array
    ===============================================================================================
    array adalah struktur data yang dipakai meyimpan sekumpulan nilai dengan tipe data yang sama.
    sekumpulan nilai tersebut disimpan dalam satu variabel. setiap elemen diidentifikasi oelh indexs. 
    indexs biasanya dimulai dari 0.

    variabel = array(1,2,3,4,5,6,6);
    variabel = array("a","c","d","h");
*/
$mobil = array("Mercedes", "Jagaur", "Masserati", "Mustang", "Shelby", "Bajaj");
echo $mobil[2] . "\n";
echo $mobil[4] . "\n";
echo $mobil[5] . "\n"; // PHP Warning:  Undefined array key 5
echo $mobil[0] . "\n";
// Mengukur panjang array
$length = count($mobil);
echo "Length of the array: " . $length . "\n";

// Menampilkan array
for ($i = 0; $i <= 5; $i++) { // pemberian batas/panjang array yang hard code
    echo ($mobil[$i] . "\n");
}
// Contoh kode tidak hard code
for ($i = 0; $i < $length; $i++) {
    echo ($mobil[$i] . "\n");
}

// Numeric array
$numbers = array(1, 2, 3, 4, "Anak", '^', 'Q', "@", 5.5);
for ($i = 0; $i < count($numbers); $i++) {
    echo ($numbers[$i] . "\n");
}
sort($numbers);
print_r($numbers);

$angka = array(99, 5, 7, 31, 85, 10, 15);
$panjangArray = count($angka);

// 1. Mencari nilai rata2 dari $angka
$total = array_sum($angka);
$average = $total / $panjangArray;
echo "Average: " . $average;
echo "\n";

// 2. Mencari nilai tengah dari $angka
sort($angka);
$panjangArray = count($angka);
echo "Panjang array : " . $panjangArray . "\n";
$median = $angka[($panjangArray - 1) / 2];
echo "Median : " . $median . "\n";

echo "Other way : " . "\n";
sort($angka);
$panjangArray = count($angka);
if ($panjangArray % 2 == 0) {
    $median1 = $angka[($panjangArray / 2) - 1];
    $median2 = $angka[$panjangArray / 2];
    $median = ($median1 + $median2) / 2;
} else {
    $median = $angka[$panjangArray / 2];
}
echo "Array : " . implode(", ", $angka) . "\n";
echo "Median : " . $median . "\n";

// 3. Mencari nilai minumum dari $angka
$minimumValue = min($angka);
echo "Minimum value: " . $minimumValue;
echo "\n";

// 4. Mencari nilai maksimum dari $angka
$maximumValue = max($angka);
echo "Maximum value: " . $maximumValue;
echo "\n";

// Menjumlahkan 2 array yang panjangnya sama
$A = array(1, 1, 1);
$B = array(1, 2, 3);
$C = array();

for ($i = 0; $i < count($A); $i++) {
    $C[$i] = $A[$i] + $B[$i]; // penulisan $C [] tidak lazim lebih baik dihindari 
}
print_r($C);
echo "\n";

// $X = masukkan bilangan ganjil
// $Y = masukkan bilangan genap
// $Z = menyimpan hasil perkalian $X dan $Y
/*
echo "Cara 1: " . "\n";
$X = array();
$Y = array();
$Z = array();

$n = 3;
for ($i = 0; $i <= $n; $i++) {
    if ($i % 2 == 1) {
        $X[] = $i;
    } else {
        $Y[] = $i;
    }
}

for ($i = 0; $i < count($X); $i++) {
    for ($j = 0; $j < count($Y); $j++) {
        $Z[$i][$j] = $X[$i] * $Y[$j];
    }
}

// Menampilkan array $X
echo "Bilangan Ganjil: " . implode(", ", $X) . "\n";

// Menampilkan array $Y
echo "Bilangan Genap: " . implode(", ", $Y) . "\n";

// Menampilkan hasil perkalian $Z
echo "Hasil Perkalian: \n";
for ($i = 0; $i < count($X); $i++) {
    for ($j = 0; $j < count($Y); $j++) {
        echo $Z[$i][$j] . " ";
    }
    echo "\n";
}
echo "\n";

echo "Cara 2: " . "\n";
$X = array(); // Array untuk bilangan ganjil
$Y = array(); // Array untuk bilangan genap
$Z = array(); // Array untuk hasil perkalian

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 1) { // Bilangan ganjil
        $X[] = $i;
    } else { // Bilangan genap
        $Y[] = $i;
    }
}

// Menghitung hasil perkalian
for ($i = 0; $i < count($X); $i++) {
    for ($j = 0; $j < count($Y); $j++) {
        $Z[$i][$j] = $X[$i] * $Y[$j];
    }
}

// Menampilkan array $X
echo "Bilangan Ganjil: ";
foreach ($X as $bilangan) {
    echo $bilangan . " ";
}

echo "\n";

// Menampilkan array $Y
echo "Bilangan Genap: ";
foreach ($Y as $bilangan) {
    echo $bilangan . " ";
}

echo "\n";

// Menampilkan hasil perkalian $Z
echo "Hasil Perkalian: \n";
for ($i = 0; $i < count($X); $i++) {
    for ($j = 0; $j < count($Y); $j++) {
        echo $Z[$i][$j] . " ";
    }
    echo "\n";
}
echo "\n";
*/
// echo "Cara 3: " . "\n";
$X = array();
$Y = array();
$Z = array();

$n = 7;
for ($i = 0; $i <= $n; $i++) {
    if ($i % 2 == 1) {
        $X[] = $i;
    } else {
        $Y[] = $i;
    }
}

for ($i = 0; $i < count($X); $i++) {
    $Z[$i] = $X[$i] * $Y[$i];
}

// Menampilkan array $X
print_r($X);

// Menampilkan array $Y
print_r($Y);

// Menampilkan hasil perkalian $Z
echo "Hasil Perkalian: \n";
print_r($Z);
