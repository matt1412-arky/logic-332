<?php

function minimumNumber($n, $password) {
    // Return the minimum number of characters to make the password strong
    $numbers = "0123456789";
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $special_characters = "!@#$%^&*()-+";

    function check_str($string, $target){
        for($i = 0; $i < strlen($target); $i++){
            $char = $target[$i];
            if(strpos($string, $char) !== false){
                return 0;
            }
        }
        return 1;
    }

    $res = 0;
    $res += check_str($password, $numbers);
    $res += check_str($password, $lower_case);
    $res += check_str($password, $upper_case);
    $res += check_str($password, $special_characters);

    $min_len = 6 - $n;
    switch(true){
        case $min_len <= 0:
            if($res > 0){
                return $res;
            } else{
                return 0;
            } break;
        case $min_len > 0:
            if($res > 0){
                $res -= $min_len;
                if($res <= 0){
                    return $min_len;
                } else{
                    $res += $min_len;
                    return $res;
                }
            } else{
                return $min_len;
            }; break;
    }

}   echo minimumNumber(4, "g1A!") . "\n";

function caesarCipher($s, $k) {
    // Write your code here
    $ALPHABET = range('A', 'Z');
    $alphabet = range('a', 'z');
    $alpha_full = join($ALPHABET).join($alphabet);
    $cipher = "";
    if($k > 26){
        while($k > 26){
            $k -= 26;
            echo $k . "\n";
        }
    }

    function check_alpha($string, $target){
        for($i = 0; $i < strlen($target); $i++){
            $char = $target[$i];
            if(strpos($string, $char) !== false){
                return true;
            }
        }
        return false;
    }

    $str_arr = str_split($s, 1);
    for($i = 0; $i < count($str_arr); $i++){
        if(check_alpha($str_arr[$i], $alpha_full)){
            for($j = 0; $j < count($alphabet); $j++){
                if($j+$k >= count($alphabet)){
                    $diff = ($j+$k) - (count($alphabet));
                } else {
                    $diff = $j+$k;
                }
                if($str_arr[$i] == $alphabet[$j]){
                    $cipher .= $alphabet[$diff]; break;
                } elseif($str_arr[$i] == $ALPHABET[$j]){
                    $cipher .= $ALPHABET[$diff]; break;
                }
            } 
        } else{
            $cipher .= $str_arr[$i];
        }
    } 
    return $cipher;
}echo caesarCipher('159357lcfd', 98) . "\n";

function marsExploration($s) {
    $sos = str_split($s, 3); $out = 0;
    print_r($sos);
    for($i = 0; $i < count($sos); $i++){
        if($sos[$i] != "SOS"){
            $word = $sos[$i];
            $word = str_split($word, 1);
            if($word[0] != "S"){$out++;}
            if($word[1] != "O"){$out++;}
            if($word[2] != "S"){$out++;}
        }
    }
    return $out;

} echo marsExploration("SOSOOSOSOSOSOSSOSOSOSOSOSOS") . "\n";

function hackerrankInString($s) {
    $str = "hackerrank";
        $index = 0;
        for ($i = 0; $i < strlen($s); $i++)
        {
            if ($str[$index] == $s[$i])
                $index++;
            if ($index == 10)
                return "YES";
        }
        return "NO";
} echo hackerrankInString("haacckkerrannkk") . "\n";

function pangrams($s) {
    $str = str_replace(" ", "", $s);
    $str = strtolower($str);
    $str = str_split($str, 1);
    sort($str);
    print_r($str);
    $temp = "";
    for($i = 0; $i < count($str); $i++){
        if ($str[$i] != $temp){
            $pang .= $str[$i];
            $temp = $str[$i];
        }
    }
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    if($pang == $lower_case){
        return "pangram";
    } else{
        return "not pangram";
    }

} echo pangrams("The Quick Brown Fox Jumps Over the Lazy dog");

function twoStrings($s1, $s2){
    $str1 = str_split($s1, 1);
    $str2 = str_split($s2, 1);
    for($i = 0; $i < count($str1); $i++){
        for($i = 0; $i < count($str2); $i++){
            if(strpos($str1[$i], $str2[$j])!==false){
                return "YES";
            }
        }
    }
    return "NO";
}


?>