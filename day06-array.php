/*
array adalah struktur data yang dipakai untuk menyimpan sekumpulan nilai dengan tipe data yang sama. sekumpulan nilai tersebut
disimpan dalam satu variable. disetiap elemen diidentifikasi oleh indeks, indeks biasanya dimulai dari 0;

variable = array()
*/
<?php
$mobil = array("A", "B", "C", "D", "E");
echo ($mobil[2] . "\n");

echo (count($mobil) . "\n");

for ($i = 0; $i < count($mobil); $i++) {
    echo ($mobil[$i] . "\n");
}

// php bukan pemrograman strong type, jadi bisa berbeda tipe data dalam satu array
$number = array(1, 3, 5, 6, 7, "Buldozer", "z", "$", "@");
for ($i = 0; $i < count($number); $i++) {
    echo ($number[$i] . "\n");
}
sort($number);
print_r($number);

$angka = array(99, 5, 7, 31, 85, 10, 15);
$panjangArray = count($angka);

// 1. Mencari Nilai Rata - Rata
$hasil = array_sum($angka) / $panjangArray;
echo "hasil Rata - Rata : " . $hasil . "\n";

// 2. Mencari Nilai Tengah
sort($angka);
if ($panjangArray % 2 == 0) {
    $middle1 = $angka[($panjangArray / 2) - 1];
    $middle2 = $angka[$panjangArray / 2];
    $median = ($middle1 + $middle2) / 2;
} else {
    $median = $angka[($panjangArray / 2)];
}

echo "Nilai Tengah (Median): " . $median . "\n";

// 3. Mencari Nilai Minimal
$min = min($angka);
echo "Nilai Minimal: " . $min . "\n";

// 4. Mencari Nilai Tengah
$max = max($angka);
echo "Nilai Maksimal: " . $max . "\n";

$a = array(1, 2, 3);
$b = array(3, 2, 1);
$c = array();
for ($i = 0; $i < 3; $i++) {
    $c[$i] = $a[$i] + $b[$i];
}
print_r($c);

// $x = bilangan ganjil
// $y = bilangan Genap
// $z = menyimpan hasil perkalian $x dan $y
$x = array();
$y = array();
$z = array();
$n = 10;
for ($i = 0; $i <= $n * 2; $i++) {
    if ($i % 2 == 0) {
        $y[] = $i;
    } else {
        $x[] = $i;
    }
}
for ($i = 0; $i < $n; $i++) {
    $z[] = $x[$i] * $y[$i];
}

print_r($z);
?>