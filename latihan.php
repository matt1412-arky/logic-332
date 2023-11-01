<?php
/*	echo ("Batch 332 PHP\n");
	print ("Xsis Academy\n");
	echo "Langsat III Nomor 5\n";

	$a = 1000;
	$b = 200;
	$c = "Seribu dua ratus";
	echo ("Nilai a = " . $a . "\n");
	echo ("Nilai b = " . $b . "\n");
	echo ($a . " + " . $b . " = " . $c);

	$d = $a + $b;
	echo ("a + b = " . $d . "\n");
*/

	// $m = 5;
	// $c = 2;
	// $einsten = $m * ($c * $c);
	// echo ("m = " . $m . "\n");
	// echo ("c = " . $c . "\n");
	// echo ("enstein = " . $einsten . "\n");
	// echo ("\n");

	// $phi = 3.14;
	// $r = 7;
	// $luas = $phi * ($r * $r);
	// echo ("phi = " . $phi . "\n");
	// echo ("r = " . $r . "\n");
	// echo ("Luas Lingkaran = " . $luas . "\n");
	// echo ("\n");

	// $I = 8;
	// $a = 3;
	// $v = $I * $a;
	// echo ("Volt = " . $v ."\n");



//=========================================

// $arr=["basdfj","asdlkjfdjsa","bnafvfnsd","oafhdlasd"];

// // function gems($arr){
  
//   $n='0';
//   $oldArr=[];
//   for($i=0;$i<count($arr);$i++){
//     $str[] = array_unique(str_split($arr[$i]));
//   }
//   print_r($str);
//   $same= array_intersect($str[0],$str[1],$str[2],$str[3]);
//   // print_r($same);

// // for($i=0;$i<count($str);$i++){
// //   if($rule[$n]==$s[$i]){
// //     $same= array_intersect($str[$n],$str[$i]);
// //                 $n++;
// //             }
// // }
// print_r ($same);
//   // for ($i = 0; $i < count($srt) ; $i++){
//   // // //   // for ($j = 0; $j < count($arr) ; $j++)
//   //   $newArr[] = array_intersect($srt[$i],$same);
//   // }
// // print_r($result=($newArr[count($newArr)-1]));
// // for($i = 0; $i < count($srt) ; $i++){
// // $hasil= (array_intersect($newArr[$i],$newArr[$i],$newArr[$i]));
// // }
// // $result=count($hasil);
// // return ($result);
// // }



//==========================================
$s=999100010001;
// function number($s){
$value=str_split($s);
print_r($value);
$countValue=count($value);
$n=0;
	for($i=0;$i<count($value);$i++){
		$n++;
		if($countValue==$n){
				$n++;
				$yes="YES $value[0]";
				echo $yes;
				// return $yes;
			}	    
		else{
			echo "NO";
			}
		}
		// return "NO";
// }
	
// echo	number($s);	




?>
