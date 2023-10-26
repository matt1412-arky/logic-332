<?php

    // hitung jumlah ukuran a6 yang ada pada aX
    $ukuran_a = 5;
    function jumlah_a6($a){
        //readLine("Jumlah lembar A6 yang muat di kertas A: ");
        echo "Jumlah lembar A6 yang muat di kertas A$a = ";
        $diff = 6 - $a;
        $luas_target = 2 * $diff;
        if($luas_target > 0){
            $res = $luas_target;
        } elseif($a == 0){
            $res = 1;
        } else{
            $res = "A6 tidak muat dalam kertas A" . $a;
        }
        return $res;
    } echo Jumlah_a6($ukuran_a) . "\n";

    // buat array sebanyak X dan output array + output array terbalik
    $x = 11;
    function make_and_rev_array($n){
        $x = 1;
        for($i = 0; $i < $n; $i++){
            $x_arr[] = $x;
            $x+=2;
        }
        $len = (count($x_arr) - 1);
        for($i = 0; $i < $n; $i++){
            $x_rev[$i] = $x_arr[$len];
            $len--;
        }
        $x = join(" ", $x_arr);
        $x_rev = join(" ", $x_rev);

        return "$x\n$x_rev\n";
    } echo make_and_rev_array($x);

    // konversi volume botol ke cangkir
    function botol_to_cangkir($x){
        $botol_gelas = 2;
        $teko_cangkir = 25;
        $gelas_cangkir = 2.5;
        
        $botol_cangkir = ($x * $botol_gelas) * $gelas_cangkir;

        return $x . " Botol = " . $botol_cangkir . " Cangkir\n";
    } echo botol_to_cangkir(1);

    // cari jumlah porsi
    $str = "Laki-laki dewasa = 3 orang, Perempuan dewasa = 1 orang, balita = 1 orang, laki-laki dewasa = 1 orang";

    function cari_porsi($str){
        $str = strtolower($str);
        $str = str_replace("orang", "", $str);
        $str = str_replace(" ", "", $str);
        $str = explode(",", $str);
        $sum = $add = 0;

        for($i = 0; $i < count($str); $i++){
            $str[$i] = explode("=", $str[$i]);
        }
        print_r($str);
        for($i = 0; $i < count($str); $i++){

            switch($str[$i][0]){
                case "laki-lakidewasa": $sum += $str[$i][1] * 2; break;
                case "perempuandewasa": $sum += $str[$i][1] * 1; $add = $str[$i][1]; break;
                case "remaja": $sum += $str[$i][1] * 1; break;
                case "anak-anak": $sum += $str[$i][1] * 0.5; break;
                case "balita": $sum += $str[$i][1] * 1; break;
            }
            echo $sum . "\n";
        }
        echo $sum . "\n";
        
        if ($sum > 5 && $sum % 3 == 0){
            $add = $add + 1;
            return $sum + $add . " Porsi\n";
        } else{
            return $sum . " Porsi\n";
        }
    } echo cari_porsi($str) . "\n";

    // cari biaya parkir
    $start = new DateTime("28 January 2020 07:30:34");
    $end = new DateTime("28 January 2020 20:03:34");

    function biaya_parkir($start, $end){

        $delta = $start->diff($end);

        $hour = $delta->format("%H");
        if($delta->format("%i") > 30){
            $hour += 1;
        } 
        if ($delta->format("%d") >= 1){
            $hour += 24 * $delta->format("%d");
        }

        if($hour <= 8){
            $price = $hour * 1000;
        } elseif($hour >= 8 && $hour < 24){
            $price = 8000;
        } elseif($hour > 24){
            $hour = round($hour / 24);
            $price = $hour * 15000;
        }
        return $price;
    } echo biaya_parkir($start, $end) . "\n";

    // cari tanggal libur bersama
    $x = 5; $y = 2; $z = new DateTime("2020-02-25");
    
    function find_same_day($find_1, $find_2,\DateTime $date){
        $z = $date;
        $x = $find_1 + 1;
        $y = $find_2 + 1;
        $len = $x * $y;
        $a = $x; $b = $y;

        for ($i = 0; $i < $len; $i++){
            $x_arr[] = $x;
            $y_arr[] = $y;
            $x += $a;
            $y += $b;
        }

        for ($i = 0; $i < $len; $i++){
            for($j = 0; $j < $len; $j++)
                if($x_arr[$i] == $y_arr[$j]){
                    $sameDay[] = $y_arr[$j];
            }
        }
        
        $same = $sameDay[0];
        while($same > 0){
            $z->modify("+1 days");
            $same--;
        }

        $newDate = $z->format("l, Y F d");

        $leap = $z->format("Y");
        if($leap % 4 == 0){
            $leap = "leap year";
        } else{
            $leap = "";
        }
        return $newDate . " " . $leap . "\n";
    } echo find_same_day($x, $y, $z) . "\n";

    //1 teko = ?botol

    // function konversi_volume(){
    //     $botol = 5;
    //     $teko = 25;
    //     $gelas = 2.5;
    //     $cangkir = 1;
        
    //     echo "Konversi Volume\n";
    //     $x = $a = readline("dari : ");
    //     $n = readline("jumlah $x: ");
    //     $y = $b = readLine("ke   : ");

    //     switch ($x) {
    //         case 'botol': $x = $botol; break;
    //         case 'teko': $x = $teko; break;
    //         case 'cangkir': $x = $cangkir; break;
    //         case 'gelas': $x = $gelas; break;
    //     }

    //     switch ($y) {
    //         case 'botol': $y = $botol; break;
    //         case 'teko': $y = $teko; break;
    //         case 'cangkir': $y = $cangkir; break;
    //         case 'gelas': $x = $gelas; break;
    //     }

    //     $res = "$n $a = " . (($x * $n) / $y) . " $b";
    //     return $res;
    // } echo konversi_volume();

    $str = "Apel:1,Pisang:3,Jeruk:1,Apel:3,Apel:5,Jeruk:8,Mangga:1";
    function readArray($arr){
        for($i = 0; $i < count($arr); $i++){
            if($arr === $arr[$i]){
                for($j = 0; $j < count($arr[$i]); $j++){
                    echo $arr[$i][$j] . "\t";
                }
            } else{
                echo $arr[$i] . "\t";
            } 
            echo "\n";
        } 
    }

    function jeruk_pisang($str){
        $str = explode(",", $str);
        sort($str);
        for($i = 0; $i < count($str); $i++){
            $str[$i] = explode(":", $str[$i]);
        }
        $temp_name = $str[0][0];
        $temp_value = 0;
        for($i = 1; $i <= count($str); $i++){
                switch($str[$i][0]){
                    case $temp_name: $temp_value += $str[$i][1]; break;
                    default : $arr[] = $temp_name . ":" . $temp_value;
                            $temp_name = $str[$i][0]; $temp_value = $str[$i][1]; break;
                }
        }
        return $arr;
    }
    readArray(jeruk_pisang($str));
?>  