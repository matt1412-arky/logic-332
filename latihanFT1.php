<?php

    /*
        Soal no 1
      Mary mendapatkan libur setiap x hari,
      sedangkan Susan mendapatkan libur setiap y hari.
      Jika mereka terakhir mendapatkan libur dihari yang
      sama pada tanggal z, kapan tanggal terdekat mereka 
      akan liburan bersama kembali?
      input : int x,y; date/varchar z
      output : tanggal libur bersama selanjutnya
      contoh : x=3 ,y=2, z=25 Februari 2020
      output : 8 Maret 2020 (jangan lupa tahun kabisat)
     */
        // $tanggalAwal = new DateTime('2020-02-25');
        // $interval = new DateInterval('P12D');
        // $tanggalKembali = $tanggalAwal->add($interval);
        // echo "Mereka kembali berlibur bersama pada tanggal " . $tanggalKembali->format('Y-m-d'). "\n";
        // echo "\n";

        $tanggalAwal = strtotime('2020-02-25');

        // KPK dari 3 dan 7
        $kpk = 6;

        // Hitung tanggal kapan mereka kembali berenang bersama
        $tanggalKembali = strtotime("+$kpk days", $tanggalAwal);

        // Format tanggal dalam format yang lebih mudah dibaca
        $tanggalKembaliFormatted = date('d F Y', $tanggalKembali);

        echo "Mereka akan kembali berlibur bersama pada tanggal $tanggalKembaliFormatted\n";
        echo "\n";
    
    /*
        Soal no 2
        Bila x = 7
         1  3  5 7 9 11 13
        13 11  9 7 5  3  1
    */
        $baris= 2;
        $kolom =7;
        $nilai = 1;
        $hasil = 13;
        for($i = 1; $i <= $baris; $i++){
            for($j = 1; $j <= $kolom; $j++) {
                if ( $i % 2 !=0) {
                    echo(" $nilai  ");
                    $nilai+=2;
                } elseif ($i % 2 ==0) {
                    echo(" $hasil  ");
                    $hasil-=2;
                }
            }
            
            echo "\n";
        }
        echo "\n";
    /*
        Bila x  = 11
         1   3  5  7  9 11 13 15 17 19 21
         21 19 17 15 13 11  9  7  5  3  1
    */
    $baris= 2;
    $kolom =11;
    $nilai = 1;
    $hasil = 21;
    for($i = 1; $i <= $baris; $i++){
        for($j = 1; $j <= $kolom; $j++) {
            if ( $i % 2 !=0) {
                echo(" $nilai  ");
                $nilai+=2;
            } elseif ($i % 2 ==0) {
                echo(" $hasil  ");
                $hasil-=2;
            }
        }
        
        echo "\n";
    }
    echo "\n";
    /*
        Soal no 3
        Ada berapa lembar kertas A6 yang bisa disatukan
        untuk membuat selembar kertas berukuran Ax
     */
        function kerta_A6($x)
        {
            switch($x)
            {
                case "A1": $ukuran = 841 * 594; break;
                case "A2": $ukuran = 430 * 594; break;
                case "A3": $ukuran = 297 * 420; break;
                case "A4": $ukuran = 210 * 297; break;
                case "A5": $ukuran = 148 * 210; break;
                case "A6": $ukuran = 105 * 148; break;
                default : $ukuran = 1; break;
            }
            $ukuranA6 = 105 * 148;
            $jumlah_kertas = round($ukuran / $ukuranA6);
            return $jumlah_kertas;
        }
        echo kerta_A6("A4"). "\n";
        echo "\n";
    /*
        Soal no 4
        Buatlah fungsi untuk kalkulasi tarif parkir berdasarkan ketentuan berikut
        Ketentuan tarif:
            1. Delapan jam pertama :1.000/jam
            2. Lebih dari 8 jam s.d. 24 jam : 8.000/flat
            3. Lebih dari 24 jam : 15.000/24 jam dan selebih nya mengikuti ketentuan pertama dan kedua
            Input : - Tanggal dan jam masuk                             -Output : Besarnya tarif parkir
                    - Tanggal dan jam keluar
            Contoh : - Masuk : 28 Januari 2020 07:30:34                 Output 8.000
                     - Keluar : 28 Januari 2020 20:03:35

    */
            $jam_masuk = new DateTime("28 January 2020 07:30:34");
            $jam_keluar = new DateTime("28 January 2020 20:03:35");

            function parkir ($jam_masuk, $jam_keluar)
            {
                $masuk = $jam_masuk->diff($jam_keluar);

                $jam = $masuk->format("%H");
                if($masuk->format("%i") . 30){
                    $jam += 1;
                }
                if($masuk->format("%d") >= 1){
                    $harga = $jam * 1000;
                } elseif ($jam >= 8 && $jam < 24){
                    $harga = 8000;
                } elseif ($jam > 24){
                    $jam = round($jam / 24);
                    $harga = $jam * 15000;
                }
                return $harga;
            }
            echo parkir($jam_masuk, $jam_keluar). "\n";
            echo "\n";

    /*
        Soal 5 
        Tiap 1 orang dewasa laki-laki memakan 2 piring nasi goreng, 1 orang dewasa perempuan memakan 1 piring mie
        goreng, 2 orang remaja memakan 2 mangkok mie ayam, 1 orang anak-anak 1/2 piring nasi goreng, 1
        orang balita memakan 1 mangkok kecil bubur sehat. Berapa total porsi yang dimakan ?
        Constraints :
            -   Jika total yang sedang makan jumlahnya ganjil lebih dari 5 orang maka tiap orang dewasa perempuan
                tambah 1 piring nasi goreng.
            -   Inputan bisa saja cek (misalnya : laki-laki dewasa 3, balita 2, laki-laki dewasa 2, balita 2,
                perempuan dewasa 3) 
        Contoh :
        Input   : Laki-laki dewasa = 3 orang; Perempuan dewasa = 1 orang; Balita = 1 orang; Laki-laki dewasa = 1 orang
        Ouput   : 1o porsi
    */
            $input = "Laki-laki dewasa = 3 orang, Perempuan dewasa = 1 orang, Balita = 1 orang, Laki-laki dewasa = 1 orang";

            function porsi ($porsi)
            {
                $porsi = strtolower($porsi);
                $porsi = str_replace("orang", "",$porsi);
                $porsi = str_replace(" ", "", $porsi);
                $porsi = explode(",", $porsi);
                $sum = $add = 0;

                for ($i = 0; $i < count($porsi); $i++)
                {
                    $porsi[$i] = explode("=", $porsi[$i]);
                }

                for ($i = 0; $i < count($porsi); $i++)
                {
                    switch ($porsi[$i][0])
                    {
                        case "laki-lakidewasa": $sum += $porsi[$i][1]*2; break;
                        case "perempuandewasa": $sum += $porsi[$i][1]*1; $add = $porsi[$i][1]; break;
                        case "remaja": $sum += $porsi[$i][1]*1; break;
                        case "anak-anak": $sum += $porsi[$i][1]*0.5; break;
                        case "balita": $sum += $porsi[$i][1]*1; break;
                    }
                }

                if($sum > 5 && $sum % 3 == 0)
                {
                    $add = $add + 1;
                    return $sum + $add . " Porsi\n";
                } else {
                    return$sum . " Porsi\n";
                }
            }
                echo porsi($input)."\n";
    /*
            Soal no 6
            Jika 1 botol = 2, 1 teko = 25 cangkir, 1 gelas = 2,5 cangkir.
            Buatlah sistem konversi volume berdasarkan data diatas
            Contoh :
                1 botol = .... cangkir ?
                1 botol = 5 cangkir
     */
            function botolcangkir($n)
            {
                $n = $n;
                $boge = 2;
                $teca = 25;
                $geca = 2.5;

                $boce = ($n * $boge) * $geca ;

                return $n . " Botol = " . $boce . " Cangkir\n";
            }
                echo botolcangkir(3). "\n";
     /*
            Soal no 7
            Berikut ini adalah record penjualan buah dalam bentuk string
            Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, Jeruk:8, Mangga:1
            Buatlah summary penjualannya

            Input  : String record penjualan
            Output : Summary penjualan, dalam bentuk aplhabetical order
                Apel:9
                Jeruk:9
                Mangga:1
                Pisang:3
     */
            function penjualan($jual) {

            $data = explode(', ', $jual);
            $hasil = array();
    
            foreach ($data as $item) {
                list($fruit, $quantity) = explode(':', $item);
                $quantity = (int)$quantity;
    
                if (array_key_exists($fruit, $hasil)) {
                    $hasil[$fruit] += $quantity;
                } else {
                    $hasil[$fruit] = $quantity;
                }
            }
            ksort($hasil);
            return $hasil;
        }
           $record = "Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, Jeruk:8, Mangga:1";
           $summary = penjualan($record);

            foreach ($summary as $fruit => $quantity) {
                 echo "$fruit:$quantity\n";
             }

?>