<?php
//Keliling Persegi Panjang
// function K($p, $t) {
// 	return $p + $p + $t + $t;
// }
// $p = 4;
// $t = 5;
// $kll = K($p, $t);

// echo ("Panjang Persegi = " . $p . "\n");
// echo ("Tinggi Persegi = " . $t . "\n");
// echo ("Keliling Persegi = " . $kll . "\n");
// echo ("\n");

// //Salam
// function salam($nama, $hari) {
// 	echo ("Dear, " . $nama . "\n");
// 	echo ("Selamat " . $hari . "\n");
// }
// $nama = "Rudi";
// $hari = "Siang";
// salam($nama, $hari);



// $s="We promptly judged antique ivory buckles for the next prize";
$s="We promptly judged antique ivory buckles for the prize";
$rule="abcdefghijklmnopqrstuvwxyz";
$s1Arr= str_split($s);
$s2Arr= str_split($rule);
 strlen($s)-count(array_intersect($s1Arr,$s2Arr));
$boolean=min(1,count(array_intersect($s1Arr,$s2Arr)));
    if($boolean==1){
        // return "pangram";
        echo "pangram";
    }
    elseif($boolean==0){
        echo "not pangram";
        // return "not pangram";
    }
    // function pang($s){
    //     strtolower($s);
    //     $rule="abcdefghijklmnopqrstuvwxyz";
    //     // $str =str_replace(" ","",$s);
    //     $str =str_replace(" ","",$s);
    //     $a = count(array_unique(str_split($str)));
    //     $b = count(array_unique(str_split($rule)));
    //     $n=0;
    //     for($i=0;$i<strlen($str);$i++){
    //         if($b[$n]==$a[$i]){
    //             $n++;
    //             echo "$n \n";
    //         }
    //         if($n==26){
    //             return "YES";
    //         }
    //     }
    //     return "NO";
    // }

    // echo pang($s);


    // $c="hackerrankk";
    // function hackerrankInString($c) {
    //         $rule="hackerrank";
    //         $a = count(array_unique(str_split($c)));
    //         $n=0;
    //         for($i=0;$i<strlen($c);$i++){
    //             if($rule[$n]==$a[$i]){
    //                 echo $n++;
    //             }
    //             if($n==10){
    //                 return "YES";
    //             }
    //         }
    //         return "NO";
    //     }

    // $str =str_replace(" ","",$s);
    // $a = count(array_unique(str_split($str)));
    // echo "total = ".$a;

?>
