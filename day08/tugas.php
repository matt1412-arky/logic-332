<?php
    /*
    Buatlah inheritance kelas yang mencakup tiga tingkatan yaitu Vehicle, Car, dan Motor.
    Kelas Vehicle adalah kelas abstrak dengan properti abstrak nama dan metode abstrak bergerak().
    Kelas Car dan Motor adalah kelas turunan dari Vehicle. Di dalam kelas Car,
    Anda harus mengimplementasikan metode bergerak() yang mencetak
    "Car bergerak dengan kecepatan tinggi,"
    sedangkan di dalam kelas Motor, Anda harus mengimplementasikan metode bergerak()
    yang mencetak "Motor bergerak dengan kecepatan sedang."

    Kemudian, buatlah sebuah objek Car dan sebuah objek Motor,
    lalu tampilkan hasil pemanggilan metode bergerak() pada keduanya.
    */
    abstract class Vehicle {
        protected $nama;
        
        public function __construct($nama){
            $this->nama = $nama;
        }

        abstract public function bergerak();
    }


    class Car extends Vehicle {
        public function bergerak() {
            echo ("Mobil $this->nama bergerak dengan kecepatan tinggi\n");
        }
    }
    
    class MotorCycle extends Vehicle {
        public function bergerak() {
            echo ("Motor $this->nama bergerak dengan kecepatan sedang\n");
        }
    }

    $car = new Car("Lambor");
    $car->bergerak();
    
    $motorCycle = new MotorCycle("Suprax");
    $motorCycle->bergerak();
    echo "\n";


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
    $x = 2;
    $y = 4;
    $z = "25 February 2020";
    $xy = $x + $y;
    if ($x == $y) {
        $hariLiburBaru = date("d F Y", strtotime($z . " + $x days"));
    } else {
        for ($i = 1; $i <= $xy; $i++) {
            for ($j = 1; $j <= $xy; $j++) {
                $kpkX = $i * $x;
                $kpkY = $j * $y;
                if ($kpkX == $kpkY) {
                    $hasil = $kpkY;
                    break;
                }
            }
        }
        $hariLiburBaru = date("d F Y", strtotime($z . " + $hasil days"));
    }

    echo ("Tanggal libur bersama selanjutnya adalah pada tanggal $hariLiburBaru\n");

    echo "\n";


    /*
    Bila x = 7
    1   3   5   7   9   11  13
    13  11  9   7   5   3   1
    */
    $baris = 2;
    $kolom = 7;
    $nilaiAtas = 1;
    $nilaiBawah = 13;
    echo ("Bila X = $kolom\n");
    for($i=1; $i<=$baris; $i++) {
        for($j=1; $j<=$kolom; $j++) {
            if($i % 2 != 0) {
                echo "$nilaiAtas ";
                $nilaiAtas+=2;
            } elseif ($i % 2 == 0) {
                echo "$nilaiBawah ";
                $nilaiBawah-=2;
            }
        }
        echo "\n";        
    }
    
    
    // /*
    // Bila x = 11
    // 1   3   5   7   9   11  13  15  17  19  21
    // 21  19  17  15  13  11  9   7   5   3   1
    // */
    $x = 11;
    $ganjil = 1;
    echo ("Bila X = $x\n");
    for ($i=1; $i<=2; $i++) {
        for ($j=1; $j<=$x; $j++) {
            if ($i == 1) {
                echo ($ganjil . " ");
                $temp = $ganjil;
                $ganjil += 2;
            }
            elseif ($i == 2) {
                echo ($temp . " ");
                $temp -= 2;
            }
        }
        echo "\n";
    }
    echo "\n";


    /*
    ada berapa lembar kertas A6 yang bisa disatukan untuk membuat selembar kertas berukuran A x
    */
    $lembarKertas = 1;
    $a = 6;
    $kertasA = 4;

    for ($i=$a; $i>$kertasA; $i--) {
        $lembarKertas *= 2;
        $jumlahA6 = $lembarKertas;
    }
    echo ("Selembar kertas A$kertasA membutuhkan $lembarKertas lembar kertas A$a\n");


    /*
    Buatlah fungsi untuk kalkulasi tarif parkir berdasarkan ketentuan berikut
    ketentuan tarif:
        1. Delapan jam pertama : 1.000/jam
        2. Lebih dari 8 jam s.d 24jam : 8.000 flat
        3. Lebih dari 24 jam : 15.000/jam dan selebihnya mengikuti ketentuan pertama dan kedua
    Input:      - Tanggal dan jam masuk             Output :    Besarnya tarif parkir
                - Tanggal dan jam keluar

    Contoh :    - Masuk : 28 Januari 2020 07:30:34
                - Keluar: 28 Januari 2020 20:03:35
    
    Penjelasan : Lamanya parkir adalah 12 jam 33 menit 1 detik, sehingga perhitungan tarif
                 parkir dibulatkan menjadi 13 jam. Mengacu pada ketentuan kedua, maka yang
                 harus dibayarkan adalah 8000 rupiah
    */
    $jamMasuk = new DateTime("28 january 2020 07:30:34");
    $jamKeluar = new DateTime("29 january 2020 20:03:35");

    function biayaParkir($jamMasuk, $jamKeluar) {
        // Konversi jam masuk dan jam keluar menjadi format DateTime
        // Hitung selisih waktu dalam jam
        $selisihJam = $jamMasuk->diff($jamKeluar);
        $jam = $selisihJam->format("%H");
        if($selisihJam->format("%i") > 30) {
            $jam <= 1;
        }
        if($selisihJam->format("%d") >= 1) {
            $jam <= 24 * $selisihJam->format("%d");
        }
    
        // Hitung tarif parkir berdasarkan ketentuan
        if ($jam <= 8) {
            $tarif = $jam * 1000; // Tarif pertama, 1.000 per jam
        } elseif ($jam >= 8 && $jam <= 24) {
            $tarif = 8000; // Tarif kedua, flat 8.000 untuk lebih dari 8 jam hingga 24 jam
        } elseif ($jam > 24) {
            $jam = round($jam / 24);
            $tarif = $jam * 15000; // Tarif lebih dari 24 jam
        }    
        return $tarif;
    }
    
    echo "Tarif parkir: Rp." . biayaParkir($jamMasuk, $jamKeluar);
    echo "\n";
    
    

    /*
    Tiap 1 orang dewasa laki-laki memakan 2 piring nasi goreng, 1 orang dewasa perempuan memakan
    1 piring mie goreng. 2 orang remaja memakan 2 mangkok mie ayam, 1 orang anak-anak memakan
    1/2 piring nasi goreng, 1 orang balita memakan 1 mangkok kecil bubur sehat. Berapa total porsi
    makanan yang dimakan ?
    Constraints :
        -   Jika total yang sedang makan jumlahnya ganjil lebih dari 5 orang maka tiap orang dewasa
            perempuan tambah 1 piring nasi goreng
        -   Inputan bisa saja acak (misalnya: laki-laki dewasa 3, balita 2, laki-laki dewasa 2, balita 2,
            perempuan dewasa 3)

    Contoh :
    Input  : Laki-laki dewasa = 3 orang; Perempuan dewasa = 1 orang; Balita = 1 orang; Laki-laki dewasa = 1 orang
    Output : 10 Porsi    
    */
    $str = "Laki-laki dewasa = 3 orang; Perempuan dewasa = 1 orang; Balita = 1 orang; Laki-laki dewasa = 1 orang";
    
    function cariPorsi($str) {
        $str = strtolower($str);
        $str = str_replace("orang", "", $str);
        $str = str_replace(" ","", $str);
        $str = explode(",", $str);
        $sum = $add = 0;

        for($i=0; $i<count($str); $i++) {
            $str[$i] = explode("=", $str[$i]);
        }

        for($i=0; $i<count($str); $i++) {
            switch($str[$i][0]){
                case "laki-laki dewasa": $str[$i][1] = 2;
                case "perempuan dewasa": $str[$i][1] = 1;
                $add = $str[$i][1];
                case "remaja": $str[$i][1] = 1;
                case "anak-anak": $str[$i][1] = 0.5;
                case "balita": $str[$i][1] = 1;
            }
            $sum += $str[$i][1];
        }

        if($sum > 5 && $sum % 3 == 0) {
            $add = $add + 1;
            return $sum + $add . " Porsi\n";
        } else {
            return $sum . " Porsi\n";
        }
    }
    echo cariPorsi($str);

    /*
    Jika 1 botol = 2 gelas, 1 teko = 25 cangkir, 1 gelas = 2,5 cangkir.
    Buatlah sistem konversi volume berdasarkan data diatas
    Contoh :
    1 botol = ... cangkir ?
    1 botol = 5 cangkir
    */
    function konversiVolume($jumlah, $satuanAwal, $satuanTujuan) {
        $konversi = [
            'botol' => 2 * 2.5,  // 1 botol = 2 gelas, 1 gelas = 2.5 cangkir
            'teko' => 25,        // 1 teko = 25 cangkir
            'gelas' => 2.5,      // 1 gelas = 2.5 cangkir
            'cangkir' => 1,      // 1 cangkir = 1 cangkir
        ];
    
        // Konversi ke cangkir
        $jumlahCangkir = $jumlah * $konversi[$satuanAwal];
    
        // Konversi ke satuan tujuan
        $hasil = $jumlahCangkir / $konversi[$satuanTujuan];    
        return $hasil;
    }
    
    // Contoh pemanggilan fungsi
    $jumlah = 1;
    $satuanAwal = 'botol';
    $satuanTujuan = 'cangkir';
    
    $hasil = konversiVolume($jumlah, $satuanAwal, $satuanTujuan);
    echo "$jumlah $satuanAwal = $hasil $satuanTujuan";
    echo "\n";
    
    /*
    Berikut ini adalah record penjualan buah dalam bentuk string
    Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, Jeruk:8, Mangga:1
    Buat summary penjualannya

    Input   : String record penjualan
    Output  : Summary penjualan, dalam alphabetical order
        Apel    : 9
        Jeruk   : 9
        Mangga  : 1
        Pisang  : 3
    */
    
    $record = "Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, Jeruk:8, Mangga :1";
    


?>