<?php
//str_split (string, banyaknya karakter (int)).
//untuk memisahkan string menjadi satu atau lebih karakter.
$par="string banyaknya karakter";
$strArray = str_split($par,1);
print_r($strArray);
echo "\n";

//str _repeat (string, banyankanya string diulangi). 
//untuk mengulang string menjadi beberapa sesuai dengan parameter ke2.
$word="wi";
echo(str_repeat($word,3));
echo "\n";

//str_pad (string, jumlah panjang string baru, string yang akan ditambahkan).
echo(str_pad($word, 5, "h"));
echo "\n";

//strpos(string, string yang dicari).
//untuk mencari substring dalam suatu string.
echo(strpos($par,"a"));
echo "\n";

//number_format(string number, decimal, decimal separator sign, string number separator sign).
$wordNum="20000";
echo number_format($wordNum, 2);
echo "\n";
echo number_format($wordNum, 2, ",", ".");
echo "\n";

//strrev(string). untuk mereverse string.
echo strrev($word);
echo "\n";

//join("separator", string array). sama seperti implode
$strArr = array("Orange", "Green");
echo join(", ", $strArr);
echo "\n";

//untuk mengecilkan format huruf string
echo (strtolower($word));
echo "\n";

//untuk membesarkan format huruf string atau kapital
echo (strtoupper($word));
echo "\n";

//ucfirst(string). membuat uppercase pada huruf pertama dalam suatu string
echo ucfirst($word);
echo "\n";

//ucwords(string). membuat uppercase pada huruf pertama dalam setiap kata dalam string
echo ucwords($par);
echo "\n";

//md5(string). hash string to md5 format atau tipe 
echo md5($wordNum);
echo "\n";

//sha1(string). hash string to sha format atau tipe
echo sha1($word);
echo "\n";
echo "\n";


//LATIHAN
//Buat program untuk mengecek apakah suatu kata atau kalimat termasuk palindrum atau bukan palindrum
function palindrum($word){
    strtoupper($word);
    $wordRev = strrev($word); 
   
    if ($word == $wordRev){
        echo "PALINDRUM\nKata '". strtoupper($word). "' ADALAH Palindrum \n";
    }
    else{
        echo "PALINDRUM\nKata '". strtoupper($word). "' BUKAN Palindrum \n";
    }
}
function palindrum2($word){
    strtoupper($word);
    $wordRev = strrev($word);
    $match = strtoupper($word)==strtoupper($wordRev);
    switch ($match) {
        case 1 :
            echo "PALINDRUM 2\nKata '". strtoupper($word). "' Adalah Palindrum \n";
            break;
        
        default:
        echo "PALINDRUM 2\nKata '". strtoupper($word). "' Bukan Palindrum \n";
            break;
    }
}

$wordRev = strrev($word);
define ("wordRev", $wordRev);
	function palindrumtruefalse($word)
		{
			
            return wordRev == $word;
            echo wordRev == $word;
			
		}



$word="katak";
palindrum($word);
echo "\n";
palindrum("kasurrusak");
echo "\n";
palindrum2("likaliku");
echo "\n";
palindrum2($word);
echo "\n";
palindrumtruefalse("kasurrusak");
echo "\n";

//Buat program untuk mengecek suatu kalimat ada berapa huruf vokal dan berapa huruf konsonan.
function checkWord($str)
    {
        $sper       = str_replace(" ", "", $str);
        $strSplit   = str_split($sper,1);
        $tKons      = strlen($sper);
        $tVokal     = 0;
        $vokal      = array("a","i","u","e","o","A","I","U","E","O");
        $arrVokalStr=array();
        $arrKonsStr =array();
        for ($i=0; $i<strlen($sper); $i++){
            for ($j=0; $j<count($vokal); $j++){
            if($strSplit[$i] == $vokal[$j]){
                $tVokal++;
                $arrVokalStr[]=$vokal[$j];
                $tKons--;
            }                
       } 
    }
        $KonsStr    = str_replace($arrVokalStr,"", $sper) ;
        $arrKonsStr = str_split($KonsStr,1);
            echo "Kalimat/kata '$str', Vokal ada: ". $tVokal . "\n";
            print_r ($arrVokalStr);
            echo "Kalimat/kata '$str', Konsonan ada: ". $tKons . "\n";
            print_r ($arrKonsStr);
    }

$str        = "Xsis Academy";
checkWord($str);
echo "\n";
?>