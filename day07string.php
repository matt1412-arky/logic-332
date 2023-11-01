<?php
// PHP STRING

$strLain = "Mantap";
$strKalimat= "Djarum Cokelat Extra,12 Batang,15 Ribu";
$diexplode=explode(",",$strKalimat);//explode untuk memisahkan kata dalam kalimat dari operator atau karakter tertentu
print_r($diexplode);
print("$strKalimat\n");
printf("%s \t %s \n", $strKalimat ,$strLain); //print format : posisi kanan untuk membuat formatnya
$hash= crypt($strLain, "juara"); //untuk meng hash suatu string, biasanya untuk password
echo $hash;
echo "\n";
$strArr = array("Orange", "Green"); //menggabungkan kata kata dalam suatu array menjadi suatu string
echo(implode(" ", $strArr))."\n";
echo "\n";
$strLagi = "    CC    ";
//untuk menghapus spasi
echo ($strLagi . " " . rtrim($strLagi)."\n");
echo ($strLagi . " " . ltrim($strLagi)."\n");
echo ($strLagi . " " . trim($strLagi)."\n");
echo "\n";
echo (str_replace("C","A", $strLagi ) . "\n"); //untuk replace string
echo "\n";



//TUGAS DAY 07
//NO.1
function makeOutWord($brdr,$word){
    echo(substr($brdr, 0, 2)).$word.(substr($brdr, 2, 2))."\n";
}
makeOutWord("<<>>","Yay");
makeOutWord("<<>>","WooHoo");
makeOutWord("[[]]","word");
echo "\n";

//NO.2
function extraFont($word){
    echo(substr($word, 0, 2)).(substr($word, 0, 2)).(substr($word, 0, 2))."\n";
}
extraFont("Hello");
extraFont("ab");
extraFont("H");
echo "\n";

//NO.3 
function repeatEnd($word,$num){
    $a=(substr($word, -$num));
    for($i=0; $i<$num; $i++){
        echo $a;
    }
    echo "\n";
}
repeatEnd("Hello", 3);
repeatEnd("Hello", 2);
repeatEnd("Hello", 1);
echo "\n";

//NO.4
$arrNew=array();
function maxEnd3($arrNum){
    if($arrNum[0]>$arrNum[2]){
        for($i=0; $i<count($arrNum); $i++){
            $arrNew[$i]=$arrNum[0];
        }
    }
    else if($arrNum[0]<$arrNum[2]){
        
        for($i=0; $i<count($arrNum); $i++){
            $arrNew[$i]=$arrNum[2];
        }    
    }
     for ($i=0; $i<count($arrNew); $i++){
        echo "$arrNew[$i] ";
    }
    echo "\n";
    print_r($arrNew);
}

maxEnd3([1,2,3]);
maxEnd3([11,5,9]);
maxEnd3([2,11,3]);
echo "\n";

//NO.5
echo "\n";
function maxTriple($arrNum){
    sort($arrNum);
    $countArr=count($arrNum)-1;
    $max=$arrNum[$countArr];
    echo($max)."\n";
}

maxTriple([1,2,3]);
maxTriple([1,5,3]);
maxTriple([5,2,3]);
echo "\n";

//NO.6
function swapEnds($arrNum){
    $front=$arrNum[0];
    $back=$arrNum[count($arrNum)-1];
    $arrNum[0]=$back;
    $arrNum[count($arrNum)-1]=$front;
    for ($i=0; $i<count($arrNum); $i++){
        echo "$arrNum[$i] ";
    }
    echo "\n";
    print_r($arrNum);
}
swapEnds([1,2,3,4]);
swapEnds([1,2,3]);
swapEnds([8,6,7,9,5]);



//ini salah: sorting dulu baru ngurutin
// function asd($arrNum){
//     if ($arrNum[0]>$arrNum[count($arrNum)-1]){
//     for($i=0; $i<count($arrNum); $i++){
//         $arrayHasil[$i]=$arrNum[0]--;
//         }
//     }
//     else if ($arrNum[0]<$arrNum[count($arrNum)-1]){
//         for($i=0; $i<count($arrNum); $i++){
//             $arrayHasil[$i]=$arrNum[count($arrNum)-1]--;
//         }
//     }
//     print_r($arrayHasil);
// }
?>

