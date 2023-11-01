<?php

//LOOPING
//for loop
/*
for(init counter; conditional counter; expresionList counter) {
    code;
}
init counter : menentukan nilai/counter/hitungan awal
conditional counter : menentukan batas akhir dari counter
expresionList counter : menentukan banyaknya lompatan tiap counter
*/

//Ex 1
for($i=1; $i<=5; $i++){
    echo ("nilai ke $i = " . $i . "\n");
}
//Ex 2
for($i=1; $i<=5; $i++){
    echo ("Hello ...\n");
}

//Ex 3
$x = 100;
for($i=1; $i<=5; $i++){
    echo ("nilai x $i = " . $x . "\n"); //tampilkan dahulu
    $x = $x + 5;                        //baru di tambah ==> output= 100, 105, 110, 115, 120
}
//Ex 4
$x = 100;
for($i=1; $i<=5; $i++){
    $x = $x + 5;                        //ditambah dahulu 
    echo ("nilai x $i = " . $x . "\n"); //baru ditampilkan ==> output= 105, 110, 115, 120, 125
}

//contoh increment
$thn = 2015;
for($i=0; $i<=5; $i++){
    echo ("Tahun =< " . $thn . "\n");
    $thn = $thn + 1;
}

//contoh decrement
$thn = 2023;
for($i=5; $i>=1; $i--){
    echo ("Tahun => " . $thn . "\n");
    $thn = $thn - 1;
}

//1+2+3+4+5=15
$result = 0;
for($i = 1; $i<=5; $i++){
    $result += $i;
    echo ("$i : " . $result . "\n");
}
echo ("result = $result...\n");

//Genap 0 - 20
for($i = 2; $i<=20; $i+=2){
    echo ("$i" . "\n");
}

//Ganjil 1 - 20 (1,3,5,7,,9,11,13,15,17,19)
for($i = 1; $i<=20; $i+=2){
    echo ("$i" . "\n");
}

//Ganjil : 1,3,5,7,,9,11,13,15,17,19
$n=1;
for($i = 1; $i<=10; $i++){
    $n % 2 == 0;
    echo ("$n" . "\n");
    $n+=2;
}

//Other 
for($i = 1; $i<=20; $i++) {
    if(($i % 2)!=0){
    echo ("$i = ganjil\n");
    } else{
        echo ("$i = genap\n");
        }
}

//tahun kabisat
for($i = 2000; $i<=2023; $i++) {
    if(($i % 4) == 0){
    echo ("$i = tahun kabisat\n");
    } else {
        echo ("");
    }
}

$tahunAwal = 2000;
$tahunAkhir = 2500;
$count = 0;
for($i = $tahunAwal; $i<=$tahunAkhir; $i++) {
    if(($i % 4) == 0){
        $count++;
    } else {
        echo ("");
    }
}
echo ("dari tahun $tahunAwal - $tahunAkhir ada $count tahun kabisat \n");


/*
2001 + 2002 = 4003
2003 + 2004 = 4007
2005 + 2006 = 4011
*/
$tahun = 2001;
for($i=1; $i<=5; $i+=2){
    echo ("$tahun + " . ($tahun+1) . " = " . $tahun+($tahun+1) . "\n");
    $tahun+=2;
}


/*
Cari nilai average dari suatu bilangan ganjil dari 1-15
langkah2:
1. Buat loop dari 1-15
2. Buat variabel untuk cari berapa banyak total loop
3. Buat variabel untuk menampung sigma (jumlah total) dari bilangan ganjil
4. Buat rumus untuk mencari nilai rata2 di luar loop
5. Print rata2
*/


$count = 0;   
$jumlah= 0; 
for($i = 1; $i<=15; $i++) {
    if(($i % 2)!=0){
        $count++;
        $jumlah += $i;
    } 
}
echo "Jumlah total = " . $jumlah . "\n";
echo "Total Looping = " . $count . "\n";
$total = ($jumlah / $count);
echo "Rata-rata = $total" ;




?>