<?php

/* PHP string function
*/

$kalimat = "Xsis Academy, Jalan Langsat III nomor 9";
$kata = "PHP";
//string explode = memisahkan string berdasarkan separator
$explode = explode(" ", $kalimat);          //spasi termasuk karakter sehingga dapat menjadi penanda separator
$explode1 = explode("a", $kalimat);         //karakter besar dan kecil juda dapat mempengaruhi
print_r($explode);
print_r($explode1);
print($kalimat . "\n");
// print dengan format printf
printf("%s\t\t%s\n", $kalimat, $kata); // %s untuk menprint variable disampingnya
//crypt() function untuk membuat hash dari suatu string
$hash = crypt($kata, "salt");
echo($hash."\n");
//implode = menggabungkan kata-kata dalam suatu array menjadi suatu string
$strArray = array("Red","Green","Blue");
echo(implode("+", $strArray) . "\n");
//trim untuk membuang spasi dikanan atau kiri suatu string
$str = "   cibinong city   ";
echo($str. " : ".ltrim($str)."\n");
echo($str. " : ".rtrim($str)."\n");
echo($str. " : ".trim($str)."\n");
//str replace untuk mereplace karakter atau string dari suatu string
echo str_replace(",", "+" , $kalimat . "\n");


?>