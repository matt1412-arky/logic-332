<?php
$vehicle = array(
    array("Mobil", 4, 8),
    array("Truk", 8, 2, 2000),
    array("Sepeda Motor", 2, 2)
);

echo $vehicle[0][0] . " | " . $vehicle[0][1] . " | " . $vehicle[0][2] . "\n";
echo $vehicle[1][0] . " | " . $vehicle[1][1] . " | " . $vehicle[1][2] . "\n";
echo $vehicle[2][0] . " | " . $vehicle[2][1] . " | " . $vehicle[2][2] . "\n";
echo "\n";

$vehicle[0][0] = "Car";
echo $vehicle[0][0] . " | " . $vehicle[0][1] . " | " . $vehicle[0][2] . "\n";
echo "\n";

echo "Kendaraan, \tJumlah Roda, \tJmlh Penumpang, Tahun\n";
for ($i = 0; $i < count($vehicle); $i++) {
    for ($j = 0; $j < count($vehicle[$i]); $j++) {
        echo $vehicle[$i][$j] . "\t\t";
    }
    echo "\n";
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
    array(9, 8),
    array(6, 5),
    array(3, 2)
);

// Fungsi/prosedur untuk membaca array
function readArray($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            echo $arr[$i][$j] . "\t";
        }
        echo "\n";
    }
    echo "\n";
}
echo "\n";

readArray($matrixA);
readArray($matrixB);
readArray($matrixC);

$matrixD = array(
    array()
);
$matrixD[0][0] = "Blue";
$matrixD[0][1] = "Red";
$matrixD[0][2] = "Green";

readArray($matrixD);

/*
Buat array 
1,  3,  5, 7
9, 11, 13, 15
yang input datanya dilakukan dalam loop
*/

$myArray = array(); // Inisialisasi array kosong

$jumlahBaris = 2; // Mendefinisikan jumlah baris
$jumlahKolom = 4; // Mendefinisikan jumlah kolom
$nilaiAwal = 1; // Mendefinisikan nilai awal

// Mengisi array dengan nilai sesuai jumlah baris dan kolom
for ($i = 0; $i < $jumlahBaris; $i++) {
    $baris = array(); // Inisialisasi array kosong untuk setiap baris

    for ($j = 0; $j < $jumlahKolom; $j++) {
        $baris[] = $nilaiAwal; // Menambahkan nilaiAwal ke dalam baris
        $nilaiAwal += 2; // Menambahkan 2 ke nilaiAwal untuk nilai berikutnya
    }
    $myArray[] = $baris; // Memasukkan baris ke dalam matriks utama
}
print_r($myArray); // Mencetak matriks yang telah dibuat menggunakan print_r()
readArray($myArray); // Mencetak/membaca array yang telah dibuat

// Jumlahkan matrixA dengan matrixB
function addMatrices($matrixA, $matrixB)
{
    $result = array(); // Inisialisasi array kosong untuk menyimpan hasil penjumlahan
    for ($i = 0; $i < count($matrixA); $i++) {
        $row = array(); // Inisialisasi array sementara untuk hasil penjumlahan setiap elemen dalam baris
        for ($j = 0; $j < count($matrixA[$i]); $j++) {
            $row[] = $matrixA[$i][$j] + $matrixB[$i][$j]; // Menjumlahkan elemen dari kedua matriks
        }
        $result[] = $row; // Memasukkan baris hasil ke dalam array hasil
    }
    return $result; // Mengembalikan hasil penjumlahan matriks
}

$resultMatrix = addMatrices($matrixA, $matrixB); // Memanggil fungsi dengan matriks A dan B, hasilnya disimpan dalam $resultMatrix
print_r($resultMatrix); // Mencetak hasil penjumlahan matriks ke layar
readArray($resultMatrix); // Mencetak/membaca array

/* 
=============================================================================================
List() function
list adalah function yang digunakan untuk memasukkan nilai ke dalam list dalam sekali operasi
=============================================================================================
*/
$fruit = array(
    "Manggo",
    "Pineapple",
    "Orange"
);
// $a = $fruit[0];
// $b = $fruit[1];
// $c = $fruit[2];
list($a, $b, $c) = $fruit; // Mempermudah assignment isi dari array ke variable
echo "Buah buahan didalam array fruit adalah $a, $b, $c\n";

list($a, $c) = $fruit;
echo "Buah buahan didalam array fruit adalah $a, $c\n";

array_push(
    $fruit,
    "apple",
    "banana"
);
print_r($fruit);
