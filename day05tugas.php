<?php 

//Soal 1
$n=1;
for($i=1;$i<=7;$i++){
    echo $n . " ";
    $n+=2;
}
echo "\n";

//Soal 3
for($i=1;$i<=19;$i+=3){
    echo $i . " ";
}
echo "\n";

//Soal 4
for($i=1;$i<=25;$i+=4){
    echo $i . " ";
}
echo "\n";

//Soal 5
$n=1;
for($i=1; $i<=5; $i++){
    echo "$n ";
    $n+=4;
    if($i % 2 == 0){
        echo " * ";
    }
    else{
    }
}
echo "\n";

//Soal 6
$n=1;
for($i=1; $i<=7; $i++){

    if($i % 3 == 0){
        echo " * ";
    }
    else{
        echo "$n" . " ";
    }
        
    $n+=4;
}
echo "\n";

//Soal 8
$z=3;
for($i=1; $i<=7; $i++){
    echo $z . " " ;
    $z*=3;
}
echo "\n";

// Soal 9
$c=4;
for($i=1; $i<=5; $i++){
    echo $c . " " ;
    $c*=4;
        if($i % 2 == 0){
            echo " * ";
        } else {        
        }
    }
echo "\n";

//Soal 10
$z=3;
for($i=1; $i<=7; $i++){
    if($i % 4 == 0){
        echo "XXX" . " ";
    }
    else{
        echo $z . " ";
    }
    $z*=3;
}
echo "\n";

?>