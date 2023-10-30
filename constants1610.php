<?php
/* konstanta adalah sebuah value 
apakah case-sensitiv
*/

define("GREETING", "Welcome to W3Schools.com!" . "\n");
define("pi" , 3.14);
define("islogin",false);
//$GREETING = "welcome to Axis Academy";

echo GREETING;

/* Nilai konstan tidak berubah walaupun si greeting telah 
diubah definisinya*/

define("GREETING", "Welcome to W3Schools.com!", true);
//echo greeting;

var_dump(pi);
// cara mengkoversi nilai (int)pi

echo pi."\n";
echo (int)islogin."\n";

var_dump(islogin);
var_dump((int)pi);

function myXsis(){
    echo GREETING;
}

myXsis();

?>