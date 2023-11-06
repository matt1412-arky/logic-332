<?php
    // function hitung_vocal($kalimat) {
    //     $arr = readline("Masukan Kalimat : ");           
    //     $kalimat = strtolower(str_replace(" ","",$arr));
    //     $kalimatArr = str_split($kalimat);
    //     sort($kalimatArr);
    //     $kalimat = implode("", $kalimatArr);
    //     $vocal = "a, i, u, e,o";
    //     $konsonan = "b, c, d, f, g, h, j, k, l, m, n, p, q, r, s, t, v, w, x, y, z";
    //     $countV = 0;
    //     $countK=0;
    //     $vocalArr = " ";
    //     $konsonanArr = " ";

    //     for ($i = 0; $i < strlen($kalimat); $i++) {
    //         $karakter = $kalimat[$i];
    //         if (strpos($vocal, $karakter) !== false) {
    //             $countV++;
    //             $vocalArr.=$karakter;
    //         } else if (strpos($konsonan, $karakter) !== false) {
    //                 $countK++;
    //                 $konsonanArr.=$karakter;
    //         }
            
    //     }

    //     echo "Ada ".($countK)." Huruf Konsonan - ". $konsonanArr . "\n";        
    //     echo "Ada ".($countV)." Huruf Vocal - ". $vocalArr . "\n";

        
    // }
    // // echo ("Xsis Academy")."\n";
    // echo hitung_vocal($kalimat)

    function hitungGrupKonsonanVokal($kalimat) {
        $kalimat = strtolower($kalimat); // Mengubah semua huruf menjadi huruf kecil untuk memudahkan pengolahan
    
        $konsonan = 'bcdfghjklmnpqrstvwxyz'; // Huruf konsonan
        $vokal = 'aeiou'; // Huruf vokal
    
        $totalGrup = 0;
        $panjangKalimat = strlen($kalimat);

    
        for ($i = 0; $i < $panjangKalimat - 1; $i++) {
            $karakter1 = $kalimat[$i];
            $karakter2 = $kalimat[$i + 1];
    
            if (strpos($konsonan, $karakter1) !== false && strpos($vokal, $karakter2) !== false) {
                $totalGrup++;
                
            }
        }
        
    
        return $totalGrup;

        for ($i = 0; $i < count($kalimat); $i++) {
            if (preg_match('/[a-zA-Z]/', $kalimat[$i])) {
                $kiri = "";
                $kanan = "";
    
                if ($i > 0) {
                    $kiri = $kalimat[$i - 1];
                }
    
                if ($i < count($kalimat) - 1) {
                    $kanan = $kalimat[$i + 1];
                }
    
                if (strpbrk($kiri, $vokal) && strpbrk($kanan, $vokal)) {
                    $hasil[] = $kalimat[$i];
                }
            }
        }
    
        return implode(' ', $hasil);
        }
    
    
    
    $kalimat = readline("Masukan Kalimat : ");
    $jumlahGrup = hitungGrupKonsonanVokal($kalimat);
    echo "Output: $jumlahGrup\n";
    
?>