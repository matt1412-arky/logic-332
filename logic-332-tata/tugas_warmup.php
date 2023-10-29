<?php

    // function solveMeFirst($a,$b){
    //     return $a + $b; 
    // }

    // function compareTriplets($a, $b) {
    //     $alice = 0;
    //     $bob = 0;
    //     for($i = 0; $i < count($a); $i++)
    //     switch(true){
    //         case $a[$i] > $b[$i]: $alice ++; break;
    //         case $a[$i] < $b[$i]: $bob ++; break;
    //         default: break;
    //     }
    //     $res = array($alice, $bob);
    //     return $res;
    // }

    // $s = "12:01:00PM";
    // function timeConversion($s) {
    //     $times = strtotime($s);
    //     return date("H:i:s", $times);
    // }echo timeConversion($s) . "\n";


    // function staircase($n) {
    //     $arr = [];
    //     for($i = 0; $i < $n; $i++){
    //         for($j = 0; $j < $n; $j++){
    //             switch(true){
    //                 case $i + $j >= $n - 1 : $arr[$i][$j] = "#"; break;
    //                 default: $arr[$i][$j] = " "; break;
    //             }
    //         }
    //     }
    //     function readArray($arr){
    //         for($i = 0; $i < count($arr); $i++){
    //             for($j = 0; $j < count($arr[$i]); $j++){
    //                 echo $arr[$i][$j];
    //             }
    //             echo "\n";
    //         }
    //     }
    //     return readArray($arr);
    // } staircase(6);

    // function aVeryBigSum($ar) {
    //     $sum = 0;
    //     for($i = 0; $i < count($ar); $i++){
    //         $sum += $ar[$i];
    //     }
    //     return $sum;
    // }

    // $arr = array(
    //     [11,2,4],
    //     [4,5,6],
    //     [10,8,-12]
    // );
    // function diagonalDifference($arr) {
    //     $sum1 = $sum2 = $dif = 0;
    //     for($i = 0; $i < count($arr); $i++){
    //         for($j = 0; $j < count($arr[$i]); $j++){
    //             switch(true){
    //                 case $i + $j == (count($arr[$i]) - 1): $sum2 += $arr[$i][$j]; break;
    //             }
    //             switch(true){
    //                 case $i == $j: $sum1 += $arr[$i][$j]; break;
    //             }
    //         }
    //     }
    //     $dif = abs($sum1 - $sum2);
    //     return $dif;
    // } echo diagonalDifference($arr) . "\n";

    // $arr = [1, 2, 3, 4, 5];
    // function miniMaxSum($arr) {
    //     $total = 0;
    //     for($i = 0; $i < count($arr); $i++){
    //         $total += $arr[$i];
    //     }
    //     $temp = [];
    //     for($i = 0; $i < count($arr); $i++){
    //         $temp[] = $total - ($arr[$i]);
    //     }
    //     sort($temp);
    //     $min = $temp[0];
    //     $max = $temp[count($arr) - 1];
    //     $res = $min . " " . $max;
    //     echo $res;
    // } miniMaxSum($arr); echo "\n";
    
    // $arr = [4, 4, 1, 3]; 
    // function birthdayCakeCandles($candles) {
    //     $max = $sum = 0;
    //     for($i = 0; $i < count($candles); $i++){
    //         switch(true){
    //             case $max < $candles[$i]: $max = $candles[$i]; $sum = 1; break;
    //             case $max == $candles[$i]: $sum++;
    //         }
    //     }
    //     return $sum;
    // } echo birthdayCakeCandles($arr) . "\n";

    // function simpleArraySum($ar) {
    //     $sum = 0;
    //     for($i = 0; $i < count($ar); $i++){
    //         $sum += $ar[$i];
    //     }
    //     return $sum;
    // } echo simpleArraySum($arr) . "\n";

    // function plusMinus($arr) {
    //     $minus = $plus = $zero = 0;
    //     for($i = 0; $i < count($arr); $i++){
    //         switch(true){
    //             case $arr[$i] > 0: $plus++; break;
    //             case $arr[$i] < 0: $minus++; break;
    //             case $arr[$i] == 0: $zero++; break;
    //         }
    //     }
    //     $minus = $minus/count($arr);
    //     $plus = $plus/count($arr);
    //     $zero = $zero/count($arr);
    //     echo $plus . "\n" . $minus . "\n" . $zero;
    // } echo plusMinus($arr) . "\n";

    // $s = "saveChangesInTheEditor";
    // function camelcase($s) {
    //     $temp = '';
    //     $len = strlen($s);
    //         for ($i = 0; $i < $len; $i++) {
    //         $word = $s[$i];
    //         if ($word >= 'A' && $word <= 'Z' && $i > 0) {
    //             $temp .= ' ' . $word;
    //         } else {
    //             $temp .= $word;
    //         }
    //     }
    //     $res = explode(" ", $temp);
    //     $res = count($res);
    
    //     return $res;
    // }

    // $password = "2bb#A";
    // function minimumNumber($n, $password) {
    //     // Return the minimum number of characters to make the password strong
    //     $numbers = "0123456789";
    //     $lower_case = "abcdefghijklmnopqrstuvwxyz";
    //     $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //     $special_characters = "!@#$%^&*()-+";
    
    //     function check_str($string, $target){
    //         for($i = 0; $i < strlen($target); $i++){
    //             $char = $target[$i];
    //             if(strpos($string, $char) !== false){
    //                 return 0;
    //             }
    //         }
    //         return 1;
    //     }
    
    //     $res = 0;
    //     $res += check_str($password, $numbers);
    //     $res += check_str($password, $lower_case);
    //     $res += check_str($password, $upper_case);
    //     $res += check_str($password, $special_characters);
    
    //     $min_len = 6 - $n;
    //     switch(true){
    //         case $min_len <= 0:
    //             if($res > 0){
    //                 return $res;
    //             } else{
    //                 return 0;
    //             } break;
    //         case $min_len > 0:
    //             if($res > 0){
    //                 $res -= $min_len;
    //                 if($res <= 0){
    //                     return $min_len;
    //                 } else{
    //                     $res += $min_len;
    //                     return $res;
    //                 }
    //             } else{
    //                 return $min_len;
    //             }; break;
    //     }
    
    // }   echo minimumNumber(4, "g1A!") . "\n";
    
    // function caesarCipher($s, $k) {
    //     // Write your code here
    //     $ALPHABET = range('A', 'Z');
    //     $alphabet = range('a', 'z');
    //     $alpha_full = join($ALPHABET).join($alphabet);
    //     $cipher = "";
    //     if($k > 26){
    //         while($k > 26){
    //             $k -= 26;
    //             echo $k . "\n";
    //         }
    //     }
    
    //     function check_alpha($string, $target){
    //         for($i = 0; $i < strlen($target); $i++){
    //             $char = $target[$i];
    //             if(strpos($string, $char) !== false){
    //                 return true;
    //             }
    //         }
    //         return false;
    //     }
    
    //     $str_arr = str_split($s, 1);
    //     for($i = 0; $i < count($str_arr); $i++){
    //         if(check_alpha($str_arr[$i], $alpha_full)){
    //             for($j = 0; $j < count($alphabet); $j++){
    //                 if($j+$k >= count($alphabet)){
    //                     $diff = ($j+$k) - (count($alphabet));
    //                 } else {
    //                     $diff = $j+$k;
    //                 }
    //                 if($str_arr[$i] == $alphabet[$j]){
    //                     $cipher .= $alphabet[$diff]; break;
    //                 } elseif($str_arr[$i] == $ALPHABET[$j]){
    //                     $cipher .= $ALPHABET[$diff]; break;
    //                 }
    //             } 
    //         } else{
    //             $cipher .= $str_arr[$i];
    //         }
    //     } 
    //     return $cipher;
    // }echo caesarCipher('159357lcfd', 98) . "\n";
    
    // function marsExploration($s) {
    //     $sos = str_split($s, 3); $out = 0;
    //     print_r($sos);
    //     for($i = 0; $i < count($sos); $i++){
    //         if($sos[$i] != "SOS"){
    //             $word = $sos[$i];
    //             $word = str_split($word, 1);
    //             if($word[0] != "S"){$out++;}
    //             if($word[1] != "O"){$out++;}
    //             if($word[2] != "S"){$out++;}
    //         }
    //     }
    //     return $out;
    
    // } echo marsExploration("SOSOOSOSOSOSOSSOSOSOSOSOSOS") . "\n";
    
    // function hackerrankInString($s) {
    //     $str = "hackerrank";
    //         $index = 0;
    //         for ($i = 0; $i < strlen($s); $i++)
    //         {
    //             if ($str[$index] == $s[$i])
    //                 $index++;
    //             if ($index == 10)
    //                 return "YES";
    //         }
    //         return "NO";
    // } echo hackerrankInString("haacckkerrannkk") . "\n";
    
    // function pangrams($s) {
    //     $str = str_replace(" ", "", $s);
    //     $str = strtolower($str);
    //     $str = str_split($str, 1);
    //     sort($str);
    //     $temp = $pang = "";
    //     for($i = 0; $i < count($str); $i++){
    //         if ($str[$i] != $temp){
    //             $pang .= $str[$i];
    //             $temp = $str[$i];
    //         }
    //     }
    //     $lower_case = "abcdefghijklmnopqrstuvwxyz";
    //     if($pang == $lower_case){
    //         return "pangram";
    //     } else{
    //         return "not pangram";
    //     }
    
    // } echo pangrams("The Quick Brown Fox Jumps Over the Lazy dog") . "\n";

    // function makingAnagrams($s1, $s2){
    //     $del = $s1 . $s2;
    //     $s1 = str_split($s1);
    //     $s2 = str_split($s2);
    //     sort($s1); sort($s2);
    //     $str1 = join("",$s1);
    //     $str2 = join("",$s2);

    //     for($i = 0; $i < count($s1); $i++){
    //         for($j = 0; $j < count($s2); $j++){
    //             if ($s1[$i] == $s2[$j]){
    //                 $del = str_replace($s2[$j], "", $del);
    //             }
    //         }
    //     }
    //     for($i = 0; $i < strlen($del);$i++){
    //         $str1 = str_replace($del[$i], "", $str1);
    //         $str2 = str_replace($del[$i], "", $str2);
    //     }
    //     function char_count($string){
    //         $count = 1; $array = []; $temp = $string[0];
    //         for($i  = 1; $i <= strlen($string);$i++){
    //             if($temp == $string[$i]){
    //                 $count++;
    //             } else{
    //                 $array[] = $count;
    //                 $temp = $string[$i];
    //                 $count = 1;
    //             }               
    //         }
    //         return $array;
    //     }
    //     $ar1 = char_count($str1);
    //     $ar2 = char_count($str2);
    //     $count = 0;

    //     for($i = 0; $i <count($ar1); $i++){
    //             $count += abs($ar1[$i] - $ar2[$i]);
    //     }
    //    return $count + strlen($del);
    // } echo makingAnagrams("absdjkvuahdakejfnfauhdsaavasdlkj", "djfladfhiawasdkjvalskufhafablsdkashlahdfa") . "\n";

    function gemstones($arr) {
        $n = count($arr);
        function remove_duplicates($string){
            $array = str_split($string);
            sort($array);
            $res = [];
            $char = "";
            for ($i = 0; $i <= count($array); $i++){
                if($char !== $array[$i]){
                    $res[] = $char;
                    $char = $array[$i];
                } 
            }
            $res = join("", $res);
            return $res;
        }
        for($i = 0; $i < count($arr); $i++){
            $arr[$i] = remove_duplicates($arr[$i]);
        }
        $str = join("", $arr);
        $str = str_split($str);
        sort($str);
        
        $char = $tempword = ""; $string = [];
        for($i = 0; $i <= count($str); $i++){
            if($char === $str[$i]){
                $tempword .= $char;
            } else {
                $char = $str[$i];
                $string[] = $tempword;
                $tempword = $str[$i];
            }
        }
        print_r($string);
        $str = "";
        for($i = 0; $i < count($string); $i++){
            $word = $string[$i];
            $len = strlen($word);
            if($len == $n){
                $str .= substr($word, 0, 1);
            }
        } 
        $res = strlen($str);
        echo $res;
    } 
    $ar = ["abcdde","baccd","eeabg",];
    echo gemstones($ar);
?>