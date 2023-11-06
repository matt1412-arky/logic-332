<?php
    // function penggalKata($input, $n) {
    //     $input = trim($input);  // Menghapus spasi di awal dan akhir
    //     $input = preg_replace('/[^a-zA-Z ]/', '', $input);  // Menghapus karakter selain huruf abjad dan spasi
    //     $input = preg_replace('/\s+/', ' ', $input);  // Mengganti spasi ganda dengan satu spasi
    
    //     $kata = explode(" ", $input);  // Membagi kata menjadi array
    //     $penggalanKata = [];
    
    //     foreach ($kata as $k) {
    //         $panjangKata = strlen($k);
    //         if ($panjangKata <= $n) {
    //             $penggalanKata[] = $k;  // Menambahkan kata jika panjang kurang dari atau sama dengan $n
    //         } else {
    //             $penggalanKata[] = substr($k, 0, $n) . '...' . substr($k, -$n);  // Menggantikan kata dengan penggalan jika panjang lebih dari $n
    //         }
    //     }
    
    //     return $penggalanKata;
    // }
    
    // // Contoh penggunaan
    // $input = "Hallo, apa kabar kalian?";
    // $n = 4;
    
    // $penggalanKata = penggalKata($input, $n);
    // print_r($penggalanKata);
    

    function penggalKata($input, $n) {
        $input = str_replace('/[^a-zA-Z ]/', '', $input);  // Menghapus karakter selain huruf abjad dan spasi
        $input = str_replace('/\s+/', ' ', $input);  // Mengganti spasi ganda dengan satu spasi
        $input = strtolower($input);  // Mengubah semua huruf menjadi huruf kecil
        $kata = explode(" ", $input);  // Membagi kata menjadi array
        $penggalanKata = [];
    
        foreach ($kata as $k) {
            $panjangKata = strlen($k);
            if ($panjangKata >= $n) {
                for ($i = 0; $i != $panjangKata - $n; $i++) {
                    $penggalanKata[] = substr($k, $i, $n);
                }
            }
        }
    
        // sort($penggalanKata);  // Mengurutkan penggalan kata secara ascending
        return $penggalanKata;
    }
    
    // Contoh penggunaan
    $input = "Hallo, apa kabar kalian?";
    $n = 4;
    
    $penggalanKata = penggalKata($input, $n);
    print_r($penggalanKata);

        // output: ["hall", "lian", "kaba", "loap", "oapa", "rkal"]

?>