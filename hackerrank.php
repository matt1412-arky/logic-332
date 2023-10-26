<?php
// Solve me first
function solveMeFirst($a, $b)
{
    // Hint: Type return $a + $b; below  
    return $a + $b;
}

$handle = fopen("php://stdin", "r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a, (int)$_b);
print($sum);
fclose($handle);
echo "\n";

// Time Conversion
/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s)
{
    // Write your code here
    $time = date_create_from_format('h:i:sA', $s);

    if ($time) {
        return date_format($time, 'H:i:s');
    } else {
        return "Invalid input";
    }

    // Alternatif
    // return date('H:i:s', strtotime($s));
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$s = rtrim(fgets(STDIN), "\r\n");
$result = timeConversion($s);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Simple array sum
/*
 * Complete the 'simpleArraySum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY ar as parameter.
 */

function simpleArraySum($ar)
{
    // Write your code here
    return array_sum($ar);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$ar_count = intval(trim(fgets(STDIN)));
$ar_temp = rtrim(fgets(STDIN));
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
$result = simpleArraySum($ar);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Diagonal difference
/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr)
{
    // Write your code here
    $n = count($arr);
    $primarySum = 0;
    $secondarySum = 0;

    for ($i = 0; $i < $n; $i++) {
        $primarySum += $arr[$i][$i];
        $secondarySum += $arr[$i][$n - $i - 1];
    }

    return abs($primarySum - $secondarySum);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$n = intval(trim(fgets(STDIN)));
$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Plus minus
/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr)
{
    // Write your code here
    $n = count($arr);
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;

    // Count positive, negative, and zero
    // Alternatif
    // for ($i = 0; $i < $n; $i++) {
    //     $number = $arr[$i];
    //     if ($number > 0) {
    //         $positiveCount++;
    //     } elseif ($number < 0) {
    //         $negativeCount++;
    //     } else {
    //         $zeroCount++;
    //     }
    // }
    foreach ($arr as $number) {
        if ($number > 0) {
            $positiveCount++;
        } elseif ($number < 0) {
            $negativeCount++;
        } else {
            $zeroCount++;
        }
    }

    // Calculate fractions
    $positiveFraction = $positiveCount / $n;
    $negativeFraction = $negativeCount / $n;
    $zeroFraction = $zeroCount / $n;

    // Print the fractions
    echo number_format($positiveFraction, 6) . "\n";
    echo number_format($negativeFraction, 6) . "\n";
    echo number_format($zeroFraction, 6) . "\n";
}

$n = intval(trim(fgets(STDIN)));
$arr_temp = rtrim(fgets(STDIN));
$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
plusMinus($arr);
echo "\n";

// Staircase
/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n)
{
    // Write your code here
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i) . str_repeat("#", $i) . "\n";
    }
}

$n = intval(trim(fgets(STDIN)));
staircase($n);
echo "\n";

// Mini-max sum
/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr)
{
    // Write your code here
    $minValue = min($arr);
    $maxValue = max($arr);
    $totalValue = array_sum($arr);

    $minSum = $totalValue - $minValue;
    $maxSum = $totalValue - $maxValue;

    echo $maxSum . " " . $minSum;
}

$arr_temp = rtrim(fgets(STDIN));
$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
miniMaxSum($arr);
echo "\n";

// Birthday cake candles
/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles)
{
    // Write your code here
    // Find the maximum candle height
    $maxHeight = max($candles);

    // Count the number of candles with the maximum height
    $count = array_count_values($candles)[$maxHeight];

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$candles_count = intval(trim(fgets(STDIN)));
$candles_temp = rtrim(fgets(STDIN));
$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));
$result = birthdayCakeCandles($candles);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// A very big sum
/*
 * Complete the 'aVeryBigSum' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 */

function aVeryBigSum($ar)
{
    // Write your code here
    return array_sum($ar);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$ar_count = intval(trim(fgets(STDIN)));
$ar_temp = rtrim(fgets(STDIN));
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
$result = aVeryBigSum($ar);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Compare the triplets
/*
 * Complete the 'compareTriplets' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function compareTriplets($a, $b)
{
    $alice = 0;
    $bob = 0;
    for ($i = 0; $i < 3; $i++) {
        if ($a[$i] > $b[$i]) {
            $alice++;
        }
        if ($a[$i] < $b[$i]) {
            $bob++;
        }
    }

    return [$alice, $bob];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$a_temp = rtrim(fgets(STDIN));
$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));
$b_temp = rtrim(fgets(STDIN));
$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));
$result = compareTriplets($a, $b);
fwrite($fptr, implode(" ", $result) . "\n");
fclose($fptr);
