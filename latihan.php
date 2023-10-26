<?php
	echo("Batch 332 PHP\n");
	print("Xsis Academy\n");
	echo"Langsat III nomor 5\n";
	print("Embeded web server\n");

	$a = 1000;
	$b = 500;
	$c = "Seribu lima ratus";
	print("Nilai a = " . $a . "\n");
	echo("Nilai b = " . $b . "\n");
	echo($a . " + " . $b . " = " . $c . "\n");

	$d = $a = $b;
	echo("Hasil a + b = " . $d . "\n");

	$c = 10.5; //C sebelumnya adalah string
	echo("C sekarang : " . $c . "\n");

	//single line comments
	/*
		multiline comments
		line 2
	*/

	//einstein = m * (c * c);
	$m = 2;
	$c = 3;
	$e = $m * ($c * $c);
	echo("Einstein = " . $m . " * (" . $c . " * " . $c . ") = " . $e . "\n");


	//luaslingkaran = pi * r * r;
	$pi = 3.14;
	$r = 4;
	$ll = $pi * $r * $r;
	echo("Luas Lingkaran = " . $pi . " * " . $r . " * " . $r . " = " . $ll . "\n");


	//volt = I * R; (I=Arus, R=Resistance);
	$i = 5;
	$r = 6;
	$v = $i * $r;
	echo("Volt = " . $i . " * " . $r . " = " . $v . "\n");

?>
