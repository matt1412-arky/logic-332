<?php
	// - - - -  Latihan Fungsi - - - - //
	function f($x){
		return 3*$x;
	};
	
	echo(f(7) . "\n");
	
	$x = 9;
	$y = 10;
	echo(f($x) . "\n");
	echo(f(9) . "\n");
	echo(f($y) . "\n");

	echo(f($y + $x) . "\n");
	
	$z = f($y);
	echo($z . "\n");
	
	$out = f(5) * 7;
	echo($out . "\n");

	$hsl = f(5) + f($x);
	echo($hsl . "\n");

	function e($a, $b){
		$res = $a * $b * $b;
		return $res;
	}
	
	// - - - Einstein Function - - - //
	$einstein = e(3, 2);
	echo($einstein . "\n");

	$x = $einstein + $out;
	echo($x . "\n");

	// - - - - Volt Function - - - - //
	function volt($i, $r){
		$v = $i * $r;
		return $v;
	}
	
	function resist($v, $i){
		$r = $v / $i;
		return $r;
	}

	function cur($v, $r){
		$i = $v / $r;
		return $i;
	}
	$v = 10;
	$r = 5;
	$i = 5;

	echo("voltage = " .  volt($i, $r) . "\n");
	echo("current = " . cur($v, $r) . "\n");
	echo("resistance = " . resist($v, $i) . "\n");

	// - - - Circle Function - - - //
	function klingkaran($r){
		$p = 3.14;
		$k = 2 * $r * $p;
		return $k;
	}
	echo(klingkaran(2) . "\n");  // -  <<-- Keliling Lingkaran


	define("p", 3.14); 	// - - - - - - <<-- Fungsi definisi konstan define($var, konstan)
	echo(p . "\n");		// - - - - - - <<-- Panggil konstan
	function llingkaran($r){
		return p * $r *$r;
	}
	echo(llingkaran(5) . "\n");	// - - <<-- Luas Lingkaran

	
	function greet($nama){
		echo("hello $nama\n");
	}
	$a = "agus";
	echo(greet($a));	// - - - - - - <<-- Fungsi String

	// - - - - Coba Fungsi - - - - //
	function kopi($pcs, $harga){
		$total = $pcs * $harga;
		$string = "harga " . $pcs . " kopi adalah " . $total;
		return $string;
	}

	echo(kopi(3, 2000)); // - - - - - <<-- expected result "harga 3 kopi adalah 6000"
?>