<?php

$temp = 1;
for($i=1; $i<=3; $i++) {
    for($j=1; $j<=3; $j++){
        echo "$temp " ;
        $temp++;
    }
// echo "\n";
}
echo "\n";

$temp = 9;
for($i=1; $i<=3; $i++) {
    for($j=1; $j<=3; $j++){
        echo "$temp " ;
        $temp--;
    }
echo "\n";
}

for($i=1; $i<=3; $i++) {
    for($j=1; $j<=3; $j++){
    if($i==2 && $j==2){
        echo "x ";
    }
    else{
        echo "0 " ;
    }
    }
echo "\n";
}


for($i=1; $i<=3; $i++) {
    for($j=1; $j<=3; $j++){
    if($i<$j){
        echo "y ";
    }
    elseif($i>$j){
         echo "0 ";   
    }
    else{
        echo "x " ;   
    }
    }
echo "\n";
}


$n=3;
$b=1;
for($i=1; $i<=$n; $i++) {
    for($j=1; $j<=$n; $j++){
        if(($i + $j) == ($n+$b)){
            echo "* ";
            }
        elseif($i>$j){
            echo "Z ";   
            }
        elseif($i==$j){
            echo "X " ;   
            }
        elseif($i<$j){
            echo "Y ";
            }
        else{
            echo " ";
            }
    }
echo "\n";
}


/*
Tugas :
1. Buat matrix dinamis dengan isi bilangan ganjil dari 15 - n
2. 1 3 5
   2 4 6
   7 9 11

3. A A A A A 
   D       B
   D       B
   D       B
   C C C C C
*/

//1.
$m=6;
$n=1;
for($i=1;$i<=$m;$i++){
    for($j=1;$j<=$m;$j++){
        echo $i;   
        echo "$j ";   
    }  
    // echo $i;
    echo "\n";
}

//2.
$m=3;
$n=1;
$l=2;
for($i=1;$i<=$m;$i++){
    for($j=1;$j<=$m;$j++){
        if($i % 2 != 0){
            echo "$n ";   
            $n+=2;
        }    
        elseif($i % 2 == 0){
            echo "$l ";
            $l+=2;
        }
    }  
    echo "\n";
}

//3. 
$m=5;
$ad =1;
$bc =5;
for($i=1;$i<=$m;$i++){
    for($j=1;$j<=$m;$j++){
        if($i==$ad){
            echo "A ";   
        }    
        elseif($i==$bc){
            echo "C ";
        }
        elseif($j==$bc){
            echo "B ";   
        }
        elseif($j==$ad){
            echo "D ";  
        }
        else{
            echo "  ";
        }       
    }  
    echo "\n";
}


$m=12;
for($i=1;$i<=$m;$i++){
    for($j=1;$j<=$m;$j++){    
        $b= $i*$j;      
            echo $b . " " ;
        }
        echo "\n";
    } 
    echo "\n";


?>