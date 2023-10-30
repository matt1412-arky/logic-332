<?php
/*
//function addnumbers(int $a, int $b){
//	return $a + $b;

//}
//echo addnumbers(5, 5);

//variabel with local scope

//function mytest(){
//	$x = 5; //local scope
//	echo"Variabelx inside function function is: $x\n";
//}

//mytest();

// code ini akan error apabila menggunakan x diluar fungsi
//echo "<p>Variabel x outside function is : $x </p>";

//variabel with global 

//$x = 5;
//$y = 10;
//function mytest(){
//	global $x, $y;
//	$y = $x + $y;
//}

//mytest();
//echo $y;

//$x = 5; //global scope
//function mytest(){
	//using x inside this function will generate an error
//	echo"variabel x inside function is : $x";
//}
//mytest();
//echo"variabel x inside function is : $x";

//PHP the global keyword

$x =5;
$y =10;

function mytest() {
	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];

}
mytest();
echo $y;

*/

$tahun = 2023;
for($i=5; $i>=1; $i--){
    echo("tahun $tahun ....\n");
    $tahun--;
}

?>
