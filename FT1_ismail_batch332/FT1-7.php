<?php
    function membersihkanData($string) {
        // Karakter dan kata yang akan dibersihkan
        $simbol = [',', "'", '"', '@', '/', '&'];
    
        // Membersihkan karakter sampah dari string
        $stringBersih = str_replace($simbol, '', $string);
    
        // Menghapus spasi berlebih dan mengganti dengan satu spasi
        $stringBersih = str_replace('/\s+/', ' ', $stringBersih);
        
        $stringBersih = strpos($string, $stringBersih);

        return $stringBersih;
    }
    
    
    $input = readline("Masukan Data: ");
    $output = membersihkanData($input);
    echo $output . "\n";
    
?>