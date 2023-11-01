<?
	function f($x) 
		{
			return 3*$x;
		}
	echo (f(7) . "\n");

	$x = 9;
	echo (f($x). "\n");
	echo (f(9) . "\n");

	$y = 100;
	echo (f($y + $x) . "\n");
	
	$z = f($y);
	echo ($z . "\n");

	$nut = f(5) * 7;
	echo ($nut . "\n");

	$hasil = f(5) + f($x);
	echo($hasil . "\n");

	function E($m, $c)
		{	
			$result = $m * $c * $c;
			return $result;
		}	
	$enstein = E(5, 3);
	echo ($enstein . "\n");
	
	//latihan 1 
	
	function V($i, $r)
		{
			return $i * $r;
		}
		
	function I($v, $a)
		{
			return $v / $a;
		}
	
	function R($v, $i)
		{
			return $v * $i;
		}
	
	
	$i = 4;
	$r = 5;
	
	
	$tegangan = V($i, $r);
	$arus = I($tegangan,$r);
	$beban = R($arus,$tegangan);
		
		echo("arus = " . $arus . "\n");
		echo("tegangan = " . $tegangan . "\n");	
		echo("beban = "  . $beban . "\n");

	// keliling lingkaran

	function kelilingLingkaran($r)
		{ 
			$pi = 3.14;
			return 2 * $pi * $r; 
		}

		echo(kelilingLingkaran(7)  . "\n");
	
	define ("pi" , 3.14);
	echo (pi . "\n");
	function luasLingkaran($r)
		{
			return pi * $r * $r;
		}
		echo(luasLingkaran(5)  . "\n");

	//input nama
	function greet($nama)
		{ 
			echo ("welcome  $nama");
			echo ("hello  $nama");
			echo ("selamat  $nama");
		}
		echo greet("Bowo \n");

	function sapa($nama)
		{	
			return "welcome $nama\nhello $nama\nselamat $nama";
		}
		echo sapa("ilham sangaji \n");



	//COBA COBA	
	define ("harga" , 500);
	function parkir($Tjam)
		{
			return harga * $Tjam;
			
		}		
		
		$Nplat = "B321Z";
		$Tjam = 20;

		echo ("\n" . "No Plat : " . $Nplat . "\n");
		echo ("\n" . "Total Jam = " . $Tjam . "\n");
		echo ("\n" . "Total Bayar = " . parkir($Tjam) . "\n");
		$bayar1=50000;
		echo ("\n" . "Bayar = " . $bayar1 . "\n");
		echo ("\n" . "Kembalian = " . $bayar1 - parkir($Tjam) . "\n");

	define ("hargaa" , 300 * $Tjam);
	function parkirr($Tjam)
		{
			return hargaa; 
			
		}	
		echo ("\n" . "No Plat : " . $Nplat . "\n");
		echo ("\n" . "Total Jam = " . $Tjam . "\n");
		echo ("\n" . "Total Bayar = " . parkirr(5)	. "\n");
	
	$bayar=50000;
		echo ("\n" . "Bayar = " . $bayar . "\n");
		echo ("\n" . "Kembalian = " . $bayar - parkirr(5) . "\n");

	//aritmetic operators +-*/
	//assignment operators
	
	$p = 9;
	$q = 9;
	
	echo (($p=$q) . "\n");
	echo (($p+=$q) . "\n");
	echo (($p-=$q) . "\n");
	echo (($p*=$q) . "\n");
	echo (($p/=$q) . "\n");
	echo (($p%=$q) . "\n");

	//comparison operators
	echo (($p==$q) . "\n");
	echo (($p===$q) . "\n");
	echo (($p!=$q) . "\n");
	echo (($p<>$q) . "\n");
	echo (($p>$q) . "\n");
	echo (($p<$q) . "\n");
	echo (($p>=$q) . "\n");
	echo (($p<=$q) . "\n");

	// increment / decrement operators
	echo ((++$q) . "\n");
	echo (($q++) . "\n");
	echo ((--$q) . "\n");
	echo (($q--) . "\n");

	//logical operator
	echo (($p and $q) . "\n");
	echo (($p or $q) . "\n");
	echo (($p xor $q) . "\n");
	echo (($p && $q) . "\n");
	echo (($p || $q) . "\n");

	//string operator
	$s="String 1";
	$d="String 2";
	echo (($s . $d) . "\n");
	$s .= $d;
	echo ($s . "\n");
	$s .= $d;
	echo ($s . "\n");


	//string edit
	echo (strtolower($s) . "\n");
	echo (strtoupper($s) . "\n");
	echo (strlen($s) . "\n");
	echo (strrev($s) . "\n");
	echo (strpos($s,"i") . "\n");
	echo (str_replace("String","kata", $s ) . "\n");
	

	
	//latihan
	function kata1($string1)
		{	
			return str_replace(" ",";", $string1 );
		}
		echo kata1("le minerale" . "\n");
	
	function kata2($string2)
		{	
			$kd = substr($string2, 0, 3);
			$rv = strrev($string2);
			$kb = substr($rv, 0, 3);
			$rvkb = strrev($kb);

			return  $rvkb . substr ($string2, 3, -3) . $kd;
		}
		echo kata2("beruangacademy")."\n";


		function katalain($string3)
		{	
			$kd = substr($string3, 0, 3);
			$kt = substr($string3, 3, 6);
			$kb = substr($string3, -3);

			return  $kb . $kt . $kd;
		}
		echo kata2("beruangacademy");
?>