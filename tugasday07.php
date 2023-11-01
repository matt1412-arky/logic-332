<?php

//No.1
function makeOutWord($string,$symbol){
    $a = substr($symbol,0, 2);
    $b = substr($symbol, -2);
    return $a . $string . $b;
}

$word="Yay";
$symbol="<<>>";
$hasil = makeOutWord($word,$symbol);
echo $hasil . "\n";

$word="WooHoo";
$symbol="<<>>";
$hasil = makeOutWord($word,$symbol);
echo $hasil . "\n";

$word="word";
$symbol="[[]]";
$hasil = makeOutWord($word,$symbol);
echo $hasil . "\n";

echo "\n";

//No.2
function extraFront($string){
    $front = substr($string, 0, 2);
	$middle = substr($string, 0,2);
	$end = substr($string, 0,2);
    return $end . $middle . $front;
}

$word="Hello";
$hasil = extraFront($word);
echo $hasil . "\n";
$word="ab";
$hasil = extraFront($word);
echo $hasil . "\n";
$word="H";
$hasil = extraFront($word);
echo $hasil . "\n";

echo "\n";

//3.
function repeatEnd($string,$repeat){
    // if($repeat==3 ||$repeat==2 ||$repeat==1 ){
    //     for($i=1;$i<=3;$i++){
    //         $front = substr($string, -3);
    //         echo $front;
    //     }
    // }
    // else{
    //     echo "not found";
    // }

    $count = 0;
    if($repeat>$count){
        for($i=1;$i<=$repeat;$i++){
            $front = substr($string,(0-$repeat));
            echo $front;
            $count++;
        }
    }
    else{        
    }
    return $front;
}

$word="Hello";
repeatEnd($word,3);
echo "\n";
$word="Hello";
repeatEnd($word,2);
echo "\n";
$word="Hello";
repeatEnd($word,1);
echo "\n";

echo "\n";

//4.
function maxEnd($arr){
    // if($arr[0]<$arr[2]){
    //     $arr[0] = $arr[2];
    //     $arr[1] = $arr[2];
    //     $arr[2] = $arr[2];
    //     print_r($arr);
    // }
    // elseif($arr[0]>$arr[2]){
    //     $arr[0] = $arr[0];
    //     $arr[1] = $arr[0];
    //     $arr[2] = $arr[0];
    //     print_r($arr);
    // }
    // else{
    // }

    $panjangArray = count($arr);
    if( $arr[0]<$arr[($panjangArray-1)]){
        for($i=0;$i<($panjangArray);$i++){
            $arr[$i] = $arr[($panjangArray-1)];
        }
        print_r($arr);
    }
    elseif ($arr[0]>$arr[($panjangArray-1)]){
        for($i=0;$i<($panjangArray);$i++){
            $arr[$i] = $arr[0];
        }
        print_r($arr);
    }
    else{
    }
}

$value=[1,2,3];
maxEnd($value);

$value=[9,5,11];
maxEnd($value);

$value=[2,11,3];
maxEnd($value);

echo "\n";

//5.
function maxTriple($arr){
    // sort($arr);
    //     print_r(max($arr)."\n");  

    $panjangArray = count($arr);
    sort($arr);
    print_r($arr[($panjangArray-1)]."\n");  
}

$value=[1,2,3];
maxTriple($value);

$value=[1,5,3];
maxTriple($value);

$value=[5,2,3];
maxTriple($value);

echo "\n";

//6.
function swapEnds($arr){    
    $panjangArray = count($arr);
    $arrs[($panjangArray)] = $arr[0];
    $arrs[($panjangArray+1)] = $arr[($panjangArray-1)];
    $arr[0] = $arrs[($panjangArray+1)];
    $arr[($panjangArray-1)] = $arrs[($panjangArray)];
    print_r ($arr). "\n";
        
}

$value=[1,2,3,4];
swapEnds($value);

$value=[1,2,3];
swapEnds($value);

$value=[8,7,6,5];
swapEnds($value);

/*7.
Buat program untuk mengecek apakah suatu kata/kalimat termasuk
palindrom atau bukan palindrom
*/
function palindrom($string,$word){
    strtolower($string);
    str_replace("","",$string);
    $str = strrev($word);
    if($string==$str){
        echo "$string dan $word : Palindrom";
    }
    else{
        echo "$string dan $word : Bukan Palindrom";
    }
    return $string .$word;
}


$string = "kasur";
 $word = "rusak";
palindrom($string,$word);
echo "\n";

$string = "mobil";
$word = "mobil";
palindrom($string,$word);
echo "\n";

/* 8.
Buat program untuk mengecek suatu kalimat ada berapa huruf vokal dan berapa
huruf konsonan
input : "Xsis Academy"
Output : 3 huruf Vokal - Aae
         8 huruf Konsonan - cdm
*/
function strcorrect($string){
    $strlower = strtolower(str_replace(" ","", $string));
    $strArray = str_split($strlower,1);
    $panjangArray = count($strArray);
    $vokal=[];
    $konsonan=[];
    $jumlahvokal = 0;
    $jumlahkonsonan = 0;
    for($i=0;$i<$panjangArray;$i++){
        if($strArray[$i]=='a'||$strArray[$i]=='i'||$strArray[$i]=='u'||$strArray[$i]=='e'||$strArray[$i]=='o'){
            $vokal[]= $strArray[$i];
            $jumlahvokal++;   
        }
        else {  
            $konsonan[]= $strArray[$i];
            $jumlahkonsonan++;   
        }
    }
    sort($vokal);
    sort($konsonan);
    echo ($jumlahvokal)  . " huruf vokal - " . (implode($vokal)) . "\n";
    echo ($jumlahkonsonan)  . " huruf vokal - " . (implode($konsonan)). "\n";
 }
 
 echo strcorrect("Xsis Academy");
//  print_r();



?>