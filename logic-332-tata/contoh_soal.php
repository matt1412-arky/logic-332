<?php
function tanggalKedatangan($tanggalPemesanan, $hariPemesanan, $hariLibur, $waktuPengiriman)
{
    $hariKerja = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];

    $tanggal = $tanggalPemesanan;

    if ($hariPemesanan == 'Sabtu' || $hariPemesanan == 'Minggu') {
        // Jika pesanan ditempatkan pada hari Sabtu atau Minggu, mulai dari hari Senin
        $hariIndex = 0; // Hari Senin
        $tanggal = $tanggalPemesanan + 1; // Untuk menghindari menghitung hari Sabtu dan Minggu
        $waktuPengiriman++;
    } else {
        $hariIndex = array_search($hariPemesanan, $hariKerja);
    }
    $bulanBerikutnya = false;

    while ($waktuPengiriman > 0) {
        $tanggal++;

        // Jika sudah mencapai akhir bulan, tambahkan keterangan "di bulan berikutnya"
        if ($tanggal > 31) {
            $tanggal = 1;
            $bulanBerikutnya = true;
        }

        
        // $hariIndex = ($hariIndex) % count($hariKerja)+1;
        if($hariIndex > count($hariKerja)){
            $hariIndex = 0;
        }
        $hari = $hariKerja[$hariIndex];
        // Cek apakah tanggal adalah hari libur, hari Sabtu, atau Minggu
        if (in_array($tanggal, $hariLibur) || $hari == 'Sabtu' || $hari == 'Minggu') {
            $waktuPengiriman++; continue;
        }
        print_r($tanggal . " ");
        print_r($hari . " ");
        $hariIndex++;

        // Hanya mengurangi waktu pengiriman jika bukan hari libur
        $waktuPengiriman--;
    }

    if ($bulanBerikutnya) {
        return "tanggal $tanggal di bulan berikutnya";
    } else {
        return "tanggal $tanggal";
    }
}


// Contoh penggunaan
$tanggalPemesanan = 25;
$hariPemesanan = 'Sabtu'; // Pesanan ditempatkan pada hari Sabtu
$hariLibur = [26, 29]; // Hari libur nasional
$waktuPengiriman = 7; // Jumlah hari kerja pengiriman

echo "Input: - Tanggal dan hari pemesanan: $tanggalPemesanan $hariPemesanan\n";
echo "       - Hari libur nasional: " . implode(", ", $hariLibur) . "\n";
echo "Output: " . tanggalKedatangan($tanggalPemesanan, $hariPemesanan, $hariLibur, $waktuPengiriman);

// // delivery
//     $delivery = 7;
//     $month = 31;

//     $nat_day = [26, 29]; // libur
//     $order_date = 25;
//     $order_day = 6; // sabtu

//     $next_month = "";
    
//     $arrival = $order_date;
//     for($i = 0; $i < $delivery; $i++){
//         for($j = 0; $j < count($nat_day); $j++){
//             if($nat_day[$j] == $arrival){
//                 $arrival++;
//             }
//         }
//         if($order_day >= 6){
//             $arrival++;
//         }
//         if($order_day > 7){
//             $order_day = 1;
//         }
//         if($arrival > $month){
//             $arrival = 1;
//             $next_month = ", Bulan berikutnya";
//         }
//         $order_day++;
//         $arrival++;

//     }
//     echo "tanggal " . $arrival . $next_month . "\n";

// // hattori        
//     $path = "NNTNNNTTTTTNTTTNTN";
//     $journey = 0;

//     $hill = $valley = $temp_hill = $temp_valley = 0;
//     for($i = 0; $i < strlen($path); $i++){
//         switch($path[$i]){
//             case "N": $journey++; break;
//             case "T": $journey--; break;
//         }
//         if($journey > 0){
//             $temp_hill = 1;
//         } elseif ($journey < 0){
//             $temp_valley = 1;
//         }

//         if ($journey == 0){
//             $hill += $temp_hill;
//             $valley += $temp_valley;
//             $temp_hill = $temp_valley = 0;
//         }
//     }
//     echo "Hattori melewati $hill gunung , $valley lembah\n";

// // Hari Berenang
//     $andi = $a = 3;
//     $budi = $b = 7;
//     while($andi != $budi){
//         switch(true){
//             case $andi > $budi: $budi+=$b;break;
//             case $budi > $andi: $andi+=$a;break;
//         }
//     }
//     $same_day = new DateTime("5 march 2018");
//     $day = $same_day->format("d F");
//     echo "Andi dan Budi akan berenang $andi hari setelah tanggal $day";
?>