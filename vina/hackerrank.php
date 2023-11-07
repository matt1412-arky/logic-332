<?php

// WarmUp
function solveMeFirst($a,$b){
  return $a + $b; 
}

function timeConversion($s) {
     // memisahkan jam, menit, detik dan am pm
     sscanf($s, "%d:%d:%d%s", $hour, $minute, $second, $ampm);

     // PM
     if ($ampm === 'PM' && $hour != 12) {
         $hour += 12;
     }
     // AM
     elseif ($ampm === 'AM' && $hour == 12) {
         $hour = 0;
     }
 
     // format ulang 24 jam
     $result = sprintf("%02d:%02d:%02d", $hour, $minute, $second);
 
     return $result;
    }

function simpleArraySum($ar) {
    $result = 0;
    for ($i = 0; $i < count($ar);$i++){
        $result += $ar[$i];
    }
    return $result;
}

function diagonalDifference($arr) {
    $jumlahDiagonalKiri = 0;
    $jumlahDiagonalKanan = 0;
    $n = count($arr);
    for($i=0; $i<$n; $i+=1){            //di loop terlebih dahulu 
        for($j=0; $j<$n; $j+=1){        // di loop hingga selesai
            //if(($i+$j) == ($n+1))     // untuk silang kanan
            if ($i == $j){      // untuk silang kiri
                $jumlahDiagonalKiri += $arr[$i][$j];
            } 
            if (($i+$j) == ($n-1)){
                $jumlahDiagonalKanan += $arr[$i][$j];
            }
        }
    }
    $result = abs($jumlahDiagonalKiri - $jumlahDiagonalKanan);
    return $result;
}

function plusMinus($arr){
    $sigmaArr = count($arr);
    //$hasil = [];
    $jumlahNol = 0;
    $jumlahPositif = 0;
    $jumlahNegatif = 0;
    for ($i= 0;$i<count($arr);$i++){
        if ($arr[$i] == 0){
            $jumlahNol++;
        } elseif ($arr[$i] > 0){ //positif
            $jumlahPositif++;
        } elseif (($arr[$i] < 0)){
            $jumlahNegatif++;
        }  
    }
    $hasilPositif = number_format($jumlahPositif/$sigmaArr,6);
    $hasilNol = number_format($jumlahNol/$sigmaArr,6);
    $hasilNegatif = number_format($jumlahNegatif/$sigmaArr,6);

    echo "".$hasilPositif."\n";
    echo "".$hasilNegatif."\n";
    echo "".$hasilNol."\n";

}

function staircase($n){
    for($i=1; $i<=$n; $i+=1){            //di loop terlebih dahulu 
        for($j=1; $j<=$n; $j+=1){        // di loop hingga selesai
            if($i+$j< ($n+1))
                echo(" ");
            else
                echo("*");
        }
        echo"\n";
    }
} 

function miniMaxSum($arr) {
    $a = min($arr);
    $b = max($arr);

    $jumlah = 0;

    for ($i = 0; $i < count($arr); $i++){
        $jumlah += $arr[$i];
    }
    $min = $jumlah - $a;
    $max = $jumlah - $b;

    echo $max ." ". $min;
}

function birthdayCakeCandles($candles) {
    // $b = max($candles);
    // $count =0;

    // for ($i = 0; $i < count($candles); $i++){
    //     if ($candles[$i] < $b){
    //         $candles[$i]= $b;
    //         $count = 1;
    //     } elseif ($candles[$i] == $b){
    //         $count=$count+1;
    //     }
    // }
    // $hasil = $count;
    // return $hasil;
    
    $maxHeight = max($candles);

    $count = array_count_values($candles)[$maxHeight];

    return $count;
}

function aVeryBigSum($ar) {
    $total = 0;
    for ($i = 0; $i < count($ar); $i++) {
        $total+=$ar[$i];
    }
    
    return $total;
}

function compareTriplets($a, $b) {
    $alice = 0;
    $bob = 0;
    for ($i = 0; $i < 3; $i++){
        if ($a[$i] > $b[$i]){
            $alice++;
        } elseif($a[$i]<$b[$i]) {
            $bob++;
        }
    }
    return [$alice, $bob];

}

//String

function camelcase($s) {
    // Write your code here
    $wordCount = 1; // kata pertama

    for ($i = 0; $i < strlen($s); $i++) {
        // Check if the current character is an uppercase letter
        if (ctype_upper($s[$i])) {
            $wordCount++; // Increment the word count
        }
    }

    return $wordCount;
}

function minimumNumber($n, $password) {
// Return the minimum number of characters to make the password strong

    $numbers = '0123456789';
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $specialCharacters = '!@#$%^&*()-+';

    // Inisialisasi tanda untuk melacak apakah jenis karakter yang diperlukan ada
    $hasDigit = false;
    $hasLowerCase = false;
    $hasUpperCase = false;
    $hasSpecialChar = false;

    // Periksa setiap karakter dalam kata sandi
    for ($i = 0; $i < strlen($password); $i++) {
        $ch = $password[$i];
        if (strpos($numbers, $ch) !== false) {
            $hasDigit = true;
        } elseif (strpos($lowerCase, $ch) !== false) {
            $hasLowerCase = true;
        } elseif (strpos($upperCase, $ch) !== false) {
            $hasUpperCase = true;
        } elseif (strpos($specialCharacters, $ch) !== false) {
            $hasSpecialChar = true;
        }
    }

    // Inisialisasi variabel untuk melacak jenis karakter yang hilang
    $missingTypes = 0;

    // Periksa jenis karakter yang hilang dan tambahkan jumlah missingTypes
    if (!$hasDigit) {
        $missingTypes++;
    }
    if (!$hasLowerCase) {
        $missingTypes++;
    }
    if (!$hasUpperCase) {
        $missingTypes++;
    }
    if (!$hasSpecialChar) {
        $missingTypes++;
    }

    // Hitung jumlah minimum karakter yang harus ditambahkan untuk memenuhi persyaratan
    $minLength = max(6 - $n, $missingTypes);

    return $minLength;
}

function caesarCipher($s, $k) {
    //mencari awal deret huruf baru 
    $k = $k%26;  //26 jumlah huruf
    $huruf = 'abcdefghijklmnopqrstuvwxyz';
    //mencari substring $k untuk mengganti deret huruf yang akan diganti
    $subSk = substr($huruf,0,$k);
    //mencari substring selain $k untuk menempati deret awal huruf 
    $subSbaru = substr($huruf,$k);
    $hurufBaru = $subSbaru.$subSk;
    $result = strtr($s,$huruf,$hurufBaru);
    $final = strtr($result,strtoupper($huruf),strtoupper($hurufBaru));
    return $final;

}

function marsExploration($s) {
    // Write your code here
    $sLen = strlen($s);
    $count = 0;
    for ($i = 0; $i < $sLen;$i+=3) {
        if ($s[$i] !== 'S') {
            $count++;
        } if ($s[$i+1] !== 'O') {
            $count++;
        } if ($s[$i+ 2] !== 'S') {
            $count++;
        }
    }
    $hasil = $count;
    return $hasil;
}

function hackerrankInString($s) {
    $initial = "hackerrank";
    $j = 0;
    for ($i = 0; $i < strlen($s); $i++){
            if ($s[$i]===$initial[$j]){
                $j++;}
            if ($j === strlen($initial)){
                return "YES";}
        }
        return "NO";
}

function separateNumbers($s) {
    // Write your code here
    $sLen = strlen($s);
    $isValid = false;
    //$firstNum ='';

    for ($i = 1; $i <= $sLen/2; $i++){
        $firstNum = substr($s, 0 ,$i);
        $num = (int)$firstNum;
        $validString = $firstNum;
        
        while (strlen($validString)< $sLen){
            $num++;
            $validString .= (string)$num;
        }

        if ($validString === $s){
            $isValid = true;
            echo "YES $firstNum\n";
            break;
        } 

    }
    if ($isValid==false){
        echo "NO\n";}
}

function gemstones($arr) {
    // Write your code here
    $gemstoneArray = str_split($arr[0]);

    for ($i = 0; $i < count($arr); $i++){
        $mineralArray = str_split($arr[$i]);
        $commonMineral = array();
        foreach ($mineralArray as $mineral) {
            if(in_array($mineral, $gemstoneArray)){
                $commonMineral[] = $mineral;
           }
        }
    $gemstoneArray = $commonMineral;
    }
    $gemstoneArray = array_unique($gemstoneArray);
    return count($gemstoneArray);
}

function makingAnagrams($s1, $s2) {
    // Write your code here
    $counts1 = [];
    $counts2 = [];
    $delete = 0;

    $huruf = 'abcdefghijklmnopqrstuvwxyz';

    $strlen1 = strlen($s1);
    $strlen2 = strlen($s2);

    for ($i = 0; $i < $strlen1; $i++) {
        $char = $s1[$i];
        $pos = strpos($huruf, $char);
        if ($pos !== false) {
            $counts1[$pos]++;
        }
    }
    for ($i = 0; $i < $strlen2; $i++) {
        $char = $s2[$i];
        $pos = strpos($huruf, $char);
        if ($pos !== false) {
            $counts2[$pos]++;
        }
    }

    for ($i=0;$i<strlen($huruf);$i++){
        $delete += abs($counts1[$i]-$counts2[$i]);
    }
    return $delete;
}

function twoStrings($s1, $s2) {
    for ($i = 0; $i < strlen($s1); $i++) {
        $char = $s1[$i];
        if (strpos($s2, $char) !== false) {
            return "YES";
        }
    }
    return "NO";
}




?>