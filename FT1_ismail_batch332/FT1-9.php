<?php
    function kelompokkanKata($kata) {
        $kelompok = [];
    
        foreach ($kata as $kata) {
            $panjang = strlen($kata);
            if (!isset($kelompok[$panjang])) {
                $kelompok[$panjang] = [];
            }
            $kelompok[$panjang][] = $kata;
        }
    
        ksort($kelompok);
    
        foreach ($kelompok as $panjang => $kata) {
            echo implode(", ", $kata) . "\n";
        }
    }
    
    
    $kata = ["saya", "mau", "memakan", "tahu", "dan", "minum", "teh"];
    kelompokkanKata($kata);
    
?>