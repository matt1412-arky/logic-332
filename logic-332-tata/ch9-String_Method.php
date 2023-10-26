<?php
    //  -   -   -   String  Method  -   -   -   //
    $str = "i love you"; $num = 10000000; $str_arr = ["i", "love", "you"]; $strCap = "I LOVE YOU";

    echo strlen($str);      //  -   -   -   -   -   -   -   <<-- count char of $string
    echo $str . $str2;      //  -   -   -   -   -   -   -   <<-- concat $string with $string
    echo str_word_count($str);  //  -   -   -   -   -   -   <<-- count word based on separator
    echo str_replace("love", "hate", $str); //  -   -   -   <<-- replace STRING with STRING on $string
    print_r(str_split($str, 5));    //  -   -   -   -   -   <<-- split $string to ARRAY, each array has $int amount of character
    echo str_repeat($str, 5) . "\n";    //   -   -   -  -   <<-- repeat $string, int amount of times
    echo str_pad($str, 20, "#", STR_PAD_BOTH) . "\n";  //   <<-- pad string so it has the same character amount as $int, use STR_PAD_RIGHT/LEFT/BOTH for padding position
    echo strpos($str, "love") . "\n";   //  -   -   -   -   <<-- find array position of $string containing $string
    echo number_format($num, 2, ".", ",") . "\n";   //  -   <<-- format NUMBER, thousand and more, with separator to STRING, add $int char amount on the back if necesarry
    echo strrev($str) . "\n";   //  -   -   -   -   -   -   <<-- reverse $string
    echo join(" ", $str_arr) . "\n";    //  -   -   -   -   <<-- join $array into STRING with separator
    echo strtolower($strCap) . "\n";    //  -   -   -   -   <<-- lowercase $string
    echo strtoupper($str) . "\n";   //  -   -   -   -   -   <<-- uppercase $string
    echo ucfirst($str) . "\n";      //  -   -   -   -   -   <<-- uppercase first char of $string
    echo ucwords($str, " ")  . "\n";    //  -   -   -   -   <<-- uppercase each word of $string based on separator
    echo md5($str) . "\n";      //  -   -   -   -   -   -   <<-- hash $string with MD5 method
    echo sha1($str) . "\n";     //  -   -   -   -   -   -   <<-- hash $string with SHA1 method
    
?>