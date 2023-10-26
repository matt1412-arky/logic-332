<?php
/* strlen() - Mengembalikan panjang string
    Fungsi PHP strlen() mengembalikan panjang dari sebuah string
*/
$name = "Eka Satria Maheswara";
echo "Panjang Character nama dari Eka : ".strlen($name)."\n";

/* str_word_count() - menghitung kata dalam string
    Fungsi PHP str_word_count() menghitung jumlah kata dalam sebuah string
 */
echo "Panjang kata dalam string name : ".str_word_count($name)."\n";

/* strrev() - Fungsi yang membalikkan sebuah string */
echo "String Awal : ".$name.", String Reverse : ".strrev($name)."\n";

/* strpos() - Mencari teks dalam string 
    Fungsi PHP strpos() mencari teks tertentu dalam sebuah string. Jika ada kecocokan ditemukan fungsi ini mengembalikan posisi karakter pertama yang cocok. Jika tidak ada kecocokan yang ditemukan maka akan mengembalikan Falsa / No Output.
*/
echo "Mencari Eka : ".strpos($name, "Satria")."\n";

/* str_replace() - Mengganti teks dalam string */
echo "Nama awal : ".$name.", Setelah diganti : ".str_replace('Satria', 'Sakanade', $name);
?>