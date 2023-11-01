<?php
/* Switch case adalah konstruksi pengendalian alur yang digunakan untuk memilih satu dari banyak
blok kode yang akan dieksekusi berdasarkan nilai ekspresi atau variabel tertentu. Kondisi ini
berguna ketika kita memiliki banyak kasus yang berbeda dan ingin menjalankan kode berbeda untuk 
setiap kasus
*/
//Ex 1
// $bulan = "Januari";
// switch($bulan) {
//     case "Januari":
//         echo "Sekarang Bulan Januari ";
//         break;
//     case "Februari":
//         echo "Sekarang Bulan Februari";
//         break;
//     case "Maret":
//         echo "Sekarang Bulan Maret";
//         break;
//     case "April":
//         echo "Sekarang Bulan April";
//         break;
//     default :
//         echo "Sekarang Bulan Mei";
// }

//Ex 2
$nilai = 4;
switch($nilai) {
    case 1:
        echo "A";
        break;
    case 2:
        echo "B";
        break;
    case 3:
        echo "C";
        break;
    case 4:
        echo "D";
        break;
    default :
        echo "E";
}


?>