<?php
    # 01 Solve Me First
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

    # 02 Time Conversion
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

    # 03 Simple Array Sum
    /*
     * Complete the 'simpleArraySum' function below.
     *
     * The function is expected to return an INTEGER.
     * The function accepts INTEGER_ARRAY ar as parameter.
     */
    function simpleArraySum($ar) {
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

    # 04 Diagonal Difference
    

    # 05 Plus Minus


    # 06 Staircase


    # 07 Mini-Max Sum


    # 08 Birthday Cake Candles


    # 09 A Very Big


    # 10 Compare the Triplets


?>