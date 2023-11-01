<?php  
//=======================
// function solveMeFirst($a,$b){
//   // Hint: Type return $a + $b; below  
//     return $a + $b;
     
// }

// $handle = fopen ("php://stdin","r");
// $_a = fgets($handle);
// $_b = fgets($handle);
// $sum = solveMeFirst((int)$_a,(int)$_b);
// print ($sum);
// fclose($handle);

//========================
// function timeConversion($s) {
//   // Write your code here
//   $str=strtotime($s);
//   return date('H:i:s',$str);  
// }
// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $s = rtrim(fgets(STDIN), "\r\n");
// $result = timeConversion($s);
// fwrite($fptr, $result . "\n");
// fclose($fptr);


//============================
// function simpleArraySum($ar) {
//   // Write your code here
// return  array_sum($ar);
// }
// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $ar_count = intval(trim(fgets(STDIN)));
// $ar_temp = rtrim(fgets(STDIN));
// $ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
// $result = simpleArraySum($ar);
// fwrite($fptr, $result . "\n");
// fclose($fptr);

//=====================================

//  function diagonalDifference($arr) {
//   // Write your code here
//   $a=0;
//   $b=0;
//   $n = count($arr);
//   for($i=0;$i<$n;$i++){
//       for($j=0;$j<$n;$j++){
//           if($i == $j){
//               $a += $arr[$i][$j];              
//           } 
//           if(($i+$j) == ($n-1)){
//               $b += $arr[$i][$j];
//           }
//       }
//   }  
//   $c = abs($a-$b);     
//   return $c;
// }
// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $n = intval(trim(fgets(STDIN)));
// $arr = array();
// for ($i = 0; $i < $n; $i++) {
//   $arr_temp = rtrim(fgets(STDIN));
//   $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
// }
// $result = diagonalDifference($arr);
// fwrite($fptr, $result . "\n");
// fclose($fptr);


//=========================
// function staircase($n) {
//   // Write your code here
//   for($i=1; $i<=$n; $i++){
//     for($j=1;$j<=$n;$j++){
//       if($i+$j>$n){
//         echo "#";
//       }
//       else{
//         echo " ";
//       }
//     }
//     echo "\n";
//   }
// }
// $n = intval(trim(fgets(STDIN)));
// staircase($n);


//======================
// function miniMaxSum($arr) {
//   $max=max($arr);
//   $min=min($arr);
//   $total=array_sum($arr);
//   $maxSum=$total-$max;
//   $minSum=$total-$min;
  
//   echo $maxSum ." ". $minSum;
  
  

// }

// $arr_temp = rtrim(fgets(STDIN));

// $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

// miniMaxSum($arr);


//==========================
// function plusMinus($arr) {
//   $pluss=number_format(0,6);
//   $minus=number_format(0,6);
//   $null=number_format(0,6);
//   $panjangArr=count($arr);
//   for($i=0;$i<$panjangArr;$i++){
//     if($arr[$i]<0){
//       $min[] = $arr[$i];
//       $minus=number_format((count($min)/$panjangArr),6);
//     }
//     if($arr[$i]==0){
//       $nol[] = $arr[$i];
//       $null=number_format((count($nol)/$panjangArr),6);
//     }
//     if($arr[$i]>0){
//       $plus[] = $arr[$i];
//       $pluss=number_format((count($plus)/$panjangArr),6);
//     } 
//   }
//   echo "$pluss \n";
//   echo "$minus \n";
//   echo "$null \n";
// }
// $n = intval(trim(fgets(STDIN)));
// $arr_temp = rtrim(fgets(STDIN));
// $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
// plusMinus($arr);


//=========================
// function aVeryBigSum($ar) {
//   return array_sum($ar);
// }
// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $ar_count = intval(trim(fgets(STDIN)));
// $ar_temp = rtrim(fgets(STDIN));
// $ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
// $result = aVeryBigSum($ar);
// fwrite($fptr, $result . "\n");
// fclose($fptr);


//====================
// function compareTriplets($a, $b) {
//   $pointAlice=0;
//   $pointBob=0;
//   for($i=0;$i<count($a);$i++){
//       if($a[$i] > $b[$i]){
//           $alice[] = [$i];
//           $pointAlice = count($alice);
//       }
//       if($a[$i] < $b[$i]){
//           $bob[] = [$i];
//           $pointBob = count($bob);
//       }
//   }
//   return $total []=[($pointAlice),($pointBob)];
// }
// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $a_temp = rtrim(fgets(STDIN));
// $a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));
// $b_temp = rtrim(fgets(STDIN));
// $b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));
// $result = compareTriplets($a, $b);
// fwrite($fptr, implode(" ", $result) . "\n");
// fclose($fptr);



//====================================
// function birthdayCakeCandles($candles) {   
//   sort($candles);
//   $panjang=count($candles);
//   for($i=0;$i<$panjang;$i++){
//     if($candles[$i]==$candles[($panjang-1)]){
//       $tertinggi[] = $candles[$i];
//       $jumlah=count($tertinggi);
//       //  $jumlah;
//     }
//   }
//   return $jumlah;
// }
// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $candles_count = intval(trim(fgets(STDIN)));
// $candles_temp = rtrim(fgets(STDIN));
// $candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));
// $result = birthdayCakeCandles($candles);
// fwrite($fptr, $result . "\n");
// fclose($fptr);


//===============================
// function camelcase($s) {
//  $temp = '';
//  $len = strlen($s);
//  $split = (str_split($s));
//       for ($i = 0; $i < $len; $i++) {
//       // $word = $s[$i];
//           $word=$split[$i];
//   if ($word >= 'A' && $word <= 'Z' && $i > 0) {
//     $temp .= ' ' . $word;
//   }
//   else {
//     $temp .= $word;
//   } 
// }
// $hasil = explode(" ", $temp);
// $hasil = count($hasil);
// return $hasil;
// }

// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $s = rtrim(fgets(STDIN), "\r\n");
// $result = camelcase($s);
// fwrite($fptr, $result . "\n");
// fclose($fptr);


//=========================

// function minimumNumber ($n, $password) {
//  $password = str_split ($password);
//  $no = str_split ("0123456789");
//  $strKecil = str_split("abcdefghijklmnopqrstuvwxyz");
//  $strBesar = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
//  $simbol = str_split ("!@#$%^&*()-+");
// 	$number = 1 - min (1, count (array_intersect ($password, $no)));
// 	$lowCase = 1 - min (1, count (array_intersect ($password,$strKecil)));
// 	$upperCase = 1 - min (1, count (array_intersect ($password, $strBesar)));
// 	$symbol = 1 - min (1, count (array_intersect ($password, $simbol)));
// 	$jumlah = $number + $lowCase + $upperCase + $symbol;
		
//   return max ($jumlah, 6 - $n);
//   }


//=========================
// function marsExploration($s) {
        // $sos=str_split($s,3);
        // $n=0;
        // $count = strlen($s);
        // $split = str_split($s,3);
        // $arrcount= count($split) ;
        // for($i=0;$i < count($sos);$i++){
        //     if($split[$i]=$sos[0]){
        //         $split = $sos[$i];
        //         $split = str_split($split, 1);
        //         if($split[0] != "S"){$n++;}
        //         if($split[1] != "O"){$n++;}
        //         if($split[2] != "S"){$n++;}            
        //     }
        // }  
    // return $n;
// }
// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $s = rtrim(fgets(STDIN), "\r\n");
// $result = marsExploration($s);
// fwrite($fptr, $result . "\n");
// fclose($fptr);
             

//==============================
// function caesarCipher($s, $k) {
//     $strKapital = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
//     $strKecil = str_split("abcdefghijklmnopqrstuvwxyz");
//     $hasil = ""; 
// 	// Jika jumlah pergeseran lebih dari 26, kita kurangkan hingga tidak melebihi 26
//     if ($k > 26) {
//         while ($k > 26) {
//             $k -= 26;
//         }
//     }
//     $strArr = str_split($s, 1);
// 	// Looping melalui setiap karakter dalam pesan
//     for ($i = 0; $i < count($strArr); $i++) {
// 		// Memeriksa apakah karakter adalah huruf dalam alfabet
//         if (ctype_alpha($strArr[$i])) {
// 			// Memeriksa apakah karakter adalah huruf kapital atau huruf kecil
//             $checkAlpha = ctype_upper($strArr[$i]);
// 			// Menentukan array alfabet yang sesuai berdasarkan huruf kapital atau kecil
//             if ($checkAlpha) {
//                 $alpha = $strKapital;
//             } else {
//                 $alpha = $strKecil;
//             }  
// 			// Looping melalui alfabet yang sesuai
//             for ($j = 0; $j < count($alpha); $j++) {
// 				// Menghitung pergeseran karakter dengan operasi modulo
//                 $diff = ($j + $k) % count($alpha);
// 				// Jika karakter sesuai dengan karakter alfabet, tambahkan hasil pergeseran ke hasil enkripsi
//                 if ($strArr[$i] == $alpha[$j]) {
//                     $hasil .= $alpha[$diff];
//                     break;
//                 }
//             }
//         } else {
// 			// Jika karakter bukan huruf dalam alfabet, tambahkan karakter tersebut langsung ke hasil enkripsi
//             $hasil .= $strArr[$i];
//         }
//     }
    
//     return $hasil;
// }

// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $n = intval(trim(fgets(STDIN)));
// $s = rtrim(fgets(STDIN), "\r\n");
// $k = intval(trim(fgets(STDIN)));
// $result = caesarCipher($s, $k);
// fwrite($fptr, $result . "\n");
// fclose($fptr);


//==========================================
// function hackerrankInString($s) {
//     $rule="hackerrank";
//     $n=0;
//     for($i=0;$i<strlen($s);$i++){
//         if($rule[$n]==$s[$i]){
//             $n++;
//         }
//         if($n==10){
//             return "YES";
//         }
//     }
//     return "NO";
// }

// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $q = intval(trim(fgets(STDIN)));
// for ($q_itr = 0; $q_itr < $q; $q_itr++) {
//     $s = rtrim(fgets(STDIN), "\r\n");

//     $result = hackerrankInString($s);

//     fwrite($fptr, $result . "\n");
// }
// fclose($fptr);


//====================================

// function twoStrings($s1, $s2) {
//     $s1Arr= str_split($s1);
//     $s2Arr= str_split($s2);
//     $loop=strlen(implode("",$s1Arr).implode("",$s2Arr));
//     $boolean=min(1,count(array_intersect($s1Arr,$s2Arr)));
//     if($boolean==1){
//         return "YES";
//     }
//     elseif($boolean==0){
//         return "NO";
//     }
// }

// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $q = intval(trim(fgets(STDIN)));
// for ($q_itr = 0; $q_itr < $q; $q_itr++) {
//     $s1 = rtrim(fgets(STDIN), "\r\n");
//     $s2 = rtrim(fgets(STDIN), "\r\n");
//     $result = twoStrings($s1, $s2);
//     fwrite($fptr, $result . "\n");
// }
// fclose($fptr);

//=========================
// function pangrams($s) {
// // $s="We promptly judged antique ivory buckles for the next prize";
//     $str=strtolower($s);
//     $split=(str_split($str));
//     sort($split);
//     $rule="abcdefghijklmnopqrstuvwxyz";
//     $char=0;
//     $str=implode("",$split);
//         for($i=0;$i<strlen($s);$i++){
//             if($rule[$char]==($str[$i])){
//                 $char++;
//             }
//             if($char==26){
//                 return "pangram";
//             }
//         }
//     return "not pangram";
// }
// // echo(pangrams($s));

// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
// $s = rtrim(fgets(STDIN), "\r\n");
// $result = pangrams($s);
// fwrite($fptr, $result . "\n");
// fclose($fptr);


//=========================================





?>