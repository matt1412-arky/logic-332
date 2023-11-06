<?php
    function hitungOperasi($deretAngka, $pola, $action) {
        $hasil = 0;
    
        if ($pola == 'x') {
            foreach ($deretAngka as $key => $angka) {
                if ($key % 4 == 0) {
                    $hasil += $angka;
                }
            }
        } elseif ($pola == '+') {
            foreach ($deretAngka as $key => $angka) {
                if ($key % 2 == 0) {
                    $hasil += $angka;
                }
            }
        } elseif ($pola == '-') {
            foreach ($deretAngka as $key => $angka) {
                if ($key % 2 == 1) {
                    $hasil += $angka;
                }
            }
        }
    
        if ($action == '+') {
            $hasil += $deretAngka[4];
        } elseif ($action == '-') {
            $hasil -= $deretAngka[4];
        } elseif ($action == 'x') {
            $hasil *= $deretAngka[4];
        }
    
        return $hasil;
    }
    
    $deretAngka = readline("Masukan Angka : ");
    $pola = readline("Masukan Pola : ");
    $action = readline("Masukan Action : ");
    
    $hasil = hitungOperasi($deretAngka, $pola, $action);
    echo "Output: $hasil\n";
    
?>