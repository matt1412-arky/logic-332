<?php
    // function formatPenjumlahan($numbers) {
    //     $total = 0;
    //     foreach ($numbers as $number) {
    //         $total += $number;
    //         echo implode(' + ', $numbers)." = $total\n";
    //         array_pop($numbers);
    //     }
    // }
    
    //     // Contoh penggunaan
    //     $numbers1 = [4, 1, 3];
    //     echo implode(' + ', $numbers1)." = ".array_sum($numbers1)."\n";
    //     formatPenjumlahan($numbers1);
        
    //     $numbers2 = [2, 2, 3, 0, 8];
    //     echo implode(' + ', $numbers2)." = ".array_sum($numbers2)."\n";
    //     formatPenjumlahan($numbers2);
    
    // function formatPenjumlahan($deretAngka) {
    //     $total = 0;
        
    //     foreach ($deretAngka as $angka) {
    //         $total += $angka;
        //         echo $total;
    //         echo "\n";
    //     }
    // }
    
    // // Contoh penggunaan
    // $deretAngka1 = [4, 1, 3];
    // $deretAngka2 = [2, 2, 3, 0, 8];
    
    // echo implode(' + ', $deretAngka1)." = ".array_sum($deretAngka1)."\n";
    // formatPenjumlahan($deretAngka1);
    
    // // echo "Example 2:\n";
    // // formatPenjumlahan($deretAngka2);
    
    // function formatPenjumlahan($deretAngka) {
    //     $total = 0;
    //     $output = "";
    
    //     foreach ($deretAngka as $angka) {
    //         $total += $angka;
    //         $output .= $angka;
    
    //         if ($angka != end($deretAngka)) {
    //             $output .= " + ";
    //         } else {
    //             $output .= " = " . $total;
    //         }
    
    //         echo $output . "\n";
    //     }
    // }
    
    
    // echo "Example 1:\n";
    // formatPenjumlahan($deretAngka1);
    
    // echo "Example 2:\n";
    // formatPenjumlahan($deretAngka2);
  
    function formatPenjumlahan($deretAngka) {
        $total = 0;
    
        for ($i = 0; $i < count($deretAngka); $i++) {
            $total += $deretAngka[$i];
            $output = implode(" + ", array_slice($deretAngka, 0, $i + 1));
            echo $output . " = " . $total . "\n";
        }
    }
    
    
    $deretAngka1 = readline("Masukan Deret: ");
    
    
    
    echo "Example 1:\n";
    formatPenjumlahan($deretAngka1);
    
    
    // function formatPenjumlahan($arr) {
    //     $result = [];
    //     $total = 0;
    
    //     foreach ($arr as $number) {
    //         $total += $number;
    //         $result[] = $total;
    //     }
    
    //     return $result;
    // }
    
    // $numbers1 = [4, 1, 3];
    // $numbers2 = [2, 2, 3, 0, 8];
    
    // $formatted1 = formatPenjumlahan($numbers1);
    // $formatted2 = formatPenjumlahan($numbers2);
    
    // foreach ($formatted1 as $sum) {
    //     echo $sum . "\n";
    // }
    
    // foreach ($formatted2 as $sum) {
    //     echo $sum . "\n";
    // }
    
    

?>