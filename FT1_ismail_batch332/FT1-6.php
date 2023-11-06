<?php
    function mainPermainan() {
        $pemainA = 0;
        $pemainB = 0;
        $pilihanPemain = readline("Pilih pemain: "); // Anda dapat mengganti pemain awal sesuai keinginan
    
        for ($putaran = 1; $putaran <= 3; $putaran++) {
            $angkaPemainA = rand(1, 9);
            $angkaPemainB = rand(1, 9);
    
            echo "Round $putaran => $pilihanPemain = $angkaPemainA, ";
            echo ($pilihanPemain == "A") ? "B" : "A";
            echo " = $angkaPemainB\n";
    
            if ($pilihanPemain == "A") {
                $pemainA += $angkaPemainA;
                $pemainB += $angkaPemainB;
            } else {
                $pemainA += $angkaPemainB;
                $pemainB += $angkaPemainA;
            }
    
            echo "Nilai A = $pemainA, B = $pemainB\n";
    
            $pilihanPemain = ($pilihanPemain == "A") ? "B" : "A";
        }
    
        if ($pemainA > $pemainB) {
            echo "Anda menang, A menang\n";
        } elseif ($pemainB > $pemainA) {
            echo "Anda kalah, B menang\n";
        } else {
            echo "Permainan seri\n";
        }
    }
    
    // Contoh penggunaan
    mainPermainan();
    
?>