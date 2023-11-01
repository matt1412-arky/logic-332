<?php
$menu ="";
$orderan=array(
        array("Nasi Uduk",),
        array("Nasi Bakar",),
        array("Nasi Kuning",),
);
echo "PESAN NASI \n";
echo " 1. Nasi Uduk \t\t 5000 \n 2. Nasi Bakar \t\t 7000 \n 3. Nasi Kuning \t 5000 \n";

while($menu!=88){
    $menu = readline("Pesan Menu: ") . "\n";
    $order="";
    switch($menu){
        case 1 ; $order = "Anda memesan ".$orderan[0][0];
                $orderan[0][1]=$orderan[0][1]+1;
                echo "$order " . "\n";
                echo "Apabila Selesai Ketik '88'" . "\n";
        break;
        case 2 ; $order = "Anda memesan ".$orderan[1][0];
                $orderan[1][1]=$orderan[1][1]+1; 
                echo "$order " . "\n";
                echo "Apabila Selesai Ketik '88'" . "\n";
        break;
        case 3 ; $order = "Anda memesan ".$orderan[2][0];
                $orderan[2][1]=$orderan[2][1]+1; 
                echo "$order " . "\n";
                echo "Apabila Selesai Ketik '88'" . "\n";
        break;
        case 88 ; $order = "Pesanan Anda akan diproses, Terima Kasih";
                 echo "$order " . "\n";
                 echo "Apabila Selesai Ketik '88'" . "\n";
        break;
        default; $order = "Tidak Ada menu";
                 echo "$order " . "\n";
                 echo "Apabila Selesai Ketik '88'" . "\n";
        break;
    }
}
echo "\n";
function readArray($orderan){
    for($i=0; $i<count($orderan); $i++){
        for($j=0; $j<count($orderan[$i]); $j++){
            echo ($orderan[$i][$j]."\t") ;
        }
        echo "\n";
    }
}
function total($total){
    $nu=1;
    $nb=1;
    $nk=1;
    return ($nu*5000)+($nb*7000)+($nk*5000);
}

readArray($orderan);
echo "Total Harga = " . total($total);
?>