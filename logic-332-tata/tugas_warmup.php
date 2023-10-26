<?php

    function solveMeFirst($a,$b){
        return $a + $b; 
    }

    function compareTriplets($a, $b) {
        $alice = 0;
        $bob = 0;
        for($i = 0; $i < count($a); $i++)
        switch(true){
            case $a[$i] > $b[$i]: $alice ++; break;
            case $a[$i] < $b[$i]: $bob ++; break;
            default: break;
        }
        $res = array($alice, $bob);
        return $res;
    }

    $s = "12:01:00PM";
    function timeConversion($s) {
        $times = strtotime($s);
        return date("H:i:s", $times);
    }echo timeConversion($s) . "\n";


    function staircase($n) {
        $arr = [];
        for($i = 0; $i < $n; $i++){
            for($j = 0; $j < $n; $j++){
                switch(true){
                    case $i + $j >= $n - 1 : $arr[$i][$j] = "#"; break;
                    default: $arr[$i][$j] = " "; break;
                }
            }
        }
        function readArray($arr){
            for($i = 0; $i < count($arr); $i++){
                for($j = 0; $j < count($arr[$i]); $j++){
                    echo $arr[$i][$j];
                }
                echo "\n";
            }
        }
        return readArray($arr);
    } staircase(6);

    function aVeryBigSum($ar) {
        $sum = 0;
        for($i = 0; $i < count($ar); $i++){
            $sum += $ar[$i];
        }
        return $sum;
    }

    $arr = array(
        [11,2,4],
        [4,5,6],
        [10,8,-12]
    );
    function diagonalDifference($arr) {
        $sum1 = $sum2 = $dif = 0;
        for($i = 0; $i < count($arr); $i++){
            for($j = 0; $j < count($arr[$i]); $j++){
                switch(true){
                    case $i + $j == (count($arr[$i]) - 1): $sum2 += $arr[$i][$j]; break;
                }
                switch(true){
                    case $i == $j: $sum1 += $arr[$i][$j]; break;
                }
            }
        }
        $dif = abs($sum1 - $sum2);
        return $dif;
    } echo diagonalDifference($arr) . "\n";

    $arr = [1, 2, 3, 4, 5];
    function miniMaxSum($arr) {
        $total = 0;
        for($i = 0; $i < count($arr); $i++){
            $total += $arr[$i];
        }
        $temp = [];
        for($i = 0; $i < count($arr); $i++){
            $temp[] = $total - ($arr[$i]);
        }
        sort($temp);
        $min = $temp[0];
        $max = $temp[count($arr) - 1];
        $res = $min . " " . $max;
        echo $res;
    } miniMaxSum($arr); echo "\n";
    
    $arr = [4, 4, 1, 3]; 
    function birthdayCakeCandles($candles) {
        $max = $sum = 0;
        for($i = 0; $i < count($candles); $i++){
            switch(true){
                case $max < $candles[$i]: $max = $candles[$i]; $sum = 1; break;
                case $max == $candles[$i]: $sum++;
            }
        }
        return $sum;
    } echo birthdayCakeCandles($arr) . "\n";

    function simpleArraySum($ar) {
        $sum = 0;
        for($i = 0; $i < count($ar); $i++){
            $sum += $ar[$i];
        }
        return $sum;
    } echo simpleArraySum($arr) . "\n";

    function plusMinus($arr) {
        $minus = $plus = $zero = 0;
        for($i = 0; $i < count($arr); $i++){
            switch(true){
                case $arr[$i] > 0: $plus++; break;
                case $arr[$i] < 0: $minus++; break;
                case $arr[$i] == 0: $zero++; break;
            }
        }
        $minus = $minus/count($arr);
        $plus = $plus/count($arr);
        $zero = $zero/count($arr);
        echo $plus . "\n" . $minus . "\n" . $zero;
    } echo plusMinus($arr) . "\n";

    $s = "saveChangesInTheEditor";
    function camelcase($s) {
        $temp = '';
        $len = strlen($s);
            for ($i = 0; $i < $len; $i++) {
            $word = $s[$i];
            if ($word >= 'A' && $word <= 'Z' && $i > 0) {
                $temp .= ' ' . $word;
            } else {
                $temp .= $word;
            }
        }
        $res = explode(" ", $temp);
        $res = count($res);
    
        return $res;
}

    $password = "2bb#A";
    function minimumNumber($n, $password) {
        $reqNum = "0123456789";
        $reqLowCase = "abcdefghijklmnopqrstuvwxyz";
        $reqUpCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $reqSymbol = "!@#$%^&*()-+";
        
        function find_req_char($pass, $req){
            for($i = 0; $i < strlen($req); $i++){
                $char = $req[$i];
                if(strpos($pass, $char) !== false){
                    return 0;
                }
            }
            return 1;
        }
        $req = 0;
        $req += find_req_char($password, $reqNum);
        $req += find_req_char($password, $reqLowCase);
        $req += find_req_char($password, $reqUpCase);
        $req += find_req_char($password, $reqSymbol);

        switch(true){
            case $n < 6:
                $min = 6 - $n;
                if($min < 4){
                    if($req = )
                }
        }

        if($n < 6){
            if($n < 4){
                return 6 - $n;
            } else{
                if($req < 4){
                    $n += 4 - $req;
                    return $n;
                } else{
                    return 6 - $n;
                }
            }
        } else {
            if($req < 4){
                $n += 4 - $req;
                return $n;
            } else{
                return 0;
            }
        }
    }

    $alphabet = range('A', 'Z');
    print_r($alphabet);
?>