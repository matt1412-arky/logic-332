<?php

    //  -   -   -       For Looping     -   -   -   //
    for($i = 0; $i < 10; $i++){     //  -   -   <<-- for ($int initial value, conditional $int, $int increment/decrement)
        echo "i love you" . " | ";
    }
    echo "\n";

    //  -   -   -   While Looping       -   -   -   //
    $i = 0;
    while($i != 10){        //  -   -   -   -   <<-- while (condition haven't met), keep looping
        echo "i love you" . " | ";
        $i++; 
    }
    echo "\n";

    //  -   -   -   Do / While Looping  -   -   -   //
    $i = 1;
    do {
        echo "i love you" . " | ";
        $i++;
    } while($i <= 10);
    echo "\n";

    //  -   -   -   Nested Looping      -   -   -   //
    //  -   -   -   Nested For
    for($i = 1; $i <= 3; $i++){
        for($j = 1; $j <= 3; $j++){
            echo $i . $j . " ";
        }
        echo "\n";
    }
    echo "\n";

    //  -   -   -   Nested While
    $i = 1;     //  -   -   <<-- var init for first loop

    while($i < 4){
        $j = 1;     //  -   -   <<-- var init for nested loop, reinitiated every loop
        while($j < 4){
            echo $i . $j . " ";
            $j++;
        }
        echo "\n";
        $i++;
    }

?>