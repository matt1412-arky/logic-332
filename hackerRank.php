<?php
// 01. Solve Me First
function solveMeFirst($a,$b){
  return $a + $b; 
  
}
// 02. Time Conversion
function timeConversion($s) {
    $strToTime = strtotime($s);
    return date('H:i:s', $strToTime);

}
// 03. Simple Array Sum
function simpleArraySum($ar) {
    $sum = 0;
    $count = count($ar);

    for ($i = 0; $i < $count; $i++) {
        $sum += $ar[$i];
    }

    return $sum;
}
// 04. Diagonal Difference
function diagonalDifference($arr) {
    $length = count($arr);
    $diagonalAwal = 0;
    $diagonalKedua = 0;
    $last = $length - 1;
    for ($i = 0; $i < $length; $i++) {
        $diagonalAwal += $arr[$i][$i];
        $diagonalKedua += $arr[$i][$last--];
    }
    
    $nilai = $diagonalAwal - $diagonalKedua;
    
    if ($nilai < 0) {
        $nilai = -$nilai;
    }
    
    return $nilai;
}
// 05. Plus Minus
function plusMinus($arr) {
    $length = count($arr);
    $numbers = [0, 0, 0];

    for ($i = 0; $i < $length; $i++) {
        $val = $arr[$i];
        if ($val === 0) {
            $numbers[2] = $numbers[2] + 1;
        } elseif ($val > 0) {
            $numbers[0] = $numbers[0] + 1;
        } else {
            $numbers[1] = $numbers[1] + 1;
        }
    }

    for ($i = 0; $i < count($numbers); $i++) {
        $ratio = number_format($numbers[$i] / $length, 6);
        echo $ratio;
        echo "\n";
    }
}
// 06. Staircase
function staircase($n) {
    $totalSteps = $n;
    $staircase = [];

    for ($n; $n > 0; $n--) {
        $stairs = [];

        for ($i = 1; $i <= $n; $i++) {
            if ($i == $n) {
                $totalStairs = ($totalSteps - $n) + 1;
                for ($totalStairs; $totalStairs > 0; $totalStairs--) {
                    array_push($stairs, "#");
                }
                array_push($staircase, $stairs);
                break;
            }
            array_push($stairs, " ");
        }
    }

    for ($i = 0; $i < count($staircase); $i++) {
        $stairs = $staircase[$i];
        for ($j = 0; $j < count($stairs); $j++) {
            echo $stairs[$j];
        }
        echo "\n";
    }
}
// 07. Mini-Max Sum
function miniMaxSum($arr) {
    $maxSumTempArr = $arr;
    $minSumTempArr = $arr;
    
    sort($minSumTempArr);
    $minSumArr = array_splice($minSumTempArr, 0 ,4);

    rsort($maxSumTempArr);
    $maxSumArr = array_splice($maxSumTempArr, 0, 4);    

    echo array_sum($minSumArr) . ' ' . array_sum($maxSumArr);
}
//08. Birthday Cake Candles
function birthdayCakeCandles($ar) {
    $candles = array_count_values($ar);
    sort($candles);
    $jumlah = array_values($candles);
    $count = count($jumlah);
    return $jumlah[$count - 1];
 }
 

//09. A Very Big Sum
function aVeryBigSum($ar) {
    $x = 0;
    $count = count($ar);

    for ($i = 0; $i < $count; $i++) {
        $hasil = $ar[$i];
        $x += $hasil;
    }

    return $x;
}
 //10. Compare the Triplets
function compareTriplets($a, $b) {
    $length = count($a);
    $aliceScore = 0;
    $bobScore = 0;
    
    for ($i = 0; $i < $length; $i++) {
        if ($a[$i] > $b[$i]) {
            $aliceScore++;
        } elseif ($a[$i] < $b[$i]) {
            $bobScore++;
        }
    }
    
    return [$aliceScore, $bobScore];
}
