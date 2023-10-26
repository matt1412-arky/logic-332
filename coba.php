<?php
//	function tambah($x, $y) {
//		return $x + $y;
//	};
//
//	echo tambah(7, 3);
//
//	function kurang($x, $y) {
//		return $x - $y;
//	};
//
//	echo kurang(7, 3);

//latihan
/* 1. buatlah function untuk mengganti spasi menjadi separator
	  contoh : input : Xsis Academy
			   output : Xsis;Academy
*/
	function gantiNama($i) {
		$ganti = str_replace(" ", ";", $i);
		return $ganti;
	}
	echo (gantiNama("Xsis Academy"));

/* 2. buatlah function untuk menukar 3 karakter depan kebelakang dan 3 karakter belakang kedepan
	  contoh : input : academy
			   output : emydaca
			   input : beruang, output : anguber
*/

	$str = "Xsis Academy Batch 332 PHP";
	echo(substr($str, 0, 4) . "\n"); //dimulai dari karakter 0 yang diambil 4 karakter
	echo(substr($str, 4, 7) . "\n"); //dimulai dari karakter 4 yang diambil 7 karakter
	function tukarNama($i) {
		$d = substr($i, 0, 3);
		$t = substr($i, 3,-3);
		$b = substr($i, -3);
			return $b . $t . $d;
	}
	echo (tukarNama("academy"));


//	cara lain 1
function tukarKarakter($i) {
	if (strlen($i) < 6) {
		return $i;
	}

	$d = substr($i, 0, 3);
	$t = substr($i, 3, -3);
	$b = substr($i, -3);
	return $b . $t . $d;
}

$input1 = "academy";
$output1 = tukarKarakter($input1);
echo ($output1 . "\n");

$input2 = "beruang";
$output2 = tukarKarakter($input2);
echo ($output2 . "\n");

//	cara lain 2

function tukarNama2($input)
{
	$x = strlen($input);

	if ($x > 3) {
		$tigaPertama = substr($input, 0, 3);
	} else {
		echo "error: huruf harus lebih dari 3 karakter";
		die;
	}
	if ($x > 6) {
		$tigaTerakhir = substr($input, -3);
		$hurufTengah = substr($input, 3, -3);
	} else {
		echo "error: huruf harus lebih dari 6 karakter";
		die;
	}

	echo $tigaTerakhir;
	echo "\n";
	echo $hurufTengah;
	echo "\n";
	echo $tigaPertama;
}

tukarNama2("academy");

?>

