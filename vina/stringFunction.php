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

//str split string, banyaknya karakter (int) untuk memisahkan string menjadi 
// satu atau lebih karakter
echo("string split \n");
$strArray = str_split($kalimat,5);
print_r($strArray);
echo"\n";

//str repeat (Strin. banyaknya string yang diulangi) . untuk mengulang string menjadi beberapa sesuai dengan parameter ke 2.

echo(str_repeat("hello", 5)."\n"); //output : hellohellohellohellohello

//str pad (string, perubahan panjang string yang baru, string yang akan ditambahkan)
echo(str_pad("Hello",10,"#")."\n");  //output : Hello##### (panjang 10)
echo(str_pad("Hello",15,"#")."\n"); //output : Hello##########

//strpos (string, string yang dicari), mencari substring dalam suatu string
echo(strpos($kalimat,"s")."\n");  //perhitungan string dimulai dari indeks 0

// number_format (string number, decimal, string separator sign, string decimal sign)
echo(number_format("12000000",2)."\n");
echo number_format("1000000",2,",",".")."\n";

//strrev(string), untuk membalik string
echo(strrev("Xsis Academy") ."\n");

//join(separator, string array) . alias dari implode
$strArray = array("Red","Green","Blue");
echo(join("+", $strArray) . "\n");

//strtolower(string) merubah string ke huruf kecil
//strtoupper(string) merubah string ke huruf besar
echo strtolower($kalimat."\n");
echo strtoupper($kalimat."\n");

//ucfirst(string); membuat upper case pada kalimat pertama dalam satu kalimat
echo(ucfirst("php batch 332 xsis academy")."\n");
// ucwords(String); membuat uppercase untuk karakter pertama dalam satu kata
echo(ucwords("php batch 332 xsis academy")."\n");
//md5(string) ; digunakan untuk mengkonvert string; hash string to md5 atau tipe
echo(md5("password123")."\n");
//sha1(String) ; hash string to sha format
echo(sha1("password123")."\n");

//mengecek 2 string sama atau tidak
?>