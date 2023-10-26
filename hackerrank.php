<?php

        /* Warm Up */
    /* 01. Solve Me First */
        function solveMeFirst($a,$b){
        // Hint: Type return $a + $b; below  
        return $a + $b;
        }

        $handle = fopen ("php://stdin","r");
        $_a = fgets($handle);
        $_b = fgets($handle);
        $sum = solveMeFirst((int)$_a,(int)$_b);
        print ($sum);
        fclose($handle);
    
    /*  02. Time ConversionPage */
    /*
     * Complete the 'timeConversion' function below.
     *
     * The function is expected to return a STRING.
     * The function accepts STRING s as parameter.
     */
    
        function timeConversion($s) {
        // Write your code here
        $strtotime = strtotime($s);
        return date("H:i:s", $strtotime);
        }
    
        $fptr = fopen(getenv("OUTPUT_PATH"), "w");    
        $s = rtrim(fgets(STDIN), "\r\n");
        $result = timeConversion($s);
        fwrite($fptr, $result . "\n");
        fclose($fptr);
    
    /*  03. Simple Array SumPage
    *
    * Complete the 'simpleArraySum' function below.
    *
    * The function is expected to return an INTEGER.
    * The function accepts INTEGER_ARRAY ar as parameter.
    */
   
        function simpleArraySum($ar) {
            return array_sum ($ar);
   
         }
   
        $fptr = fopen(getenv("OUTPUT_PATH"), "w");
        $ar_count = intval(trim(fgets(STDIN)));
        $ar_temp = rtrim(fgets(STDIN));
        $ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
        $result = simpleArraySum($ar);
        fwrite($fptr, $result . "\n");
        fclose($fptr);

    /*  04. Diagonal DifferencePage */
    /*
      Complete the 'diagonalDifference' function below.
      The function is expected to return an INTEGER.
      The function accepts 2D_INTEGER_ARRAY arr as parameter.
    */

        function diagonalDifference($arr) {
            $left_diagonal = [];
            $right_diagonal = [];
    
        for ($i = 0; $i < $n = count($arr); $i++) {
            $left_diagonal[] = $arr[$i][$i];
            $right_diagonal[] = $arr[$i][$n - $i - 1];
        }
    
        $different = array_sum($left_diagonal) - array_sum($right_diagonal);
        return abs($different);

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
        
   /*  05. Plus MinusPage */
        
        /*
         Complete the 'plusMinus' function below.
         The function accepts INTEGER_ARRAY arr as parameter.
        */

        function plusMinus($arr) {
        // Write your code here
        $max = count($arr);
        $positif = $negatif = $zero = 0;
        for ($i = 0; $i < $max; $i++){
            $positif += $arr[$i] > 0 ? 1 : 0;
            $negatif += $arr[$i] < 0 ? 1 : 0;
            $zero += $arr[$i] == 0 ? 1 : 0;    
        }
        echo  number_format($positif/$max, 6, '.', '')."\n";
        echo  number_format($negatif/$max, 6)."\n";
        echo  number_format($zero/$max, 6)."\n" ;
        }

        $n = intval(trim(fgets(STDIN)));
        $arr_temp = rtrim(fgets(STDIN));
        $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
        plusMinus($arr);

    /*  06. StaircasePage */
        
        /*
         Complete the 'staircase' function below.
        
         The function accepts INTEGER n as parameter.
        */

        function staircase($n) {
    // Write your code here
         for ($i = 1; $i <= $n; $i++) {
            echo str_repeat(" ", $n - $i) . str_repeat("#", $i). "\n";
            }
     }
        $n = intval(trim(fgets(STDIN)));

        staircase($n);

    /*  07. Mini-Max SumPage */

        /*
         Complete the 'miniMaxSum' function below.
         The function accepts INTEGER_ARRAY arr as parameter.
        */

            function miniMaxSum($arr) {
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

    /*  08. Birthday Cake CandlesPage */
        /* Complete the 'birthdayCakeCandles' function below.
           The function is expected to return an INTEGER.
           The function accepts INTEGER_ARRAY candles as parameter.
        */

            function birthdayCakeCandles($candles) {
            // Write your code here
    
            $a = max ($candles);
            $cnt = array_count_values($candles)[$a];
            return $cnt;
        }
        $fptr = fopen(getenv("OUTPUT_PATH"), "w");
        $candles_count = intval(trim(fgets(STDIN)));
        $candles_temp = rtrim(fgets(STDIN));
        $candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));
        $result = birthdayCakeCandles($candles);
        fwrite($fptr, $result . "\n");
        fclose($fptr);

    /*  09. A Very Big SumPage */
        /* Complete the 'aVeryBigSum' function below.
        The function is expected to return a LONG_INTEGER.
        The function accepts LONG_INTEGER_ARRAY ar as parameter.
    */

        function aVeryBigSum($ar) {
            // Write your code here
            $x = 0;
            $count = count($ar);

            for ($i = 0; $i < $count; $i++) {
                $hasil = $ar[$i];
                $x += $hasil;
            }
        
            return $x;
        }
        $fptr = fopen(getenv("OUTPUT_PATH"), "w");
        $ar_count = intval(trim(fgets(STDIN)));
        $ar_temp = rtrim(fgets(STDIN));
        $ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
        $result = aVeryBigSum($ar);
        fwrite($fptr, $result . "\n");
        fclose($fptr);
    
    /*  10. Compare the Triplets */
        /* Complete the 'compareTriplets' function below.
           The function is expected to return an INTEGER_ARRAY.
           The function accepts following parameters:
             1. INTEGER_ARRAY a
             2. INTEGER_ARRAY b
    */

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

        $fptr = fopen(getenv("OUTPUT_PATH"), "w");
        $a_temp = rtrim(fgets(STDIN));
        $a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));
        $b_temp = rtrim(fgets(STDIN));
        $b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));
        $result = compareTriplets($a, $b);
        fwrite($fptr, implode(" ", $result) . "\n");
        fclose($fptr);
        
        /* String */
    /* 01. CamelCasePage */
        /* Complete the 'camelcase' function below.
           The function is expected to return an INTEGER.
           The function accepts STRING s as parameter.
        */

            function camelcase($s) {
                // Write your code here
                $count = 1;
                for($i = 0; $i< strlen($s); $i++)
                if(ctype_upper($s[$i]))
                $count++;
                return $count;
            }
            $fptr = fopen(getenv("OUTPUT_PATH"), "w");
            $s = rtrim(fgets(STDIN), "\r\n");
            $result = camelcase($s);
            fwrite($fptr, $result . "\n");
            fclose($fptr);
    /* 02. Strong PasswordPage */
    /* 03. Caesar CipherPage */
    /* 04. Mars ExplorationPage */
    /* 05. HackerRank in a String!Page */
    /* 06. PangramsPage */
    /* 07. Separate the NumbersPage */
    /* 08. GemstonesPage */ 
    /* 09. Making AnagramsPage */
    /* 10. Two StringsPage */







?>