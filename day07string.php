<?php

/*
PHP String Function
*/

$kalimat = "Xsis Academy, Jalan Langsat III Nomor 5";
$kata = "PHP";
//string explode = memisahkan string berdasarkan separator
print_r($explode = explode("a", $kalimat)); // [0] => Xsis Ac | [1] => demy, J | [2] => l ......
print($kalimat. "\n"); // Xsis Academy, Jalan Langsat III Nomor 5
//print dengan format printf()
printf("%s\t\t\t%s\n", $kalimat, $kata); // Xsis Academy, Jalan Langsat III Nomor 5                 PHP
//crypt() function untuk membuat hash dari suatu string
$hash = crypt($kata, "salt");
echo ($hash."\n"); //sa94Cd6CaM5NE
//implode = menggabungkan kata2 dalam suatu array menjadi suatu string
$strArray = ["Red","Green","Blue"];
echo(implode(" ", $strArray). "\n"); // Red Green Blue
echo(implode("", $strArray). "\n"); // RedGreenBlue
//trim untuk membuang spasi dikanan atau kiri suatu string
$str = "   Cibinong City  ";
echo ($str . " : ".ltrim($str). "\n");//    Cibinong City   : Cibinong City
echo ($str . " : ".rtrim($str). "\n");//    Cibinong City   :    Cibinong City
echo ($str . " : ".trim($str). "\n"); //    Cibinong City   : Cibinong City
//str_replace untuk me-replace karakter atau string dari suatu string
echo (str_replace(" ",";",$kalimat). "\n"); // Xsis;Academy,;Jalan;Langsat;III;Nomor;5
echo (str_replace("Nomor","Number",$kalimat). "\n"); // Xsis Academy, Jalan Langsat III Number 5
//str_split(String, banyaknya karakter (int)) - untuk memisahkan string menjadi satu atau lebih karakter
print_r($strArray = str_split("xsis Academy", 1)); // semua huruf menjadi array (termasuk spasi)
//str_repeat(String, banyanknya string diulang) - untuk mengulang string menjadi beberapa seseuai dengan parameter ke 2
echo (str_repeat("Hello ", 5). "\n"); // Hello Hello Hello Hello Hello
//str_pad(String, panjang string yang baru, String yang akan ditambahkan)
echo (str_pad("Hello", 10, "#"). "\n"); // Hello#####
echo (str_pad("Hello", 15, "$"). "\n"); //Hello$$$$$$$$$$
//strpos(String, String yang dicari) - mencari substring dalam suatu string
echo (strpos($kalimat, "c"). "\n"); // 6
//number_format(String number, decimal, String decimal sign, String separator sign)
echo (number_format("12000000", 2). "\n");  // 12,000,000.00
echo (number_format("12000000", 2, ",", "."). "\n"); // 12.000.000,00
//strrev(String) - digunakan untuk membalik string
echo(strrev("Xsis Academy"). "\n");// ymedacA sisX
//join(separator, String Array) - Alias implode()
$strArray = ["Red", "Yellow", "Blue"];
echo (join("*", $strArray). "\n");// Red*Yellow*Blue
//strtolower(String) - merubah string ke huruf kecil
//strtoupper(String) - merubah string ke huruf besar
echo(strtolower($kalimat) ."\n");// xsis academy, jalan langsat iii nomor 5
echo(strtoupper($kalimat) ."\n");// XSIS ACADEMY, JALAN LANGSAT III NOMOR 5
//ucfirst(String) - Membuat uppercase untuk karakter pertama dalam suatu kalimat
echo(ucfirst("php batch 332 xsis academy") ."\n"); // Php batch 332 xsis academy
//ucword(String) - Membuat uppercase untuk karakter pertama dalam suatu kata
echo(ucwords("php batch 332 xsis academy") ."\n"); // Php Batch 332 Xsis Academy
//md5(String) - hash string to MD5 format
echo (md5("password123")."\n"); // 482c811da5d5b4bc6d497ffa98491e38
//sha1(String) - hash string to SHA format
echo (sha1("password123")."\n"); // cbfdac6008f9cab4083784cbd1874f76618d2a97
//mengecek 2 string sama atau tidak
echo ("");


?>