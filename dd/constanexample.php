<?php

//define = function global
define("Greeting", "Welcome To Xsis Academy!");
define("pi", 3.14);
define("isLogin", True);

echo Greeting . "\n";
$Greeting = "Welcome MLBB";
echo Greeting . "\n"; // tidak berubah value dari greeting

echo isLogin . "\n";
echo pi . "\n";

define("XSIS", "Welcome to Xsis Mitra Utama");
function myXsis(){
    echo XSIS;
}
myXsis();


?>