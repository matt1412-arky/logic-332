<?php
	//einstein = m * (c * c)
	echo("\neinstein = m * (c * c)\n");
	$m = 1;
	$c = 2;
	$einstein = $m * ($c * $c);
	echo($m . " * " . " ( ". $c . " )^2 = " . $einstein . "\n");
	
	//luas lingkaran = p(r*r)
	echo "\nluas lingkaran = pi * (r * r)\n";
	$r = 3;
	$p = 3.14;
	$llingkaran = $p * ($r * $r);
	print($p . " * " . " ( " . $r . " )^2" . " = " . $llingkaran . "\n");
	
	//volt = i * r
	echo("\nvolt = i * r\n");
	
	/*
	$i = (int)readline('Enter current: ');
	$r = (int)readline('Enter ressitance: ');
	*/
	
	$i = 10;
	$r = 20;
	$v = $i * $r;
	echo ($i . " * " . $r ." = ". $v);
?>