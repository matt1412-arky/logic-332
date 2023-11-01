<?php
	
	$nama = "asd 12345678";
	
	// menghitung jumlah karakter
	echo strlen($nama) . "\n";

	//menghitung jumlah kata
	echo str_word_count($nama) . "\n";
	
	//membalikan kata
	echo strrev($nama) . "\n";
	
	//mencari karakter atau kata tertentu dalam sebuah string atau kalimat
	echo strpos($nama,"8") . "\n";

	//mengubah karakter atau kata tertentu dalam sebuah string atau kalimat
	echo str_replace("1","2", $nama ) . "\n";
	
	//menjadikan string huruf kecil
	echo strtolower($nama) . "\n";
	
	//menjadikan string huruf besar
	echo strtoupper($nama) . "\n";

	//mengambil karakter dalam suatu string atau kalimat
	echo substr($nama, 3, -3) . "\n";

$a = 10;
$b = "12.5";

echo "HASIL IMPLISIT = " . ($a + $b) . "\n"; // hasil konversi implisit
echo "HASIL EKSPLISIT = " . ($a + (int)$b) . "\n"; // hasil konversi eksplisit
var_dump($a + $b);
var_dump($a + (int)$b);
var_dump(($a + $b).""); // konversi ke string

var_dump( is_nan(2)) . "\n" ;
echo is_nan(acos(1.01)) . "\n";

echo (number_format((float)pi(), 2, ","))."\n";

echo(min(0, 150, 30, 20, -8, -200))."\n"; // menghitung nilai tertinggi
echo(max(0, 150, 30, 20, -8, -200))."\n"; // menghitung nilai terendah

echo(abs(-6.7))."\n"; // mengganti minus ke plus
echo(round(3.49))."\n"; // membulatkan bilangan
echo(rand(1,10))."\n"; // angka random dari 

define("GREETING", "Welcome to The Jungle")."\n"; // konstan data
echo GREETING . "\n";

$hello = 30;			//tidak konstan atau dapat diberubah dengan diupdate
echo $hello . "\n";
$hello =20;
echo $hello . "\n";

define("GREETINGS", "Welcome to THE JUNGLE!"); // constan secara global
function myTes() {
	echo GREETINGS;
};
echo myTes() . "\n";


// if : eksekusi apabila kondisi terpenuhi
// else : eksekusi apabila kondisi tidak terpenuhi

$absen1 = rand(100, 1000);
if ($absen1 >= 800){
	echo "lulus \n";
}
else {
	echo "tidak lulus \n";
}

echo "eko \n";

// if else : apabila memiliki banyak kondisi, dengan mengecek blok statement secara berurutan.

if ($absen1 >= 900){
	echo "memuaskan \n";
}
elseif ($absen1 >= 800){
	echo "lulus b aja \n";
}
elseif ($absen1 >= 700){
	echo "cukup lah \n";
}else{
	echo "ga lulus ya \n";
}


echo "eko \n";



// switch case : alur untuk memilih dari beberapa kode blok untuk setiap kasus tertentu, berguna apabila teradapat banyak kasus
$hari = "senin";

switch ($hari){
	case "senin";
	echo "hari senin";
	break; //harus ada ini agar ada batas
	case "selasa";
	echo "hari selasa";
	break;
	case "rabu";
	echo "hari rabu";
	break;
	default;
	echo "hari libur";
	break;
}

$a = 5;
$b = 3;

echo "Nilai a : " . $b . "\n";
echo "Nilai b : " . $a . "\n";


?>