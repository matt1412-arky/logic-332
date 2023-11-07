<?php

/*
//soal 1 
for($N=1; $N<=13; $N+=2){
    print("$N ");
}
echo("\n");

//soal 3
for($N=1; $N<=20; $N+=3){
    echo("$N ");
}
echo("\n");

//soal 4
for($N=1; $N<=25; $N+=4){
    echo("$N ");
}
echo("\n");

//soal 5                              
for($N=1; $N<=17; $N+=4){
    echo("$N ");
    if($N == 5 | $N == 13){
        echo " * ";
    }
}
echo("\n");

//soal 6                               
$x = 1;
$y = 0;
for($i=1 ; $i<=5; $i+=1){
    echo"$x ";
    $x += 4;
    $y++;
    if($y % 2 == 0){
        echo" * ";
        $x += 4;
    }    
}
echo("\n");


//soal 8                        
$x = 1;
for($N=1; $N<=7; $N+=1){
    $x *= 3;
    echo("$x ");  
}
echo("\n");

//soal 9 
$x = 1;
for($N=1; $N<=5; $N+=1){
    $x *= 4;
    echo "$x ";
    if($x == 16 | $x == 256){
        echo " * ";
    } 
}
echo("\n");

//soal 10
$x = 1;
$y = 0;
for($N=1; $N<=7; $N+=1){
    $x *= 3;
    $y++;
    if($y % 4 == 0){
        echo "xxx ";
        $x *= 3;
    }
    echo"$x ";
}

//Tugas buatlah matriks dinamis dengan isi bilangan ganjil 15 . n

$temp = 15;
$n = 4;
for($i=1; $i<=$n; $i+=1){            //di loop terlebih dahulu 
    for($j=1; $j<=$n; $j+=1){        // di loop hingga selesai
        echo("$temp ");
        $temp+=2;    
    }
    echo"\n";
}

$temp = 1;
$a = 2;
$n = 5;
for($i=1; $i<=$n; $i+=1){            //di loop terlebih dahulu 
    for($j=1; $j<=$n; $j+=1){        // di loop hingga selesai
        if($i%2!=0){
            echo("$temp ");
            $temp+=2; 
        } else{    
            echo("$a ");
            $a+=2;
        }   
    }
    echo"\n";
}



$n = 5;
for($i=1; $i<=$n; $i+=1){            //di loop terlebih dahulu 
    for($j=1; $j<=$n; $j+=1){        // di loop hingga selesai
        if($i == 1){
            echo("A ");
        } elseif($i==n){    
            echo("C ");
        } elseif($j==1){
            echo("D ");
        } elseif($j==n){
            echo("B ");
        } else {
            echo("  ");
        }
    }
    echo"\n";
}

*/

//Times Table 
$n = 12;
$temp = 1;
for($i=1; $i<=$n; $i+=1){            //di loop terlebih dahulu 
    for($j=1; $j<=$n; $j+=1){        // di loop hingga selesai
        $temp = $i * $j;
        echo"$temp ";   
    }
    echo"\n";
}


?>