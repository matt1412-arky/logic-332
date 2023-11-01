<?php
//While hampir sama dengan for namun parameternya didalam kondisi

$i=1;
while ($i<=5){
    echo "$i ";
    $i++;
}
echo "\n";


$i=1;
do{
    echo "$i ";
    $i++;
}
        while ($i<=5);
echo "\n";


$menu ="";
$orderan=array(
        array("Nasi Uduk",),
        array("Nasi Bakar",),
        array("Nasi Kuning",),
);

while($menu!=999){
    $menu = readline("Pesan Menu: ") . "\n";
    echo "Apabila Selesai Ketik '999'" . "\n";
    $order="";
    switch($menu){
        case 1 ; $order = "Anda memesan ".$orderan[0][0];
                 echo "$order " . "\n";
        break;
        case 2 ; $order = "Anda memesan ".$orderan[1][0];
                 echo "$order " . "\n";
        break;
        case 3 ; $order = "Anda memesan ".$orderan[2][0];
                 echo "$order " . "\n";
        break;
        case 999 ; $order = "Pesanan Anda akan diproses, Terima Kasih";
                 echo "$order " . "\n";
        break;
        default; $order = "Tidak Ada menu";
                 echo "$order " . "\n";
        break;
    }
}
echo "\n";


$i=1;
$bil=1;
while($i<=5){
    $j=1;
    while($j<=5){
        if($i+$j==6){
            echo "$bil ";
            $bil++;
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



$i=1;
$plusGanjil=5; //bilangan tambah ganjil
$mtrGanjil=$plusGanjil*2+1;
$bilA=2; //nilai min
$bilB=53; //nilai maks tinggal ini jadi dinamis
while($i<=$mtrGanjil){
    $j=1;
    while($j<=$mtrGanjil){
    if((($j == $plusGanjil+1) && ($i == 1)) || (($j == $plusGanjil+1) && ($i == $mtrGanjil))){
        echo str_pad("$plusGanjil ",5);
    }
    else if((($i == 2) && ($j == 1)) || (($i == 2) && ($j == $mtrGanjil))){
        echo str_pad("$plusGanjil ",5);
    }
    else if((($i == $plusGanjil*2) && ($j == 1)) || (($i == $plusGanjil*2) &&($j == $mtrGanjil)) ){
        echo str_pad("$plusGanjil ",5);
    }
    else if($i == 1){
        echo str_pad("$bilA ",5);
        $bilA+=$plusGanjil;
    }
    else if($i>1 && $j==$mtrGanjil){
        echo str_pad("$bilA ",5);
        $bilA+=$plusGanjil;
    }
    else if($i>1 &&  $j == 1 ){
        echo str_pad("$bilB ",5);
        $bilB-=$plusGanjil;
    }
    else if($i==$mtrGanjil){
        echo str_pad("$bilB ",5);
        $bilB-=$plusGanjil;
    }
    else {
        echo str_pad("  ",5);
    }
    $j++;
    }
    $i++;
    echo "\n";
}
echo "\n";
?>