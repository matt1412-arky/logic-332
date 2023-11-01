<?php
// $a=1;
// $deret=2;
// for($i=1; $i<=7; $i+=1)
//  {
//     echo $a . " ";
//     $a+=$deret;
//  }
// echo  "\n";

//Soal No. 1
for($i=1; $i<=13; $i+=2)
 {
    echo "$i ";
 }
echo  "\n";


 //Soal No. 3
 for($i=1; $i<=19; $i+=3)
 {
    echo "$i ";
 }
 echo  "\n";


 //Soal No. 4
 for($i=1; $i<=25; $i+=4)
 {
    echo "$i ";
 }
 echo  "\n";


 //Soal No. 5
 for($i=1; $i<=17; $i+=4)
 {
    echo "$i ";
    if(($i == 5 || $i == 13)){
        echo "* "; 
    }
 }
 echo  "\n";


 //Soal No. 6
 $a = 0;
 $nilai = 0;
 for($i=1; $i<=25; $i+=4)
 {
    echo "$i ";
    $a++;
    if(($a % 2) == 0){
        echo "* ";
        $i += 4;
    }
 }
echo  "\n";


//Soal No. 8
$a=1;
for($i=1; $i<=7; $i++)
{
    $a *= 3;
    echo "$a ";
}
echo  "\n";


//Soal No. 9
$a=1;
for($i=1; $i<=5; $i++)
{
    $a *= 4;
    echo "$a ";
    if(($i % 2) == 0){
        echo "* "; 
    }
}
echo  "\n";


//Soal No. 8
$a=1;
$b=0;
for($i=1; $i<7; $i++)
{
    $a *= 3;
    $b++;
    if(($b % 4) == 0){
        echo "xxx "; 
        $a *= 3;
    }
    echo "$a "; 
}
echo  "\n";

?>
