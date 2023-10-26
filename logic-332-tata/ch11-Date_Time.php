<?php

    //  -   -   -        Date       -   -   -   //
    echo "sekarang tanggal : " . date("y/M/d") . "\n";      //  Y = year-full   | y = year 2-digit
    echo "sekarang tanggal : " . date("Y-M-d") . "\n";      //  M = abr. month  | m = month digit
    echo "sekarang tanggal : " . date("l, Y-M-d") . "\n";   //  D = abr. day    | d = date          | l = day-full

    //  -   -   -       Time        -   -   -   //
    echo "sekarang jam : " . date("h:i:s") . "\n";      //  h = hours   | H = 24-hours
    echo "sekarang jam : " . date("h:i:s a") . "\n";    //  i = minutes | a = AM and PM / period / meridiem indicator
    echo "sekarang jam : " . date("H:i:s") . "\n";      //  s = seconds

    date_default_timezone_set("Australia/Melbourne");          //  set timezone    | Continent/City
    echo "sekarang jam : " . date("H:i:s") . "\n";

    //  -   -   - Differential Date -   -   -   //
    $start = new DateTimeImmutable('2023/10/11 07:00:00');
    $end = date("Y/m/d H:i:s");
    $end = new DateTimeImmutable($end);
    $delta = $start->diff($end);
    echo $delta->format('%a Days %H Hours %i Minutes %s Seconds') . "\n";     // count days starting from $start date until $end date

?>