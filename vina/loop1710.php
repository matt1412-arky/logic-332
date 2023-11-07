<?php

//LOOPING
//for loop

/*
for(init counter; conditional counter; expressionlist counter) {
    code;
}

init counter : menentukan nilai/counter/hitungan awal
conditional counter : menentukan batas akhir dari counter
expressionList counter : menentukan banyaknya lompatan tiap counter


// i dimulai dari 1 sampai 5, dengan lompatan a+=1 yang artinya $i = $i + 1
for($i=1; $i<5; $i+=1){
    echo("nilai ke $i = ".$i . "\n");
}

for($i=1; $i<=5; $i+=1){
    echo("Hello ...... \n");
}

$x = 100;
for($i=1; $i<5; $i+=2){
    echo("nilai x ke $i = " . $x. "\n");
    $x = $x + 5;
}

for($i=2015; $i<=2020; $i+=1){
    echo("sekarang tahun $i \n");
}


//contoh decrement
for($i=5; $i>=1; $i-=1){
    echo("nilai ke $i = ".$i . "\n");
}


//print 5 tahun terakhir

$tahun = 2023;
for($i=5; $i>=1; $i--){
    echo("tahun $tahun ....\n");
    $tahun--;
}


// 1+2+3+4+5 = 15
//diberikan inisial untuk memberikan nilai pada pengoperasian

$result = 0;                        //variabel dengan global scope
for($i=1; $i<=6; $i++ ){
   // echo("$i : " . $result . "\n"); // cara lain
    $result += $i;
}
echo("hasinya adalah $result");


//nomor genap

for($i=0; $i<=10; $i+=2){
    echo("$i \n");
}

//nomor ganjil

for($i=1; $i<=10; $i+=2){
    echo("$i \n");
}


//cara lain genap ganjil
for($i=1; $i<=20; $i+=1){
    if(($i%2)!=0) {
        echo("$i = ganjil \n");
    } else {
        echo("$i =genap \n");
    }
}


//dari tahun 2000-2023 

for($i=2000; $i<=2023; $i+= 4){
    echo("$i tahun kabisat \n");
}
//cara lain dengan menampilkan semua tahun
for($i=2000; $i<=2023; $i++){
    if (($i % 4)==0) {
        echo("$i = tahun kabisat \n");
    } else {
        echo("$i bukan tahun kabisat \n");
    }
}

$n = 0;                                     //try myself
for($i=2000; $i<=2016; $i+= 4){
    $o = print("$i tahun kabisat \n");
    $n += $o ;
    echo("terdapat $n kali tahun kabisat \n");
}

$tahunAwal = 2000;
$tahunAkhir = 2023;
$count = 0;

for($i = $tahunAwal; $i = $tahunAkhir; $i++){
    if(($i%4) == 0){
        $count++ ;
    }
}
echo("dari tahun $tahunAwal-$tahunAkhir ada $count tahun kabisat \n");


// masih ada yg salah list ketiga

$count = 0;
$tahun3 = 2000;
for($i=1; $i<=4; $i+=2){
    $i += $tahun3 + $i;
    $count = $tahun3 + ($tahun3 + 1);
    echo ($tahun3 . "+" . ($tahun3 + 1) . " = " . $count . "\n");
}

$tahun = 2001;
for($i=1; $i<=4; $i+=2){
    echo("$tahun + " . $tahun+1 . " = " . $tahun+($tahun+1) . "\n");
    $tahun+=2;
}

for($i=1; $i<=4; $i+=2) {
    echo("$i +" . $i+1 . " = " . $i+($i+1) . "\n");
}

*/
/*
cari nilai rata-rata average dari suatu bilangan ganjil dari 1-15
langkah-langkah: 
1. buat loop dari 1-15
2. buat variabel untuk mencari berapa banyak total loop
3. buat variabel untuk menampung siqma (jumlah total) dari bilangan ganjil
4. buat rumus untuk mencari nilai rata-rata diluar LOOP
5. print rata-rata 
*/

$totalLoop = 0;
$sigma = 0;
for($i=1; $i <=15; $i++){
    if(($i%2)!=0){
        $sigma++ ;
        $totalLoop += $i;
    }
}
echo("hasinya adalah $totalLoop \n");
echo("ada $sigma bilangan ganjil \n");

$average = $totalLoop / $sigma ;

echo "hasil rata-rata $average";


?>