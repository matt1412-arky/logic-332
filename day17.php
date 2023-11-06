<?php
    /* 

        Jim berjalan melewati sebuah path   ----o--o---o---     --oo----
        Jim berjalan dengan path            wwwjwjwwjwwjwww     wwjjwwww
        energi awal jim adalah 15
        constarint : panjang path dan jalannya jim harus sama
        jika melompat (j) energi jim berkurang 2
        jim harus melompat (j) jika melihat path (o)
        jika jatuh kedalam lubang (o) jim mati
        berapakah energi terakhir jim
    */
    echo "Jim melompat \n";

    $path =  "--oo----";
    $steps = "jjjjjjjj";
    $initialEnergy = 15;
    $currentEnergy = $initialEnergy;

    if (strlen($path) != strlen($steps)) {
        echo "Panjang path dan langkah Jim harus sama.";
    } else {
        for ($i = 0; $i < strlen($path); $i++) {
            if ($steps[$i] == 'j') {
                $currentEnergy -= 2;
            } elseif ($steps[$i] == 'w') {
                // Jim berjalan tanpa mengurangi energi
            } elseif ($steps[$i] == 'o') {
                echo "Jim jatuh ke dalam lubang dan mati.";
                break; // Menghentikan perhitungan
            }
        }
        echo "Energi terakhir Jim: " . $currentEnergy;
    }
    echo "\n\n";


    /* 

        tampilkan angka angka kelipatan 3 yang merupakan bilangan genap
    */
    echo "kelipatan 3 yang merupkan bilangan genap\n";

    for ($i=0; $i<=50; $i+=6) {
        if ($i % 3 == 0) {
            echo $i . " ";
        }
    }
    echo "\n\n";


    /* 
    
        Seringkali kita melihat data yang dienkripsi terhadap informasi yang bersifat rahasia. Beragam metode enkripsi telah
        dikembangkan hingga saat ini. Kali ini kalian akan ditugaskan untuk membuat metode enkripsi sendiri agar informasi
        yang diinput menjadi aman, dengan menggunakan original alfabet yang dirotasi pada enkripsi tersebut.
        
        Constraint:
        - Original Alfabet: abcdefghijklmnopqrstuvwxyz
        - Semua enkripsi hanya menggunakan huruf kecil
        - Spasi/karakter spesial tidak dianggap
        
        Input:
        string: mengandung data yang belum dienkripsi
        n: jumlah huruf yang digunakan untuk merotasi original alfabet (0 <= n <= 100)
        
        Example
        string: ba ca
        n:3
        
        Output
        Original Alfabet: abcdefghijklmnopqrstuvwxyz
        Alfabet yang dirotasi: defghijklmnopqrstuvwxyzabc
        Hasil enkripsi: edfd
    */
    echo "Rotasi alfabet\n";
    
        function enkripsi($string, $n) {
            $originalAlfabet = "abcdefghijklmnopqrstuvwxyz";
            $rotatedAlfabet = substr($originalAlfabet, $n) . substr($originalAlfabet, 0, $n);
            $string = str_replace(" ", "", $string); // Menghilangkan spasi
        
            $encryptedString = "";
            for ($i = 0; $i < strlen($string); $i++) {
                $char = $string[$i];
                $position = strpos($originalAlfabet, $char);
                if ($position !== false) {
                    $encryptedString .= $rotatedAlfabet[$position];
                } else {
                    // Jika karakter bukan huruf kecil, biarkan tidak berubah
                    $encryptedString .= $char;
                }
            }
            
        
            return $encryptedString;
        }
        
        $inputString = readline("Masukan Data : ");
        $n = readline("Masukan Nilai : ");
        $encryptedText = enkripsi($inputString, $n);
        echo "Original Alfabet : abcdefghijklmnopqrstuvwxyz\n";
        $originalAlfabet = "abcdefghijklmnopqrstuvwxyz";
        echo "Alfabet yang dirotasi: " . substr($originalAlfabet, $n) . substr($originalAlfabet, 0, $n) . "\n";
        echo "Hasil enkripsi : $encryptedText\n";
        echo "\n";

    /* 
    
        Anda akan menggunting-gunting tali sepanjang z meter menjadi beberapa buah tali sepanjang x meter. Berapa kali
        sedikitnya anda akan menggunting tali tersebut?
        Contoh: z = 4, x = 1
        Cukup menggunting 2x (pertama, tali 4m dibagi 2 sama rata, akan didapatkan masing-masing 2m. Kemudian kedua tali
        2m itu dipotong bersama sama rata, akan dihasilkan 4 tali masing-masing panjang 1m)
    */
    echo "Potong Tali\n";

        function jumlahPemotongan($z, $x) {
            if ($z % $x == 0) {
                // Jika panjang tali awal adalah kelipatan panjang yang diinginkan,
                // maka cukup bagi dengan hasil pembagian
                return $z / $x;
            } else {
                // Jika panjang tali awal bukan kelipatan, tambahkan 1 ke hasil pembagian
                // untuk memastikan setiap potongan adalah sepanjang x meter
                return floor($z / $x) + 1;
            }
        }
        
        $z = 4; // Panjang tali awal
        $x = 1; // Panjang yang diinginkan
        $jumlahPemotongan = jumlahPemotongan($z, $x);
        echo "Anda harus menggunting tali minimal $jumlahPemotongan kali \n";
    
        echo "\n";

    /*   
        
        Huruf alfabet dalam huruf kecil di bawah ini mengandung bobot yang sudah ditentukan sebagai berikut:
        a=1; b=2; c=3; d= 4;.... Z = 26.
        Tentukan apakah dalam sebuah input string sudah memiliki bobot yang sesuai.
        
        Constraint:
        - 0 <=n <=100
        - string hanya mengandung huruf kecil
        
        Input
        string: mengandung kata/kalimat
        array n : mengandung array angka yang harus dicocokkan terhadap string
        
        Example
        string: abcdzzz
        array: [1, 2, 2, 4, 4, 26, 26]
        
        Output: true, true, false, true, false, true, true
        
        Explanation:
        a = 1 -> true
        b = 2 -> true
        c = 3 -> false
        d = 4 -> true
        z = 4 -> false
        z = 26 -> true
        z = 26 -> true
    */
    echo "Alfabet boolean\n";

            function isBobotSama($string, $array) {
                $string = str_replace(' ', '', $string); // Menghapus spasi jika ada
                $result = array();
                
                for ($i = 0; $i < strlen($string); $i++) {
                    $char = $string[$i];
                    $charValue = ord($char) - ord('a') + 1; // Mendapatkan bobot huruf
                    
                    if (isset($array[$i])) {
                        $result[] = $charValue == $array[$i]; // Memeriksa apakah bobot sesuai
                    } else {
                        $result[] = false; // Tambahkan false jika panjang array tidak mencukupi
                    }
                }
                
                return $result;
            }
            
            $string = "accdzzz";
            $array = [1, 2, 2, 4, 4, 26, 26];
            $results = isBobotSama($string, $array);
            
            foreach ($results as $result) {
                echo $result ? "true" : "false";
                echo ", ";
            }
            echo "\n\n";

    /*  
        Devi memesan tas secara online, dan barang akan dikirimkan dalam waktu 7 hari kerja. Dari info
     hari tanggal pemesanan Devi, serta info hari libur nasional, maka pada hari dan tanggal berapakah
     pesanan Devi akan sampai? Jika barang akan tiba di bulan berikutnya, tambahkan keterangan
     (tanggal x di bulan berikutnya)
     Constraint :
     - Asumsikan ada 31 hari dalam 1 bulan
     - Jika dibulan itu tidak ada hari libur nasional, tulis 0
     - dibulan berikutnya tidak ada hari libur nasional
     
     contoh :
     Input: 
     - Tanggal dan Hari pemesanan: 25 Sabtu
     - hari libur nasional : 26, 29
     
     Output: Tanggal 5 di bulan berikutnya
    */
    echo "Belanja Online\n";

        function tanggalKedatangan($tanggalPemesanan, $hariLibur) {
            $hariKerja = 7;
            $bulanSaatIni = date('n', strtotime($tanggalPemesanan));
            $tahunSaatIni = date('Y', strtotime($tanggalPemesanan));
        
            $tanggalPemesanan = date('d', strtotime($tanggalPemesanan));
            $tanggalKedatangan = $tanggalPemesanan;
        
            while ($hariKerja > 0) {
                $tanggalKedatangan++;
                if ($tanggalKedatangan > 31) {
                    $tanggalKedatangan = 1;
                    $bulanSaatIni++;
                    if ($bulanSaatIni > 12) {
                        $bulanSaatIni = 1;
                        $tahunSaatIni++;
                    }
                }
        
                $tanggalPeriksa = $tahunSaatIni . '-' . sprintf('%02d', $bulanSaatIni) . '-' . sprintf('%02d', $tanggalKedatangan);
                $hariDalamSeminggu = date('N', strtotime($tanggalPeriksa));
        
                if ($hariDalamSeminggu <= 5 && !in_array($tanggalKedatangan, $hariLibur)) {
                    $hariKerja--;
                }
            }
        
            return "Tanggal $tanggalKedatangan di bulan berikutnya";
        }
        
        // Contoh penggunaan
        $tanggalPemesanan = '2022-10-25'; // Misalnya, tanggal pemesanan adalah 25 Oktober
        $hariLibur = [26, 29]; // Hari libur nasional
        
        $hasil = tanggalKedatangan($tanggalPemesanan, $hariLibur);
        echo "Output: $hasil \n";
        echo "\n";

    /* Hattori sedang berlatih untuk menjadi ninja yang baik dengan berlari
    melewati gunung lembah yang didefinisikan sebagai gunung dan lembah adalah
    -   Gunung : urutan Naik dan Turun yang bermula di 0 mdpi dan berakhir di 0 mdpi
    -   Lembah : urutan Naik dan Turun yang bermula di 0 mdpi dan berakhir di 0 mdpi
    Hattori mencatatat perjalanannya dengan simbol N saat ia menanjak dan T saat ia turun
    dalam sebuah urutan seperti berikut : NNTNNNTTTTTNTTTNTN
    Berapa Gunung dan Lembah yang udah dilewati Hattori ?
    */
    echo "Hattori\n";

        function hitungGunungDanLembah($perjalanan) {
            $jumlahGunung = 0;
            $jumlahLembah = 0;
            $mdpi = 0; // Ketinggian saat ini
        
            for ($i = 0; $i < strlen($perjalanan); $i++) {
                $langkah = $perjalanan[$i];
                if ($langkah === 'N') {
                    $mdpi++;
                } elseif ($langkah === 'T') {
                    $mdpi--;
                }
        
                // Jika kita menuruni dari gunung ke lembah
                if ($mdpi == 0 && $langkah === 'T') {
                    $jumlahLembah++;
                }
        
                // Jika kita menanjak dari lembah ke gunung
                if ($mdpi == 0 && $langkah === 'N') {
                    $jumlahGunung++;
                }
            }
        
            return ["Gunung" => $jumlahGunung, "Lembah" => $jumlahLembah];
        }
        
        $perjalanan = "NNTNNNTTTTTNTTTNTN";
        $hasil = hitungGunungDanLembah($perjalanan);
        
        echo "Jumlah Gunung: " . $hasil["Gunung"] . "\n";
        echo "Jumlah Lembah: " . $hasil["Lembah"] . "\n";
        echo "\n";

    /* Andi dan Budi berenang bersama pada tanggal 5 maret 2018.
    Jika Andi berenang setiap 3 hari sekali dan Budi berenang setiap 7 hari sekali,
    tanggal berapa mereka kembali berenang bersama?
    Diketahui :
    
    Andi berenang 3 hari sekali
    Budi berenang 7 hari sekali
    
    Kita cari KPK dari 3 dan 7.
    
    Sudah tahu berapa ?
    KPK dari 3 dan 7 adalah 21.
    
    Jadi, Andi dan Budi akan berenang 21 setelah tanggal 5 maret.
    */
    echo "KPK\n";

        // // Tanggal awal
        // $tanggalAwal = new DateTime("2018-03-05");

        // // Tambahkan 21 hari
        // $tanggalBerikutnya = $tanggalAwal->add(new DateInterval('P21D'));

        // // Format tanggal berikutnya
        // $tanggalBerikutnyaFormat = $tanggalBerikutnya->format('Y-m-d');

        // echo "Andi dan Budi akan berenang bersama lagi pada tanggal $tanggalBerikutnyaFormat \n";
        // echo "\n";

        // $tanggalAwal = new DateTime('2018-03-05');
        // $interval = new DateInterval('P21D');
        // $tanggalKembali = $tanggalAwal->add($interval);
        // echo "Mereka kembali berenang bersama pada tanggal " . $tanggalKembali->format('Y-m-d'). "\n";
        // echo "\n";

        // Tanggal awal
            $tanggalAwal = strtotime('2018-03-05');

            // KPK dari 3 dan 7
            $kpk = 21;

            // Hitung tanggal kapan mereka kembali berenang bersama
            $tanggalKembali = strtotime("+$kpk days", $tanggalAwal);

            // Format tanggal dalam format yang lebih mudah dibaca
            $tanggalKembaliFormatted = date('d F Y', $tanggalKembali);

            echo "Mereka akan kembali berenang bersama pada tanggal $tanggalKembaliFormatted\n";
            echo "\n";

    /* Sekelompok orang ingin membeli es kopi susu dengan menggunakan promo diskon 50%(maksimal
    diskon RP. 100.000 minimal order RP. 40.000) ditambah cashback 10%(cashback dari harga akhir
    yang dibayarkan, maksimal cashback RP. 30.000 . berapa cup yang bisa dibeli jika mereka tidak
    ingin membayar lebih besar dari nominal diskonnya? Dan berapa saldo akhirnya setelah order
    diterima oleh customer ?
    Input : Saldo Opo
    contoh : Saldo Opo = RP. 60.000
    Output : jumlah cup = 6, Saldo akhir = RP. 11.400
    */
    echo "Pembelian dengan OVO\n";
    
        function hitungPembelian($saldoAwal) {
            // Harga per cangkir es kopi susu
            $hargaPerCangkir = 10000;
        
            // Hitung berapa banyak cangkir yang bisa dibeli tanpa diskon dan cashback
            $jumlahCangkir = $saldoAwal / $hargaPerCangkir;
        
            // Hitung total pembelian sebelum diskon
            $totalPembelian = $jumlahCangkir * $hargaPerCangkir;
        
            // Hitung diskon (50% maksimal RP. 100.000)
            $diskon = min($totalPembelian * 0.5, 100000);
        
            // Hitung cashback (10% maksimal RP. 30.000)
            $cashback = min($totalPembelian * 0.1, 30000);
        
            // Hitung saldo akhir
            $saldoAkhir = $saldoAwal - $totalPembelian + $diskon - $cashback;
        
            return [$jumlahCangkir, $saldoAkhir];
        }
        
        $saldoAwal = 60000; // Saldo Awal RP. 60.000
        [$jumlahCangkir, $saldoAkhir] = hitungPembelian($saldoAwal);
        
        echo "Jumlah cup = $jumlahCangkir, Saldo akhir = RP. " . number_format($saldoAkhir, 0, ',', '.');
    
    
?>