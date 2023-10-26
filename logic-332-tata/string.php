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
}echo caesarCipher('159357lcfd', 98);
?>