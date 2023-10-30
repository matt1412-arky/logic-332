<?php
// spasi dihitung dalam panjang string

$name = "vina nurmadani";

//echo("panjang karakter dari vina" . strlen($name));

/* menghitung kata dalam string
fungsinya adalah str_word_count

perhitungan kata pada string dapat dihitung apabila dipisah dengan spasi
,spesial karakter kecuali -

*/

//echo("Panjang kata dalam string name : " . str_word_count($name))

/* strrev() fungsi yang membalikan sebuah string
*/

//echo("string awal : ". $name . "string reserve : " . strrev($name)."\n");

/* strpos() mencari teks dalam string, 
fungsi php strpos mencari teks tertentu dalam suatu string.  
jika ada kecocokam ditemukan fungsi ini mengembalikan posisi karakter pertama yang cocok.
jika tidak ada kecocokan yang ditemukan maka akan mengembalikan false.

besar kecilnya string menentukan dalam pencarian atau fungsi ini 
*/

//echo("mencari nurmadani : " . strpos($name, "Nurmadani") . "\n");

/* str_replace berfungsi untuk mengganti tekss dalam string 
parameter yang diinput string lama yang akan diganti, string baru yang akan diganti, full stirng full variabel.
*/

//echo("nama awal : " . $name . "setelah diganti : " . str_replace("vina","vinew", $name));

$a = 5;
$b = "3.5";

echo "hasil : ". ($a+$b)."\n"; //konversi secara implisit
echo "hasil : ".($a+(int)$b)."\n"; //konversi secara eksplisit          

var_dump($a + $b);
var_dump($a + (int)$b);
var_dump(($a + $b)."");
?>