<?php
/*
//1. buatlah function untuk mengganti spasi menjadi separator
// contoh input = xsis academy ; output = xsis;academy


function SS($input, $separator = ';'){
        $input = str_replace(' ', $separator, $input);
        return $input;
}

$input = SS("Xsis Academy");   
echo($input . "\n");

//2. buatlah function untuk menukar 3 karakter depan kebelakang dan 3 karakter belakang ke 
// depan contoh : input : academy ; output: emydaca, input : beruang, output : anguber

function sbtr($input){
	$input = "beruang";
        //$input = "academy";
	echo((substr($input, 4,7)) . substr($input,3,-3). (substr($input, 0, 3)) . "\n"); 
}

sbtr($input)
*/

function swapCharacters($string)
{
    $length = strlen($string);
    $front = substr($string, 0, 3);
    $middle = substr($string, 3, $length - 6);
    $end = substr($string, -3);
    echo"$middle \n";
    return $end . $middle . $front;
}


$hasil = swapCharacters("academy");
echo $hasil . "<br>"; // Output: emydaca

$hasil = swapCharacters("beruang");
echo $hasil . "<br>"; // Output: anguber


?>
