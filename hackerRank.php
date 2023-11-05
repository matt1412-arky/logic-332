<?php
//Warmup
// 01. Solve Me First
function solveMeFirst($a, $b)
{
    return $a + $b;
}
// 02. Time Conversion
function timeConversion($s)
{
    $strToTime = strtotime($s);
    return date('H:i:s', $strToTime);
}
// 03. Simple Array Sum
function simpleArraySum($ar)
{
    $sum = 0;
    $count = count($ar);

    for ($i = 0; $i < $count; $i++) {
        $sum += $ar[$i];
    }

    return $sum;
}
// 04. Diagonal Difference
function diagonalDifference($arr)
{
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
function plusMinus($arr)
{
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
function staircase($n)
{
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
function miniMaxSum($arr)
{
    $maxSumTempArr = $arr;
    $minSumTempArr = $arr;

    sort($minSumTempArr);
    $minSumArr = array_splice($minSumTempArr, 0, 4);

    rsort($maxSumTempArr);
    $maxSumArr = array_splice($maxSumTempArr, 0, 4);

    echo array_sum($minSumArr) . ' ' . array_sum($maxSumArr);
}
//08. Birthday Cake Candles
function birthdayCakeCandles($ar)
{
    $candles = array_count_values($ar);
    sort($candles);
    $jumlah = array_values($candles);
    $count = count($jumlah);
    return $jumlah[$count - 1];
}
//09. A Very Big Sum
function aVeryBigSum($ar)
{
    $x = 0;
    $count = count($ar);

    for ($i = 0; $i < $count; $i++) {
        $hasil = $ar[$i];
        $x += $hasil;
    }

    return $x;
}
//10. Compare the Triplets
function compareTriplets($a, $b)
{
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

//String
//01. CamelCase
function camelcase($s)
{
    $wordCount = 1;

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        if ($char === strtoupper($char)) {
            $wordCount++;
        }
    }

    return $wordCount;
}
//02. Strong Password
function minimumNumber($n, $password)
{
    $requiredChars = [
        'number' => "0123456789",
        'lower' => "abcdefghijklmnopqrstuvwxyz",
        'upper' => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
        'special' => "!@#$%^&*()-+"
    ];

    $missingCategories = 4;

    for ($i = 0; $i < 4; $i++) {
        $key = array_keys($requiredChars)[$i];
        $value = $requiredChars[$key];
        $found = false;
        for ($j = 0; $j < strlen($password); $j++) {
            if (strpos($value, $password[$j]) !== false) {
                $found = true;
                break;
            }
        }
        if ($found) {
            $missingCategories--;
        }
    }

    $length = max(6 - $n, $missingCategories);

    return $length;
}
//03. Caesar Cipher
function caesarCipher($s, $k)
{
    $k = $k % 26;
    $c = "";

    for ($x = 0, $l = strlen($s); $x < $l; $x++) {
        $char = $s[$x];
        $base = '';

        if ($char >= 'A' && $char <= 'Z') {
            $base = 'A';
        } elseif ($char >= 'a' && $char <= 'z') {
            $base = 'a';
        }

        if ($base) {
            $shifted = chr(((ord($char) - ord($base) + $k) % 26) + ord($base));
            $c .= $shifted;
        } else {
            $c .= $char;
        }
    }

    return $c;
}
//04. Mars Exploration
function marsExploration($s)
{
    $count = 0;
    for ($x = 0, $l = strlen($s); $x < $l; $x++) {
        if ($x % 3 == 1) {
            if ($s[$x] != 'O') {
                $count += 1;
            }
        } else {
            if ($s[$x] != 'S') {
                $count += 1;
            }
        }
    }

    return $count;
}
//05. HackerRank in a String!
function hackerrankInString($s)
{
    $h = 'hackerrank';
    $i = 0;
    $l = strlen($s);
    for ($x = 0; $x < $l; $x++) {
        if ($h[$i] == $s[$x] && ++$i > 9) {
            return 'YES';
        }
    }

    return 'NO';
}
//06. Pangrams
function pangrams($s)
{
    $str = str_replace(" ", "", $s);
    $str = strtolower($str);
    $str = str_split($str, 1);
    sort($str);

    $karakterUnik = "";
    $karakterSebelumnya = null;
    $str_length = count($str);

    for ($i = 0; $i < $str_length; $i++) {
        $char = $str[$i];

        if ($char !== $karakterSebelumnya) {
            $karakterUnik .= $char;
            $karakterSebelumnya = $char;
        }
    }

    $lower_case = "abcdefghijklmnopqrstuvwxyz";

    if ($karakterUnik === $lower_case) {
        return "pangram";
    } else {
        return "not pangram";
    }
}
//07. Separate the Numbers
function separateNumbers($s)
{
    $length = strlen($s);

    if ($length == 1) {
        echo "NO\n";
        return;
    }

    $found = false;

    for ($i = 1; $i <= $length / 2; $i++) {
        $num = (int) substr($s, 0, $i);
        $newStr = (string) $num;

        for ($j = $i + 1; strlen($newStr) < $length; $j++) {
            $num++;
            $newStr .= (string) $num;
        }

        if ($newStr === $s) {
            $found = true;
            echo "YES " . substr($s, 0, $i) . "\n";
            break;
        }
    }

    if (!$found) {
        echo "NO\n";
    }
}
//08. Gemstones
function gemstones($arr)
{
    $count = 0;
    $alphabet = range('a', 'z');
    $numAlphabet = count($alphabet);

    for ($k = 0; $k < $numAlphabet; $k++) {
        $c = $alphabet[$k];
        $result = true;
        $numStrings = count($arr);

        for ($i = 0; $i < $numStrings; $i++) {
            $stringArray = str_split($arr[$i]);
            $found = false;


            for ($j = 0; $j < count($stringArray); $j++) {
                if ($stringArray[$j] === $c) {
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                $result = false;
                break;
            }
        }

        if ($result) {
            $count++;
        }
    }

    return $count;
}
//09. Making Anagram
function makingAnagrams($s1, $s2)
{
    $counts1 = [];
    for ($x = 0, $l = strlen($s1); $x < $l; $x++) {
        if (!isset($counts1[$s1[$x]])) {
            $counts1[$s1[$x]] = 1;
        } else {
            $counts1[$s1[$x]]++;
        }
    }

    $counts2 = [];
    for ($x = 0, $l = strlen($s2); $x < $l; $x++) {
        if (!isset($counts2[$s2[$x]])) {
            $counts2[$s2[$x]] = 1;
        } else {
            $counts2[$s2[$x]]++;
        }
    }

    $diff = 0;
    $alphabets = range('a', 'z');
    $numAlphabets = count($alphabets);

    for ($i = 0; $i < $numAlphabets; $i++) {
        $c = $alphabets[$i];
        $count1 = isset($counts1[$c]) ? $counts1[$c] : 0;
        $count2 = isset($counts2[$c]) ? $counts2[$c] : 0;
        if ($count1 > $count2) {
            $diff += $count1 - $count2;
        } else {
            $diff += $count2 - $count1;
        }
    }

    return $diff;
}
