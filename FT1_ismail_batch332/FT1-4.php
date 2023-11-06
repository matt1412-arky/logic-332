<?php
    function cariLembarKe($n, $x) {
        if ($x % 2 == 1) {
            // Halaman ganjil, berada pada lembar sebelah kanan
            $lembarKe = ($x + 1) / 2;
            $n--;
        } 
        return $lembarKe;
    }
    
    // Contoh penggunaan
    $n1 = readline("Input N: ");
    $x1 = readline("Input X : ");
    echo "Halaman $x1 berada pada lembar ke-" . cariLembarKe($n1, $x1) . "\n";
      
?>