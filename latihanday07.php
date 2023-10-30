<?php

//nomor 1
/* 
makeOutWord("<<>>","Yay") -> "<<Yay>>"
makeOutWord("<<>>","WooHoo") -> "<<WooHoo>>"
makeOutWord("[[]]","word") -> "[[word]]"
*/

function makeOutWord($Out,$Word){
    $first = substr($Out,0,2);
    $last = substr($Out,2,2);
    $OutWord = $first . $Word . $last;
    return $OutWord;
}
echo makeOutWord("<<>>","Yay")."\n";
echo makeOutWord("<<>>","WooHoo")."\n";
echo makeOutWord("[[]]","word")."\n";

//======================================================

//nomor 2
/*
extraFront("Hello") -> HeHeHe
extraFront("ab") -> ababab
extraFront("H") -> HHH
*/

function extraFront($Front){
    $extra = substr($Front,0,2);
    $result2 = $extra . $extra . $extra;
    return $result2;
}

echo extraFront("Hello")."\n";
echo extraFront("ab")."\n";
echo extraFront("H")."\n";


//======================================================

//nomor 3 

/* 
repeatEnd("Hello",3) -> "llollollo"
repeatEnd("Hello",2) -> "lolo"
repeatEnd("Hello",1) -> "o
 */

 function repeatEnd($str, $n){
    $subString = substr($str,-$n);
    $result3 = " ";

    for($i=0;$i<$n;$i++){
        $result3 .= $subString;
    }
    return $result3;
 }
echo repeatEnd("Hello",3)."\n";
echo repeatEnd("Hello",2)."\n";
echo repeatEnd("Hello",1)."\n";


 //======================================================

//nomor 4 
/* Lihat di index 0 dan 2 cari yang terbesar
maxEnd3([1,2,3])->[3,3,3]
maxEnd3([11,5,9])->[11,11,11]
maxEnd3([2,11,3])->[3,3,3]
 */
 function maxEnd($arr){
    $awal = array($arr[0]);
    $akhir = array($arr[2]);
    $result4 = max($awal,$akhir);

    for($i=0;$i<count($arr);$i++){
        $arr[$i] = $result4;
    }
    return $arr;
}

print_r(maxEnd([1, 2, 3]));
print_r(maxEnd([11,5,9]));
print_r(maxEnd([2,11,3]));


//======================================================

//nomor 5 
/*
constrait : panjang array ganjil > 1
cari nilai tertinggi array tersebut 
maxTriple([1,2,3]) -> 3
maxTriple([1,5,3]) -> 5 
maxTriple([5,2,3]) -> 5  
*/
function maxTriple($triple){
    if (count($triple) % 2 == 1){
        $result5 = max($triple);
    }
    return $result5;
}
print_r(maxTriple([1,2,3]));
echo"\n";
print_r(maxTriple([1,5,3]));
echo"\n";
print_r(maxTriple([5,2,3]));



//======================================================

//nomor 6
/* 
swapEnds ([1,2,3,4]) -> [4,2,3,1]
swapEnds ([1,2,3]) -> [3,2,1]
swapEnds ([8,6,7,9,5]) -> [5,6,7,9,8]
*/

function swapEnds($swap){
    $first = $swap[0];          //nilai awal
    $last = count($swap);     //nilai akhir
    $swap[0] = $last;
    $swap[count($swap)-1] = $first;
    $result6 = $swap;
    return $result6;

}
print_r(swapEnds([1,2,3,4]));
echo"\n";
print_r(swapEnds([1,2,3]));
echo"\n";
print_r(swapEnds([8,6,7,9,5]));
echo"\n";

//========================================================
//Nomor 7
//buat program untuk mengecek apakah suatu kata/kalimat termasuk palindrum atau buka palindrum

$tes = "meja";
function palindrum($tes){
    if ($tes === strrev($tes)){
        echo"kalimat ini palindrum";
    } else {
        echo "bukan palindrum ";
    }

}
echo palindrum("$tes");

//========================================================
$strArray = array("X","S","I","S","a","c","a","d","m","y");
print_r($strArray);
sort($strArray);
print_r($strArray);

//Nomor 8
//buat program untuk mengecek suatu kalimat ada beberapa huruf vokal dan huruf konsonan
//input = "Xsis Academy" 
//output = 4 huruf vokal - aaei 
//          7 huruf konsonan - cdmssxy

$tes8 = "Xsis Academy";         // klimat 
function cekvonan($tes8){
    $lower = strtolower(str_replace (' ', '', $tes8));
    $strArray = str_split($lower);     //split
    $av = [];
    $ak = [];
    $v = 0;
    $k = 0;

    for($i=0;$i<count($strArray);$i++){               
        if ($strArray[$i] == "a" || $strArray[$i] == "i" || $strArray[$i] == "u" || $strArray[$i] == "e" || $strArray[$i] == "o"){
            $av[] = $strArray[$i];
            $v++;
        } else {
            $ak[] = $strArray[$i];
            $k++;
        }
    }
    sort($av);
    sort($ak);
    echo ($v) . " huruf vokal - " . (implode("", $av)) ."\n";
    echo ($k) . " huruf konsonan - " . (implode("", $ak)) ."\n";

}
echo cekvonan($tes8); // output jgn gunakan print_r hasil harus sesuai dengan soal

?>