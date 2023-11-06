<?php
    function hitungPerolehanSuara($n, $m) {
        $totalSuara = $n;
        $calonSuara = [1,2,3];
    
        for ($i = 1; $i <= $m; $i++) {
            // Generate suara acak untuk masing-masing calon
            $suara = mt_rand(0, $totalSuara);
            $calonSuara[] = $suara;
            $totalSuara -= $suara;
        }
    
        // Mengurutkan perolehan suara dari yang terbanyak
        arsort($calonSuara);
    
        // Menampilkan perolehan suara
        foreach ($calonSuara as $calon => $suara) {
            $persentase = number_format(($suara / $n) * 100, 2);
            echo "Calon no. urut $calon: $suara suara ($persentase %)\n";
        }
    
        // Menampilkan perolehan golput
        $persentaseGolput = number_format(($totalSuara / $n) * 100, 2);
        echo "Golput: $totalSuara suara ($persentaseGolput %)\n";
    }
    
    // Contoh penggunaan
    // $n = 1000;
    // $m = 3;
    $n = readline("Inputan N: ");
    $m = readline("Inputan M: ");
    hitungPerolehanSuara($n, $m);
    
?>