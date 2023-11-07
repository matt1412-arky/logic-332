<?php

/*
while = selama; selama i lebih kecil dari 5 maka lakukan perintah


//note : while melakukan loop sambil cek kondisi
$i = 1;
while ($i <= 5){
    echo($i. "\n");
    $i ++;
}
echo"\n";
echo"========================== \n";
echo"\n";

//do while melakukan loop terlebih dahulu setelah itu cek kondisi

$i = 1;
do {
    echo($i . ",");
    $i++;
} while($i<=5);
echo("\n");

$input = readline("Masukan data : ");
echo($input. "\n");
$menu = "";
while($menu != "x" ){
    echo("1. Nasgor \n");
    echo("2. Migor \n");
    echo("3. Bigor \n");
    echo("4. Soto \n");
    echo("5. selesai \n");

    $menu= readline("pilih menu : ");

    $item = "";
    switch($menu){
        case 1 : $item = "Nasgor"; break;
        case 2 : $item = "Migor"; break;
        case 3 : $item = "Bigor"; break;
        case 4 : $item = "Soto"; break;
        case 5 : $item = "selesai"; break;
        default : $item = "Tidak sesuai melakuka"; break;

    }
    echo("Anda memilih $menu \n");
}

echo("selesai \n");
*/

//nested while 

$i = 1;
$j = 1;
$n = 3;
while($i < $n+1){
    while($j < $n+1){
        echo $i . $j ." ";
        $j++;
    }
    $j = 1;
    $i++;
    echo"\n";
} 

?>