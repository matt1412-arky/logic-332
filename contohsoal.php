<?php

//========
$x = 3;
$y = 2;
$z = 25;

if($x==$y){
    $n=$x;
}
elseif($x!=$y){
    if($x<$y){
        $n = $x*$y*$x;
    }
    elseif($x>$y){
        $n = $x*$y*$y;
                
    } 
}
// echo "\n";
$tglz= "$z-02-2020";
$tglskrng= date('d M Y',strtotime("+$n days",strtotime($tglz)));
echo $tglskrng;
echo "\n";

//====
$x=7;
$n=1;
for($i=1;$i<=2;$i++){
    for($j=1;$j<=$x;$j++){
        if($i % 2 != 0){
            echo "$n ";   
            $n+=2;
        }    
        elseif($i % 2 == 0){
            $n-=2;
            echo "$n ";
        }
    }  
    echo "\n";
}

$x=11;
$n=1;
for($i=1;$i<=2;$i++){
    for($j=1;$j<=$x;$j++){
        if($i % 2 != 0){
            echo "$n ";   
            $n+=2;
        }    
        elseif($i % 2 == 0){
            $n-=2;
            echo "$n ";
        }
    }  
    echo "\n";
}

//========
// $x = readline("Masukkan Ukuran (1-6) A");
$x=3;
$lembar=64;
for($i=0;$i<$x;$i++){
    $lembar/=2;
}
// if($x==0){
//     $lembar=64;
// }
// elseif($x==1){
//     $lembar=32;
// }
// elseif($x==2){
//     $lembar=16;
// }
// elseif($x==3){
//     $lembar=8;
// }
// elseif($x==4){
//     $lembar=4;
// }
// elseif($x==5){
//     $lembar=2;
// }
// elseif($x==6){
//     $lembar=1;
// }
// elseif($x==7){
//     $lembar=0.5;
// }
// elseif($x==8){
//     $lembar=0.25;
// }
// elseif($x==9){
//     $lembar=0.125;
// }
// elseif($x==10){
//     $lembar=0.0625;
// }
// if($x!==""){
echo "Butuh $lembar lembar A6 untuk membuat selembar kertas berukuran A{$x}\n"; 
// }
// else{
//     echo "Not Found";
// } 


//==========
$masuk = strtotime("28 Jan 2020 07:03:34");
$keluar = strtotime("28 Jan 2020 20:03:35");
// $x = readline("Masuk : ");
// $y = readline("Keluar : ");
// $masuk = strtotime("$x");
// $keluar = strtotime("$y");
$durasi = $keluar - $masuk;
$rule1 = mktime(07,29,59,01,01,1970);
$rule2 = mktime(23,59,59,01,01,1970);
$rule3 = (date('d',$durasi));

if($durasi < $rule1){
    $tarif = (date('h',$durasi)*1000);
}
elseif($durasi < $rule2){
    $tarif = 8000;
}elseif($durasi > $rule2){
        if($durasi < ($rule1+$rule2)){
            $tarif = 15000+((date('h',$durasi)*1000));
        }
        elseif($durasi < ($rule2+$rule2)){
            $tarif = 15000+8000;
        }
        elseif($durasi > ($rule2+$rule2)){
            $tarif = 15000 + 15000;
        }   
}
echo "$tarif rupiah \n";
// echo "$durasi durasi\n";
// echo "$rule1 rule1\n";
// echo "$rule2 rule2\n";
// echo "$rule3 rule3\n";
// $l = $rule2+$rule1;
// $l1 = $rule2+$rule2;
// echo "$l r1+r2\n";
// echo "$l1 r2+r2\n";


echo "\n";
/*
1,DL= 2 NG
1,DP= 1 MG + per orang 1 (jika jumlah ganjil)
2,R= 2 MA
1,Anak= 1/2 NG
1,balita= 1 BS
*/
$a=1;
$b=3;
$c=0;
$d=0;
$e=1;

// $dewasaLakilaki=2;
// $dewasaPerempuan=1;
// $remaja=1;
// $anak=0.5;
// $balita=1;

$NG=2 * $a;
$MG=1 * $b;
$MA=1 * $c;
$N=0.5 * $d;
$BS=1 * $e;
// $porsi=8+1+1;
$jumlahOrang=($a+$b+$c+$d+$e);
$makanan=($MG+$NG+$MA+$N+$BS);

if($jumlahOrang>5 && $jumlahOrang % 3 != 0){
        $porsi = $makanan+$b;
        // echo $porsi ." porsi";
    }
    elseif($jumlahOrang % 3 == 0){
            $porsi = $porsi + 0;
        }
// echo "$porsi porsi \n";


//===========================
$botol = 5;
$teko = 25;
$gelas = 2.5;
$cangkir = 1;
        
$dari = $a = readline("dari : ");
$ke = $b = readLine("ke   : ");
$jumlah = readline("jumlah : ");
    switch ($dari) {
        case 'botol': $dari = $botol; break;
        case 'teko': $dari = $teko; break;
        case 'cangkir': $dari = $cangkir; break;
        case 'gelas': $dari = $gelas; break;
    }
    switch ($ke) {
        case 'botol': $ke = $botol; break;
        case 'teko': $ke = $teko; break;
        case 'cangkir': $ke = $cangkir; break;
        case 'gelas': $ke = $gelas; break;
    }
$hasil = ($dari * $jumlah) / $ke;
echo "$jumlah $a = $hasil $b\n"

//=======================================

// $arrStr = ['teko', 'botol', 'gelas', 'cangkir'];
// $arrKonversi = [[1, 5, 10, 25], [0.2, 1, 2, 5], [0.1, 0.5, 1, 2.5], [0.04, 0.2, 0.4, 1] ];

// $dari = readline("Dari: ");
// $ke = readline("Ke: ");
// $jumlah = readline("Jumlah $dari: ");

// $arrDari = array_search($dari, $arrStr); //ngambil index di dalam array $arrStr 
// $arrKe = array_search($ke, $arrStr); //ngambil index di dalam array $arrStr 

// // if ($arrDari !== false && $arrKe !== false) {
// $hasil = $jumlah * $arrKonversi[$arrDari][$arrKe]; 
// echo "$jumlah $dari = $hasil $ke\n";









        
//======================= 
        // $str = "Apel:1,Pisang:3,Jeruk:1,Apel:3,Apel:5,Jeruk:8,Mangga:1";
        // function readArray($arr){
        //     for($i = 0; $i < count($arr); $i++){
        //         for($j = 0; $j < count($arr[$i]); $j++){
        //             echo $arr[$i][$j] . "\t";
        //         }
        //         echo "\n";
        //     }
        // }
    
        // $str = explode(",", $str);
        // sort($str);
        // print_r($str);
    


?>