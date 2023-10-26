<?php
/*
PHP string funcion
*/
$kalimat = "Xsis Academy, Jalan Langsat III Nomor 5";
$kata = "PHP";
// str explode berfungsi memisahkan str berdasarkan seperator
$explode = explode(" ", $kalimat);
print_r($explode);
print($kalimat . "\n");
// Print dengan format printf()
printf("%s %s\n", $kalimat, $kata);
//crypt() function untuk membuat hash dari suatu str
$hash = crypt($kata, "salt");
echo $hash . "\n";
// implode menggabungkan kata2 dalam suatu array menjadi suatu str
$strArray = array(
    "Red",
    "Green",
    "Blue"
);
echo implode(" ", $strArray) . "\n";
//trim untuk membuang spasi suatu str bisa juga untuk spasi dikanan/kiri
$str = "   Cibinong City   ";
echo $str . " : " . ltrim($str) . "\n";
echo $str . " : " . rtrim($str) . "\n";
echo $str . " : " . trim($str) . "\n";
// str_replace mengganti karaktek/str dari suatu str
echo str_replace(" ", ",", $kalimat . "\n");
echo str_replace("Nomor", "Number", $kalimat . "\n");
// str_split(str, banyaknya karakter(int)) untuk memisahkan str menjadi satu / lebih karakter
$strArray = str_split($kalimat, 1);
echo implode(" ", $strArray) . "\n";
print_r($strArray);
// str_repeat(str, banyaknya str diulang) untuk mengulang str menjadi beberapa sesuai dengan parameter ke-2
echo str_repeat("Hello", 5) . "\n";
// str_pad(str, pjng str yg baru, str yg akan ditambahkan)
echo str_pad("Hello", 10, "#") . "\n";
echo str_pad("Hello", 15, "$") . "\n";
// strpos(str, str yang dicari) mencari substr dalam suatu str
echo strpos($kalimat, "5") . "\n";
// number_format(str number, decimal, str decimal sign, str seperator sign)
echo number_format(12000000, 2) . "\n";
echo number_format(12000000, 2, ",", ".") . "\n";
// strrev(str) digunakan untuk membalik str
echo strrev("Xsis Academy") . "\n";
// join(separator, str array) alias dari implode()
$strArray = array(
    "Red",
    "Green",
    "Blue"
);
echo join("*", $strArray) . "\n";
// strtolower(str) mengubah str menjadi huruf kecil
echo strtolower($kalimat) . "\n";
// strtoupper(str) mengubah str menjadi huruf besar
echo strtoupper($kalimat) . "\n";
// ucfirst(str) membuat uppercase untuk karakter pertama dalam suatu kalimat
echo ucfirst("php batch 332 xsis academy") . "\n";
// ucwords(str) membuat uppercase untuk karakter pertama dalam suatu kata
echo ucwords("php batch 332 xsis academy") . "\n";
// md5(str) hash str to md5 format 
$str = "password123";
$hashedStr = md5($str);
echo $hashedStr . "\n";
// sha1(str) hash str to SHA format
$str = "password123";
$hashedStr = sha1($str);
echo $hashedStr . "\n";
