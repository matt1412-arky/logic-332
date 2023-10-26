<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Document</title>
</head>

<body>
   <?php
   /* strlen() - mengembalikan panjang string
   Fungsi PHP strlen() mengembalikan panjang dari sebuah string
   */
   $name = "Matthew Christian Cahyadi";
   echo "Panjang character nama dari Matthew : " . strlen($name) . "<br>";

   /* str_word_count() - mengembalikan jumlah kata dalam sebuah string
   Fungsi PHP str_word_count() mengembalikan jumlah kata dalam sebuah string
   */
   echo "Jumlah kata dari nama Matthew : " . str_word_count($name) . "<br>";

   /* strrev() - mengubah string dari belakang ke depan
   Fungsi PHP strrev() mengubah string dari belakang ke depan
   */
   echo "String awal : " . $name . "<br>";
   echo "String dari belakang ke depan : " . strrev($name) . "<br>";

   /* strpos() - mencari teks dalam string
   Fungsi PHP strpos() mencari teks dalam string. Jika ada kecocokan 
   ditemukan fungsi ini mengembalikan posisi karakter pertama yang cocok. 
   Jika tidak ada kecocokan ditemukan fungsi ini mengembalikan false 
   / no output. 
   */
   echo "String : " . $name . "<br>";
   echo "Posisi dari kata 'Cahyadi' : " . strpos($name, "Cahyadi") . "<br>";

   /* str_replace() - mengganti teks dalam string */
   echo "Nama awal : " . $name . "<br>";
   echo "Mengganti 'Cahyadi' dengan 'Christian' : " . str_replace("Cahyadi", "Christian", $name) . "<br>";
   ?>
</body>

</html>