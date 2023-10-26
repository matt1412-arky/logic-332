<?php

    function readArray($arr){
        for($i = 0; $i < count($arr); $i++){
            for($j = 0; $j < count($arr[$i]); $j++){
                echo $arr[$i][$j] . "\t";
            }
            echo "\n";
        }
    }

    /** Buat Array
     * 1, 3, 5, 7
     * 9, 11, 13, 15
     */

    echo "Array no 1: \n";
    $x_arr = array(); $x = 1;

     for($i = 0; $i < 2; $i++){
        for($j = 0; $j < 4; $j++){
            $x_arr[$i][$j] = $x;
            $x += 2;
        }
     }
     readArray($x_arr);

     // tambah array //

    echo "Array no 2: \n";
    $y_arr = array(); $z_arr = array(); $y = 2;

    for($i = 0; $i < 2; $i++){
       for($j = 0; $j < 4; $j++){
           $y_arr[$i][$j] = $y;
           $y += 2;
       }
    }
    readArray($y_arr);

    echo "penjumlahan 2 array diatas: \n";
    for($i = 0; $i < 2; $i++){
        for($j = 0; $j < 4; $j++){
            $z_arr[$i][$j] = $y_arr[$i][$j] + $x_arr[$i][$j];
        }
     }
     readArray($z_arr); echo "\n";

     // 1. function insert string to string
     function makeOutWord($str_1, $str_2){
        if(strlen($str_1)  % 2 == 0 ){
            $front = substr($str_1, 0, strlen($str_1) / 2);
            $back = substr($str_1, 0 - (strlen($str_1) / 2));
            $res = $front . $str_2 . $back;
            return $res;
        } else {
            $res = "Tag tidak simetris!";
            return $res;
        }
     }

     echo makeOutWord("<<>>", "html");
     echo "\n";

     // 2. function looping huruf depan
     function extraFront($str){
        $res = "";
        $front = substr($str, 0, 2);
        for($i = 0; $i < 3; $i++){
            $res .= $front;
        }
        return $res;
     }

     echo extraFront("Hello");
     echo "\n";

     // 3. function looping huruf belakang
     function repeatEnd($str, $num){
        $res = "";
        $back = substr($str, 0 - $num);
        for($i = 0; $i < $num; $i++){
            $res .= $back;
        }
        return $res;

     }
     echo repeatEnd("Hello", 1);
     echo "\n";

     // 4 function cari max dari angka awal dan akhir
     function maxEnd($arr){
        $max = 0; $res = [];
        $first = $arr[0];
        $last = $arr[count($arr) - 1];
        switch($first){
            case $first > $last: $max = $first; break;
            case $first < $last: $max = $last; break;
        };
        for($i = 0; $i < count($arr); $i++){
            $res[$i] = $max;
        }
        return print_r($res);
     }

     $x = [1, 2, 3, 4];
     maxEnd([1, 2, 3, 4]);

     // 5. maxTriple
     function maxTriple($arr){
        $max = 0;
        if(count($arr) % 2 != 0 && count($arr) > 1){
            for($i = 0; $i < count($arr); $i++){
                if($arr[$i] > $max){
                    $max = $arr[$i];
                }
            }
        } else {
            $max = "panjang array tidak ganjil!";
        }
        return $max;
     }
     echo maxTriple($x);
     echo "\n";

     // 6. Swap end
     function swapEnds($arr){
        $res = [];
        $len = count($arr) - 1;
        $res = $arr;
        $res[0] = $arr[$len];
        $res[$len] = $arr[0];
        return print_r($res);
     }

     swapEnds([8, 6, 7, 9, 5]);

?>