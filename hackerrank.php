<?php

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
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
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
        


    /*  06. StaircasePage */
        


    /*  07. Mini-Max SumPage */
    
        
    /*  08. Birthday Cake CandlesPage */
        
    /*  09. A Very Big SumPage */
        
    /*  10. Compare the Triplets */








?>