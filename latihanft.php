<?php
/*
Mary mendapatkan libur setiap x hari,
sedangkan Susan mendapatkan libur setiap y hari.
Jika mereka terakhir mendapatkan libur di hari yang sama pada tanggal z,
kapan tanggal terdekat mereka akan libur bersama kembali?
Input: int x, y; date/varchar z
Output: tanggal libur bersama selanjutnya
Contoh: x=3, y=2, z=25 Februari 2020
Output: 8 Maret 2020 (jangan lupa kabisat)
*/


/*
output:
1 3 5 7 9 11 13
13 11 9 7 5 3 1

1 3 5 7 9 11 13 15 17 19 21
21 19 17 15 13 11 9 7 5 3 1
*/

echo "Nomor 1 : \n";
$rows = readline("Masukkan jumlah baris : ");
$colomn = readline("Masukkan jumlah kolom : ");

// Cetak pola urutan pertama
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $colomn; $j++) {
        // echo $i . $j . " ";
        if ($i % 2 == 1) {
            // Jika $i adalah ganjil, cetak angka urutan bertambah
            echo (2 * $j - 1) . ' ';
        } else {
            // Jika $i adalah genap, cetak angka urutan berkurang (urutan terbalik)
            echo (2 * ($colomn - $j) + 1) . ' ';
        }
    }
    echo "\n";
}
echo "\n";

echo "Nomor 2 : \n";
// Ada berapa lembar kertas A6 yang bisa disatukan untuk membuat selembar kertas Ax

// Faktor perbesaran dari A6 ke Ax, gantilah sesuai kebutuhan
$input = readline("Masukkan ukuran Ax : "); // Contoh: A6 ke A4

// Hitung berapa banyak lembar kertas A6 yang diperlukan
$neededSheets = pow(2, (6 - $input));

echo "Untuk membuat kertas A$input, Anda perlu $neededSheets lembar kertas A6. \n";

echo "Nomor 3 : \n";
/*
Buatlah fungsi untuk kalkulasi tarif parkir berdasarkan ketentuan berikut:
Ketentuan tarif:
    1. 8 jam pertama 1.000/jam
    2. Lebih dari 8 jam s.d. 24 jam: 8.000 flat
    3. Lebih dari 24 jam : 15.000/24 jam dan selebihnya mengikuti ketentuan pertama dan kedua
input: - Tanggal dan jam masuk          Output: Besarnya tarif parkir
       - Tanggal dan jam keluar

Contoh: - Masuk : 28 Januari 2020 07:30:34           Output: 8000
        - Keluar : 28 Januari 2020 20:03:35

Penjelasan: Lamanya parkir adalah 12 jam 33 menit 1 detik, sehingga perhitungan tarif parkir
            dibulatkan menjadi 13 jam mengacu pada ketentuan kedua, maka yang harus dibayarkan adalah 8000 rupiah.
*/

function calculateParkingFee($entryDateTime, $exitDateTime)
{
    // Konversi tanggal dan waktu masuk dan keluar ke objek DateTime
    $entryDateTime = DateTime::createFromFormat('d F Y H:i:s', $entryDateTime);
    $exitDateTime = DateTime::createFromFormat('d F Y H:i:s', $exitDateTime);

    // Periksa apakah format konversi berhasil
    if (!$entryDateTime || !$exitDateTime) {
        echo "Format tanggal dan waktu tidak valid!. Pastikan Anda memasukkan format yang benar.\n";
        return;
    }

    // Hitung selisih waktu dalam detik
    $timeDifference = $exitDateTime->getTimestamp() - $entryDateTime->getTimestamp();

    // Hitung selisih waktu dalam jam
    $hours = ceil($timeDifference / 3600);

    // Hitung tarif parkir berdasarkan ketentuan
    if ($hours <= 8) {
        // Kurang dari atau sama dengan 8 jam
        $parkingFee = $hours * 1000;
        $roundedHours = $hours;
        $feeExplanation = "dibulatkan menjadi $roundedHours jam mengacu pada ketentuan pertama, maka yang harus dibayarkan adalah $parkingFee rupiah.";
    } elseif ($hours <= 24) {
        // Lebih dari 8 jam, tetapi tidak lebih dari 24 jam
        $parkingFee = 8000;
        $roundedHours = $hours;
        $feeExplanation = "dibulatkan menjadi $roundedHours jam mengacu pada ketentuan kedua, maka yang harus dibayarkan adalah $parkingFee rupiah.";
    } else {
        // Lebih dari 24 jam
        $additionalDays = floor(($hours - 24) / 24);
        $additionalFee = $additionalDays * 15000;
        $remainingHours = $hours - (24 + $additionalDays * 24);
        $parkingFee = 8000 + $additionalFee + $remainingHours * 1000;
        $roundedHours = $hours;
        $feeExplanation = "dibulatkan menjadi $roundedHours jam mengacu pada ketentuan ketiga, maka yang harus dibayarkan adalah $parkingFee rupiah.";
    }

    // Hitung selisih waktu dalam jam, menit, dan detik
    $timeDifference = $exitDateTime->getTimestamp() - $entryDateTime->getTimestamp();
    $hours = floor($timeDifference / 3600);
    $minutes = floor(($timeDifference % 3600) / 60);
    $seconds = $timeDifference % 60;

    echo "Penjelasan: Lamanya parkir adalah $hours jam $minutes menit $seconds detik, sehingga perhitungan tarif parkir $feeExplanation";
}

// Penggunaan/implentasi:
$entryDateTime = readline('Masukkan tanggal dan waktu masuk: ');
$exitDateTime = readline('Masukkan tanggal dan waktu keluar: ');

calculateParkingFee($entryDateTime, $exitDateTime);

echo "\n";

echo "Nomor 6 : \n";

/*
Tiap 1 org dewasa laki-laki memakan 2 piring nasi goreng, 1 org dewasa perempuan memakan 
1 piring mie goreng, 2 org remaja memakan 2 mangkok mie ayam, 1 org anak-anak memakan 1/2 
piring nasi goreng, i org balita memakan 1 mangkok kecil bubur sehat. Berapa total porsi makan
yang dimakan?

Constraint : 
- Jika total yang sedang makan jumlah nya ganjil lebih dari 5 orang maka tiap org dewasa perempuan 
tambah  1 piring nasi goreng.
- inputnya bisa saja acak (misalnya: laki-laki dewasa 3, balita 2, laki-laki dewasa 2, balita 2, 
perempuan dewasa 3)

Contoh:
Input: 
Laki-laki dewasa = 3 orang, perempuan dewasa = 1 orang, Balita = 1 orang, Laki-laki dewasa = 1 orang 
Output: 10 porsi
*/

function hitungTotalPorsiMakan($lakiDewasa, $perempuanDewasa, $remaja, $anakAnak, $balita)
{
    $totalPorsi = 0;

    // Hitung total porsi berdasarkan makanan yang dikonsumsi tiap kelompok
    $totalPorsi += $lakiDewasa * 2;
    $totalPorsi += $perempuanDewasa * 1;
    $totalPorsi += $remaja * 2;
    $totalPorsi += $anakAnak * 0.5;
    $totalPorsi += $balita * 1;

    // Cek apakah jumlah yang makan lebih dari 5 orang
    $totalOrang = $lakiDewasa + $perempuanDewasa + $remaja + $anakAnak + $balita;

    if ($totalOrang >  5 && $totalOrang % 2 == 1) {
        $totalPorsi += $perempuanDewasa; // Tambah 1 piring nasi goreng
    }

    return $totalPorsi;
}

// Penggunaan:
$lakiDewasa = readline("Masukkan jumlah laki-laki dewasa: ");
$perempuanDewasa = readline("Masukkan jumlah perempuan dewasa: ");
$remaja = readline("Masukkan jumlah remaja: ");
$anakAnak = readline("Masukkan jumlah anak-anak: ");
$balita = readline("Masukkan jumlah balita: ");

$totalPorsi = hitungTotalPorsiMakan($lakiDewasa, $perempuanDewasa, $remaja, $anakAnak, $balita);
echo "Total porsi makan yang dimakan: $totalPorsi porsi.";
echo "\n";

echo "Nomor 7 : \n";

/*
Jika 1 botol = 2 gelas, 1 teko = 25 cangkir, 1 gelas = 2.5 cangkir.
Buatlah sistem konversi berdasarkan data diatas 

Contoh: 1 botol = ... cangkir?
1 botol = 5 cangkir
*/

function hitungKonversi($jumlah, $dari, $ke)
{
    $hasil = 0;

    // Aturan konversi
    if ($dari == 'botol' && $ke == 'cangkir') {
        $hasil = $jumlah * 2 * 2.5;
    } elseif ($dari == 'teko' && $ke == 'botol') {
        $hasil = $jumlah / 25 / 2;
    } elseif ($dari == 'gelas' && $ke == 'botol') {
        $hasil = $jumlah / 2.5 / 2;
    }

    return $hasil;
}

$jumlah = readline('Masukkan jumlah: ');
$dari = readline('Masukkan satuan awal: ');
$ke = readline('Masukkan satuan tujuan: ');

$hasilKonversi = hitungKonversi($jumlah, $dari, $ke);

if ($hasilKonversi > 0) {
    echo "$jumlah $dari = $hasilKonversi $ke";
} else {
    echo "Aturan konversi tidak valid.";
}

echo "Nomor 21 : \n";
/*
Berikut ini adalah record penjualan buah dalam bentuk string 
Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, Jeruk:8, Mangga:1
Buat summary penjualannya

Input: string record penjualan
Output: Summary Penjualan, dalam alpabetical order
Apel:9
Jeruk:9
Mangga:1
Pisang:3
*/

function summaryPenjualan($recordPenjualan)
{
    // Pisahkan string menjadi array berdasarkan koma dan spasi
    $penjualanArray = explode(', ', $recordPenjualan);

    // Inisialisasi array untuk menyimpan summary penjualan
    $summary = array();

    // Jumlah total buah
    $totalBuah = count($penjualanArray);

    // Loop melalui array penjualan menggunakan for
    for ($i = 0; $i < $totalBuah; $i++) {
        // Pisahkan buah dan jumlahnya
        list($buah, $jumlah) = explode(':', $penjualanArray[$i]);

        // Jika buah belum ada di summary, inisialisasi jumlahnya
        if (!isset($summary[$buah])) {
            $summary[$buah] = (int)$jumlah;
        } else {
            // Jika buah sudah ada, tambahkan jumlahnya
            $summary[$buah] += (int)$jumlah;
        }
    }

    // Urutkan summary berdasarkan kunci (nama buah) secara alfabetis
    ksort($summary);

    // Tampilkan summary penjualan tanpa foreach
    $summaryKeys = array_keys($summary);
    $totalBuah = count($summaryKeys);
    for ($i = 0; $i < $totalBuah; $i++) {
        $buah = $summaryKeys[$i];
        $jumlah = $summary[$buah];
        echo "$buah:$jumlah\n";
    }
}

$recordPenjualan = readline("Masukkan record penjualan: ");

echo "Summary Penjualan, dalam alphabetical order: \n";
summaryPenjualan($recordPenjualan);
