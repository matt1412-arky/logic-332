<?php
// soal 3
$a = array(17,28,30);
$b = array(99,16,8);
function compareTriplets($a, $b) {
    $arrayA = $a;
    $arrayB = $b;
    $arrayHasil = array();
    $x=0;
    $y=1;
   for ($i=0; $i<count($arrayA); $i++){
       
    if ($arrayA[$i]>$arrayB[$i]){
        $arrayHasil[$x]+=1;
    } 
    else if($arrayA[$i]<$arrayB[$i]){
        $arrayHasil[$y]+=1;
    }
    else{
        
    }
   }
   ksort($arrayHasil);
    return print_r($arrayHasil);
}
compareTriplets($a, $b);
?>