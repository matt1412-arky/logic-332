<?php

    // 1. replace spasi menjadi separator - - - - - - - - - - - - - //

	$a = "i love you so";
	echo($a . " menjadi:\n");
	echo(str_replace(" ", ";" , $a) . "\n"); // - - <<-- expected result "i;love;you;so"

	// 2. function tukar 3 karakter belakang kedepan dan sebaliknya //
	
	$a = "beruang"; // - - <<-- string yang mau diubah

	function tukar($str){
		$a = substr($str, 0, 3);
		$b = substr($str, strlen($str) - 3, 3);
		$str1 = substr($str, 3);		// - - <<-- hapus 3 karakter depan
		$str1 = strrev($str1);			// - - <<-- reverse/balik string
		$str2 = substr($str1, 3); 		// - - <<-- hapus 3 karakter depan
		$str2 = strrev($str2);			// - - <<-- revers/balik string ke semula
		$res = $b . $str2 . $a;
		return $res;
	}

	echo($a . "\n");
	echo(tukar($a) . "\n");	// - - <<-- expected result "anguber"

	// 2. revision

	function tukar_2($str){
		$str_len = strlen($str);

		$start = substr($str, 0 ,3);
		$mid = substr($str, 3, $str_len - 6);
		$end = substr($str, -3);
		$switched = $end . $mid . $start;

		return $switched;
	}
	echo tukar_2($a);

?>