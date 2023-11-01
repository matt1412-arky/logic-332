<?php

$name = "Matthew Christian Cahyadi";
echo "Nama Awal : " . $name . "\n";

//Jumlah character (termasuk spasi dan beberapa symbol)
echo "Digit Karakter : " . strlen($name) . "\n";

//Jumlah kata yg dipisih spasi atau pun beberapa symbol
echo "Panjang Kata : " . str_word_count($name) . "\n";

//Kebalikan dari teks awal
echo "String Reverse : " . strrev($name) . "\n";

//Mencari posisi sesuai string pada teks
echo "Mencari Cahyadi : " . strpos($name, "Cahyadi") . "\n";

//Mengganti teks dalam string
echo "String Replace : " . str_replace("Cahyadi", "Cahya",$name) . "\n";


?>