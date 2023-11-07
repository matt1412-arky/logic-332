<?php
/* switch code adalah konstruksi pengendalian alur yang digunakan
untuk memilih satu dari banyak blok kode yang akan dieksekusi 
berdasarkan nilai ekspresi atau variabel tertentu.  kondisi ini
berguna ketika kita memiliki banyak kasus yang berbeda dan ingin 
menjalankan kode berbeda untuk setiap kasus. 


$hari = "Senin";
$nilai = 3;
switch($nilai){
    case 1;
        echo "satu";
        //break;
    case 2;
        echo "dua";
        //break;
    case 3;
        echo "tiga";
        //break;
    case 4;
        echo "empat";
        break;
    default:
        echo "default";
}
*/

// switch termasuk case sensitive, besar kecil karakter mempengaruhi
/* statement break sangat penting, karena apabila break hilang akan menjalankan
statement berikutnya
*/


$favcolor = "red";
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}




?>