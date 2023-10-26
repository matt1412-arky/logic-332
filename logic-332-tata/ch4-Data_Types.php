<?php

    //  -   -   -   Data Types  -   -   -   //
    $string = "hello my n";
    $int = 420;         // - - <<-- Integer, angka mutlak, range -2147483648 s/d 2147483648
    $float = 6.9;       // - - <<-- angka desimal
    $boolean = true;    // - - <<-- value biner, true or false
    $object;            // - - <<-- 
    $nul = NULL;        // - - <<-- no value

    //  -   -   -   Types Conversion - - - //
    $a = 3; $b = 3.14; $c = "4.6";

    $x = $a + $b + $c;              // - - <<-- types converted automatically to "number" type, implicit conversion
    $x = $a + (int)$b + (int)$c;    // - - <<-- types converted to "integer", explicit conversion
    $x = ($a + $b + $c) . "";       // - - <<-- convert to string with concat

    //  -   -   -   Math Mehod  -   -   -   //
    $a = [1, 2, 3, 4, 5, 6];

    $x = pi();      // - - - - - - - - - - - - - - - <<-- pi value <expected = 3.141....>
    $x = number_format((float) pi(), 2, "."); // - - <<-- rounding number <expected = 3.14>
    $x = round($x); // - - - - - - - - - - - - - - - <<-- pembulatan <expected = 3>
    $x = min($a);   // - - - - - - - - - - - - - - - <<-- find min value from array <expected = 1>
    $x = max($a);   // - - - - - - - - - - - - - - - <<-- find max value from array <expected = 5>
    $x = abs(-4);   // - - - - - - - - - - - - - - - <<-- return positive/absolute value <expected = 4>
    $x = rand(10, 90);  // - - - - - - - - - - - - - <<-- give random number <expected = random number between 10 and 90>
    $x = sqrt(64);   // - - - - - - - - - - - - - - - <<-- akar <expected = 8>

    // - - -     Constant     - - - //
    define("GREETING", "hello world!"); // - - <<-- constant, harus kapital bersifat global
    echo GREETING;      // - - - - - - - - - - <<-- <expected = "hello world!">

?>