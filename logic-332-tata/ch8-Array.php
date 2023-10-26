<?php

    function readArray($arr){   //  -   -   -   <<-- Function to read array
        for($i = 0; $i < count($arr); $i++){
            if(is_array($arr[0])){
                for($j = 0; $j < count($arr[$i]); $j++){
                    echo $arr[$i][$j] . " ";
                }
                echo "\n";
            } else {
                echo $arr[$i] . " ";
            }
        }
        echo "\n";
    }

    //  -   -   -       Array           -   -   -   //
    $x_arr = array(5, 4, 3, 2, 1);
    readArray($x_arr);      //  -   -   -   <<-- FUNCTION to print array
    print_r($x_arr); echo "\n";     //  -   <<-- print $array with index
    echo (sort($x_arr)); echo "\n"; //  -   <<-- sort $array ascending
    echo count($x_arr) . "\n";      //  -   <<-- count $array element

    for ($i = 0; $i < count($x_arr); $i++){  
        echo $x_arr[$i] . " ";      //  -   <<-- accessing array element
    }   echo "\n";

    //  -   -   -   Dimensional Array   -   -   -   //
    $y_arr = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );

    readArray($y_arr);
    print_r($y_arr);

    for ($i = 0; $i < count($y_arr); $i++){     
        for ($j = 0; $j < count($y_arr[$i]); $j++){
            echo $y_arr[$i][$j] . " ";  //  <<-- accessing array element
        }
        echo "\n";
    }   

?>