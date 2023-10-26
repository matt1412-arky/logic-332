<?php
// Looping
// For loop
/* 
for(init counter; conditional counter; ekspresionList counter) {
    code
}
init counter : menentukan nilai awal / counter / hitungan awal
conditional counter : menentukan batas / kondisi / batas akhir
ekspresionList counter : menentukan ekspresi / perulangan / banyaknya 
lompatan tiap counter
*/

for ($i = 1; $i <= 5; $i += 1) {
    echo ("nilai ke $i = " . $i . "\n");
}

for ($i = 1; $i <= 5; $i += 1) {
    echo ("Hello... \n");
}

$x = 100;
for ($i = 1; $i <= 5; $i++) {
    echo ("nilai ke $i = " . $x . "\n");
    $x = $x + 5;
}

// Print tahun 2015-2020
for ($tahun = 2015; $tahun <= 2020; $tahun++) {
    echo ("Tahun : " . $tahun . "\n");
}

// Contoh for decrement
for ($i = 5; $i >= 1; $i--) {
    echo ("Hello $i... \n");
}
// Print tahun (5 tahun terakhir)
$tahun = 2023;
for ($i = 5; $i >= 1; $i--) {
    echo ("Tahun : " . $tahun . "\n");
    $tahun--;
}

// Menghitung 1+2+3+4+5 = 15 menggunakan looping
$hasil = 0;
for ($i = 1; $i <= 5; $i++) {
    $hasil += $i;
    echo ("$i : " . $hasil . "\n");
}
echo ("1+2+3+4+5 = " . $hasil . "\n");

// Menghitung 1*2*3*4*5 = menggunakan looping
$hasil = 1;
for ($i = 1; $i <= 5; $i++) {
    $hasil *= $i;
    echo ("$i : " . $hasil . "\n");
}
echo ("1*2*3*4*5 = " . $hasil . "\n");

// Print bilangan genap 0-20
for ($i = 0; $i <= 20; $i += 2) {
    echo ($i . "\n");
}

// Print bilangan ganjil 0-20
for ($i = 1; $i <= 20; $i += 2) {
    echo ($i . "\n");
}

// Print bilangan ganjil 0-20 menggunakan conditional
for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo ("$i = ganjil \n");
    } else {
        echo ("$i = genap \n");
    }
}

// dari tahun 2000-2023 print tahun kabisat tanpa conditional
// Print leap years from 2000 to 2023 without using conditional statements
for ($tahun = 2000; $tahun <= 2023; $tahun += 4) {
    echo ("Tahun kabisat : " . $tahun . "\n");
}
// Using conditional
for ($tahun = 2000; $tahun <= 2023; $tahun++) {
    if ($tahun % 4 == 0) {
        echo ("$tahun = tahun kabisat \n");
    } else {
        echo ("$tahun \n");
    }
}

// Cara menghitung ada berapa tahun kabisat dari tahun 2000-3000 outputnya ada sekian tahun
$tahunAwal = 2000;
$tahunAkhir = 3000;
$count = 0;
for ($i = $tahunAwal; $i <= $tahunAkhir; $i++) {
    if ($i % 4 == 0) {
        $count++;
    }
}
echo ("Jumlah tahun kabisat dari $tahunAwal - $tahunAkhir ada $count tahun \n");

/*
cara membuat looping dengan output : 
2001 + 2002 = 4003
2003 + 2004 = 4007
2005 + 2006 = 4011
*/

$tahunAwal = 2001;
$tahunAkhir = 2005;
$count = 0;
for ($i = $tahunAwal; $i <= $tahunAkhir; $i += 2) {
    $count = $i + 1;
    $result = $count + $i;
    echo ("$i + $count = $result \n");
}

// Cara lain 
$tahun = 2001;
for ($i = 1; $i <= 5; $i += 2) {
    echo ("$tahun + " . $tahun + 1 . " = " . $tahun + ($tahun + 1) . "\n");
    $tahun += 2;
}

for ($i = 1; $i <= 5; $i += 2) {
    echo ("$i + " . $i + 1 . " = " . $i + ($i + 1) . "\n");
}

/*
Cari nilai rata2 (average) dari suatu bilangan ganjil dari 1-15
Langkah2:
1. Buat loop dari 1-15
2. Buat variabel untuk cari berapa banyak total loop 
3. Buat variabel untuk menampung sigma(jumlah total) dari bilangan ganjl
4. Buat rumus untuk mencari nilai rata2 di luar loop
5. Tampilkan nilai rata2 
*/
$sum = 0;
$count = 0;
for ($i = 1; $i <= 15; $i++) {
    if ($i % 2 != 0) {
        $sum += $i;
        $count++;
        // echo ("$i : " . $sum . "\n");
    }
}
$rata2 = $sum / $count;
echo ("Nilai rata2 dari 1-15 adalah $rata2 \n");
