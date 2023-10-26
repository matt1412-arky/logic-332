<?php
	echo("Batch 332 PHP \n");
	print("Xsis Academy \n");
	echo "Langsat III Nomor 5 \n";

	//hasil latihan sendiri
	$lang = "PHP native \n";
	print($lang);
	$ling = "Belajar";
	$gabung = $ling . " " . $lang;
	echo $gabung;

	$a = 2000;
	$b = 10500;
	$c = "Dua belas ribu lima ratus";
	print("Nilai a = " . $a . "\n");
	echo ("Nilai b = " . $b . "\n");
	echo ($a . "+" . $b . "=" . $c . "\n");

	$d = $a + $b;
	echo ("Hasil a + b = " . $d . "\n");

	$c = 12.5; // C sebelumnya str
	print("C sekarang : " . $c . "\n");

	// single line comments
	/*
		multiline comments
		line 2
	*/

	// einstein = m * (c * c);
	$m = 1;
	$c = 3;
	$hasil = $m * ($c * $c);
	print("einstein = " . $hasil . "\n");
	
	// luasLingkaran = pi * r * r;
	$pi = 3.14;
	$r = 5;
	$luasLingkaran = $pi * ($r * $r);
	echo("Luas Lingkaran = " . $luasLingkaran . "\n");

	//volt = I * R; (I = arus, R = Resistance)
	$I = 10;
	$R = 5;
	$V = $I * $R;
	echo ("Volt = " . $V . "\n");
?>
