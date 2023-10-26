<?php

// Membuat konstanta
define('GREETING', 'Welcome To Xsis Academy!');
define('pi', 3.14);
define('isLogin', false);

echo GREETING . "<br>"; // Output: Welcome To Xsis Academy!
echo pi . "<br>";
echo (int)isLogin . "<br>";

var_dump(isLogin);
var_dump((int)pi);

/* Mengubah konstanta
define("MY_CONSTANT", 42); // Mendefinisikan konstanta

echo "Nilai awal konstanta MY_CONSTANT: " . MY_CONSTANT . "<br>";

// Mencoba mengubah nilai konstanta (akan menghasilkan kesalahan)
MY_CONSTANT = 99; // Ini akan menghasilkan kesalahan

echo "Nilai setelah mencoba mengubah: " . MY_CONSTANT . "<br>";
*/

/* Konstanta bersifat Global
Konstanta secara otomatis bersifat global dan dapat digunakan di seluruh skrip.
*/

define('XSIS', 'Welcome To Xsis Mitra Utama');
function myXsis()
{
    echo XSIS . "<br>";
}

myXsis();
