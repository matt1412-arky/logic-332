<?php
//master loop/loop didalam loop
for($i=1; $i<=4; $i++){
    for($j=1; $j<=4; $j++){
 echo $i . $j . " ";
    }
    echo "\n";
}

echo "\n";

//percobaan 
$numb=0;
for($i=1; $i<=3; $i++){
    for($j=1; $j<=3; $j++){
        if($i==2 && $j==2){
        $numb="x";
    }
    echo $numb . " ";
    $numb=0;
    }
    echo "\n";
}
echo "\n";

//catatan agar tetap mengikuti jangan if dengan if lagi, tapi memakai else if, penempatan logika if berpengaruh dengan hasil.
$a=3;
for($i=1; $i<=$a; $i++){
    for($j=1; $j<=$a; $j++){
        if($i+$j==$a+1){
            echo "* ";
        }
        else if($i==$j){
            echo "x ";
        }
        else if($i<$j){
            echo  "y ";
        }
        else{
            echo "z ";
        }
    }
    echo "\n";
}
echo "\n";


//TUGAS 1.:
//n=sampai bilangan n
$n=35;
$a=15;
for($i=$a; $i<=$n; $i++){
    for($j=$a; $j<=$n; $j+=2){
        echo $a ." "; 
        $a+=2;
        $i+=2;
    }
    echo "\n";
}
echo "\n";

//n=jumlah dimensi matrix
$n=3;
$a=15;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n; $j++){
        echo $a ." "; 
        $a+=2;
    }
    echo "\n";
}
echo "\n";


//TUGAS 2:
$n=3;
$ganjil=1;
$genap=2;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n; $j++){
          if(($i%2)==0){
            echo "$genap ";
            $genap+=2; 
        }  
          else{
            echo "$ganjil ";
            $ganjil+=2; 
          }
    }
    echo "\n";
}
echo "\n";

$n=5;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n; $j++){
        if($i==1){
            echo "A ";
        }         
        else if($i==$n){
            echo "C ";
        }
        else if($i>1 && $j==1){
            echo "D ";
        }
        else if($i>1 && $j==$n){
            echo "B";
        }
        else{
            echo "  ";
        }
    }
    echo "\n";
}
echo "\n";

$n=12;
$nilai=1;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n; $j++){
        $nilai = $i*$j;
        echo "$nilai ";
    }
    echo "\n";
}
echo "\n";
?>