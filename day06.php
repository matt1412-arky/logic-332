<?php
//while melakukan loop sambil cek kondisi
$i=1;
while($i<=5){
    echo $i . " ";
    $i++;
}
echo ("\n");

//do while melakukan loop terlebih dahulu setelah itu cek kondisi
$i=1;
do{
    echo $i . " ";
    $i++;
}while($i<=5);
echo ("\n");


// $input = readline("Masukkan data : ");
// // echo ($input . "\n");

// while($key != $menu){

// }

// $item = "";
// switch($menu){
//     case 1 : $item
// }


//nested while
$i = 1;
while($i<=3){
    $j = 1;
    while($j<=3){
        echo $i . $j . " ";
        $j++; 
    }
    echo "\n";
    $i++;
}
echo "\n";


$count=1;
$i = 1;
while($i<=5){
    $j = 1;
    while($j<=5){
        if($i + $j==6){
            echo "$count ";  
            $count++; 
        }    
        else{
            echo "- ";
        }
        $j++; 
    }
    echo "\n";
    $i++;
}
echo "\n";

$temp=2;
for($i=1; $i<=7; $i++) {
    for($j=1; $j<=7; $j++){
        echo "$temp ";
        $temp+=3;
    }
    echo "\n";
} 
echo "\n";



$nilai1=2;
$nilai2=53;

// for($i=1; $i<=7; $i++) {
//     for($j=1; $j<=7; $j++){
//         if(($i==1 && $j==4)||($i==2 && $j==1)||($i==2 && $j==7)||($i==6 && $j==1)||($i==6 && $j==7)||($i==7 && $j==4)){
//             echo "3 ";  
//         }
//         elseif(($i==1 || $j==7)){
//             echo "$nilai1 "; 
//             $nilai1+=3;
//         }
//             elseif($j==1 || $i==7){
//             echo "$nilai2 "; 
//             $nilai2-=3;
//         }
//         else{
//             echo "   ";    
        
//         } 
//     }  
//     echo "\n";
// }


// function sum($x,$n){
//     for($i=1;$i<=((($n * 2)+(($n-2)*2)));$i++){
//         $x+=3;
//     }
//     return $x;
// }

// $x=2;
// $n=5;
// $mid=round($n/2);
// $max=sum($x,$n);
// for($i=1; $i<=$n; $i++) {
//     for($j=1; $j<=$n; $j++){
//         if(($j==$mid && $i==1)||$i==$n){
//             echo "3 ";  
//         }
//         elseif(($i==1 || $j==7)){
//             echo "$nilai1 "; 
//             $nilai1+=3;
//         }
//             elseif($j==1 || $i==7){
//             echo "$nilai2 "; 
//             $nilai2-=3;
//         }
//         else{
//             echo "   ";    
        
//         } 
//     }  
//     echo "\n";
// }


?>