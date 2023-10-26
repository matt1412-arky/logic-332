<?php
	
	function f($x){
		return 3*$x;
	}
	
		echo(f(7) . "\n");

		$x = 9;
		echo(f($x) . "\n");
		echo(f(9) . "\n");

		$y = 100;
		echo(f($y + $x). "\n");
	
		$z = f($y);
		echo($z . "\n");

		$out = f(5) * 7 ; // 15 * 7
		echo($out . "\n");

		$hasil = f(5) + f($x); // 15 + 27
		echo($hasil . "\n");

	// einstein
	function E($m, $c) {
		$result = $m * $c * $c;
		return $result;
	}
		$einstein = E(3,5);
		echo($einstein . "\n");

		$x = $einstein + $out;
		echo($x . "\n");

	// Volt
	function V($I, $R) {
		$result = $I * $R;
		return $result;
	}
		$volt = V(3,9);
		echo($volt . "\n");

	function I($V,$R) {
		$result = $V / $R;
		return $result;
	}
		$arus = I(3,15);
		echo($arus ."\n");

	function R($V, $I) {
		$result = $V / $I;
		return $result;
	}
		$hambatan = R(4,20);
		echo($hambatan . "\n");

	//keliling lingkaran 2 pi r
	//---------------------
	function kelilinglingkaran($r) {
		$pi =3.14;
		return 2 * $pi * $r;
	}
		echo(kelilinglingkaran(7). "\n");
	
	// luas lingkaran	
	define("pi",3.14);
		echo(pi ."\n");
		function luaslingkaran($r) {
		return pi * $r * $r;
	}
		echo(luaslingkaran(5) . "\n");
		
	// input nama
	// output Hello Bowo
	function greet($nama) {
		echo("Welcome $nama\n");
		echo("Greeting $nama\n");
		echo("Hello $nama\n");
	}
		greet("Bowo");
		greet("Peter");
		
	function sapa($nama) {
		return "Welcome $nama\nGreeting $nama\nHello $nama\n";
	}
		echo(sapa("Bowo"));
		echo(sapa("Matthew"));
		echo(sapa("Vina"));
		echo(sapa("Endro"));
	
	// belajar sendiri
	define("name",0.5);
		echo(name . "\n");
		function luassegitiga($t){
			$a = 6;
			return name * $a *$t;
		}
		echo (luassegitiga(12) ."\n");
		
	$a = 10;
	$b = 5;
	// arithmetic operator (operator aritmatika)
		echo($a % $b . "\n");
		echo($a ** $b . "\n");
	
	// assignment operator
		echo(($a += $b) . "\n");// $a = $a + $b <- a = 15
		echo(($y -= $z) . "\n");// $y = $y - $z <- 15 = 15 - 5 <- 10
		echo(($y *= $z) . "\n");// $y = $y * $z <- 10 = 10 * 5 <- 50
		echo(($y /= $z) . "\n");// $y = $y / $z <- 50 = 50 / 5 <- 10
		echo(($y %= $z) . "\n");// $y = $y % $z <- 10 = 10 & 5 <- 0
	
	// comparison operator
	$p = 5;
	$q = 5;
		echo(($p == $q) . "\n"); // equal -> true/false
		echo(($p === $q) . "\n"); // return true jika p=q dengan tipe data yang sama
		echo(($p != $q) . "\n"); // not equal -> true/false
		echo(($p <> $q) . "\n"); // not equal -> true/false
		echo(($p !== $q) . "\n"); // return true jika p tidak sama dengan q, atau tipe nya tidak sama
		echo(($p > $q) . "\n"); // p lebih besar dari q
		echo(($p < $q) . "\n"); // p lebih kecil dari q
		echo(($p >= $q) . "\n"); // p lebih besar sama dengan dari q
		echo(($p <= $q) . "\n"); // p lebih kecil sama dengan dari q
		
	// increment/decrement operator
	echo((++$p) . "\n");//($p =$p + 1) increment p dengan l, kemudian return p
	echo(($p++) . "\n");//($p =$p + 1) return p, increment p dengan 1
	echo(($p) . "\n");//
	echo((--$p) . "\n");//($p =$p + 1) decrement p dengan 1, kemudian return p
	echo(($p--) . "\n");//($p =$p + l) return p, decrement p dengan 1
	echo(($p) . "\n");//
	
	// Logical operator
	$r = true; $s = false;
	echo(($r and $s) . "\n"); // salah satu nya false maka false (bisa pakai simbol &&)
	echo(($r or $s) . "\n"); // salah satu nya true maka true (bisa pake simbol ||)
	echo(($r xor $s) . "\n"); // salah satu nya true maka true, tapi tidak duanya
	echo((!$p) . "\n"); // tidak p
	
	// String operator
	$t = "String 1";
	$u = "String 2";
	echo(($t . $u) . "\n"); // concatenation
	$t .=$u;
	echo($t . "\n");//
	$t .=$u;
	echo($t . "\n");//
	$t .=$u;
	echo($t . "\n");//
	echo(strtolower($t) ."\n");
	echo(strtoupper($u) ."\n");
	echo(strlen($t) ."\n");// return panjang(int) String
	echo(strrev($t) ."\n");// return reversed String t
	echo(strpos($t, "2") ."\n");// 
	echo(str_replace("String 2", "Kata", $t) ."\n");
	$str = "Xsis Academy Batch 332 PHP";
	echo(substr($str,0, 4) . "\n");
	echo(substr($str,4, 7) . "\n");
	
	//Latihan
	// 1. buat function untuk mengganti spasi menjadi separator
	//	 contoh : input : Xsis Academy
	//			  output : Xsis;Academy
	// 2. buatlah function untuk menukar 3 karakter depan belakang dan 3 karakter belakang kedepan
	//	 contoh : input : Academy
	//			  output: emydaca
	//			  input : beruang
	//			  output: anguber
	
	//1. jawaban
	 function ka($string1) 
	 {
		 return str_replace(" ",";",$string1);
	 }
	 echo ka("gass poolll" . "\n");
	 
	//2. jawaban
	 function ka1($m)
	 {
		 $o= substr($m, 0, 4);
		 $i= strrev($m);
		 $j= substr($m,4,5);
		 return $j . $o;
	 }
	 $m = "academy";
	 echo ka1($m);

	 // 2. jawaban yang logic
	 function swapCharacters($string)
	 {
		$length = strlen($string);
		
		$front = substr($string, 0, 3);
		$middle = substr($string, 3, $length -6);
		$end = substr($string, -3);

		return $end . $middle . $front;

	 }
	 $hasil = swapCharacters("academy");
	 echo $hasil . "<br>";

	 $hasil = swapCharacters("beruang");
	 echo $hasil . "<br>";
	
?>
