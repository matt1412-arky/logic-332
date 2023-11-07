<?php

//PHP pi function 
echo(pi());
echo("\n");
/*pembuatan koma terbatas 
dibelakang angka */

echo(number_format((float) pi(),2 . "."));
echo("\n");
echo(round(pi(),2));

/*
echo(min(0, 150, 30, 20, -8, -200)."\n");  // returns -200
echo(max(0, 150, 30, 20, -8, -200). "\n");  // returns 150
echo(abs(-6.7)."\n");  // returns 6.7 

echo(round(0.60)."\n");  // returns 1
echo(round(0.49)."\n");  // returns 0

echo(rand(10, 100));
*/
?>