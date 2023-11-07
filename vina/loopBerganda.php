<?php
/*
for($i=1; $i<=3; $i+=1){            //di loop terlebih dahulu 
    for($j=1; $j<=3; $j+=1){        // di loop hingga selesai
        echo($i.$j ." ");
    }
    echo"\n";

// (i,j)  = adalah elemen indexs matrik
}

echo"\n";

$temp = 1;
for($a=1; $a<=3; $a+=1){            //di loop terlebih dahulu 
    for($b=1; $b<=3; $b+=1){        // di loop hingga selesai
       echo"$temp ";
       $temp++;                     // berupa nilai (bukan lagi posisi matriks)
    }
    echo"\n";
}

echo"\n";
$temp = 9;
for($a=1; $a<=3; $a+=1){            //di loop terlebih dahulu 
    for($b=1; $b<=3; $b+=1){        // di loop hingga selesai
       echo"$temp ";
       $temp--;                     // berupa nilai (bukan lagi posisi matriks)
    }
    echo"\n";
}

$temp = 0;
for($i=1; $i<=3; $i+=1){            //di loop terlebih dahulu 
    for($j=1; $j<=3; $j+=1){        // di loop hingga selesai
        if($i==2 && $j==2){
            echo"X";
            } else{
                echo"$temp";
            }
    }
    echo"\n";
}

for($i=1; $i<=5; $i+=1){            //di loop terlebih dahulu 
    for($j=1; $j<=5; $j+=1){        // di loop hingga selesai
        if($i==$j){
            echo"Y ";
            } elseif($j<=$i){ 
                echo"Y ";
                } else{
                    echo"Z ";
                }     
    }
echo"\n";
}

echo"\n";

// ATAU DAPAT DITULIS

for($i=1; $i<=5; $i+=1){            //di loop terlebih dahulu 
    for($j=1; $j<=5; $j+=1){        // di loop hingga selesai
        if($i==$j)
            echo("X ");
        elseif($i<$j)
            echo("Y ");
        else
            echo("Z ");
    }
    echo"\n";
}

//penulisan menjadi dinamis
$n = 7;
for($i=1; $i<=$n; $i+=1){            //di loop terlebih dahulu 
    for($j=1; $j<=$n; $j+=1){        // di loop hingga selesai
        if($i==$j)
            echo("X ");
        elseif($i<$j)
            echo("Y ");
        else
            echo("Z ");
    }
    echo"\n";
}

$n = 3;
for($i=1; $i<=$n; $i+=1){            //di loop terlebih dahulu 
    for($j=1; $j<=$n; $j+=1){        // di loop hingga selesai
        //if(($i+$j) == ($n+1))     // untuk silang kanan
        if($j . $i == $i . $j)      // untuk silang kiri
            echo("* ");
        elseif($i == $j)
            echo("X ");
        elseif($i<$j)
            echo("Y ");
        else
            echo("Z ");
    }
    echo"\n";
}
*/




?>