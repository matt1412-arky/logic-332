<?php
/* 
if..else..statement digunakan untuk mengendalikan alur eksekusi kode berdasarkan kondisi 
tertentu. Memungkinkan untuk menjalankan satu blok kode jika kondisi tertentu terpenuhi 
(if) dan menjalankan blok lain jika kondisi tidak terpenduhi (else)
*/

/* if..*/
// $nilai = 50;
// var_dump($nilai >= 60);
// if ($nilai >= 60){
//     //blok statement
//     echo "Anda Lulus! \n";
// }
// echo "Shoppe"

/*if..*/
// $nilai = 59;
// if ($nilai >= 60){
//     //blok statement
//     echo "Anda Lulus!";
// }
// echo "Shoppe"

/*if..else..*/
// $nilai = 60;
// if ($nilai > 60){
//     //blok statement
//     echo "Anda Lulus! \n";
// } else {
//     echo "Anda Tidak Lulus \n";
// }

/* if..elseif..else*/
/* Pernyataan if..elseif..else digunakan untuk mengatasi kondisi secara berurutan. Jika kondisi
pertama tidak terpenuhi, maka pernyataan elseif berikutnya diperiksa, dan jika tidak ada yang
terpenuhi maka blok else dijalankan
*/

$nilai = 75;
$nilai = rand(0, 100);
$grade = "";
if ($nilai >= 90){
    $grade = "A";
} elseif ($nilai >= 80){
    $grade = "B";
} elseif ($nilai >= 70){
    $grade = "C";
} elseif ($nilai >= 60){
    $grade = "D";
} else {
    $grade = "E";
}

echo $grade . "\n";
echo "Shopee!";








?>