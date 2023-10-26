<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hello World!". "<br>";
    // Strlen() - menggembalikan panjang string
    //  Fungsi PHP Strlen() menggembalikan panjang dari sebuah string.
        $name = "Muhammad Ismail Nur Sidiq";
        echo "Panjang Character nama dari Ismail : ".strlen($name). "<br>". "\n";

    /* str_word_count() - menghitung kara dalam string
    Fungsi php str_word_count() menghitung jumlah kata dalam sebuah string.  
    */
        echo "Panjang kata dalam string name : ".str_word_count($name). "<br>". "\n";
    /*
    strrevers - membalikan kata
    */
        echo "String awal : ".$name . "<br>"." String Reverse : ".strrev($name). "<br>". "\n";
    /*     
    strpos() - mencari teks dalam string
    Fungsi PHP strpos mencari teks tertentu dalam sebuah string, jika ada
    kecocokan ditemukan fungsi ini mengembalikan posisi karakter pertama yang
    cocok. Jika tidak ada kecocokan yang ditentukan Maka akan mengembalikan
    False / no Output.   
    */    
        echo "Mencari Sidiq : ".strpos($name, "Sidiq"). "<br>"."\n"; 

    /* str_replace() - Mengganti teks dalam string */    

        echo "Nama Awal : ".$name . "<br>". "Setelah diganti: ".str_replace('Sidiq', 'Diq',$name). "<br>"."\n";

    /*number count */
        $a = 5;
        $b = "3";

        echo "hasil : ".($a+$b)."<br>"."\n"; // conversi secara implisit
        echo "hasil : ".($a+(int)$b). "<br>" ."\n"; // conversi secara eksplisit

        var_dump($a + $b). "<br>". "\n";
        var_dump($a +(int)$b). "<br>". "\n";
        var_dump(($a + $b).""). "<br>". "\n";

    /* mathematic 
        fungi pi 
    */
        echo (number_format((float)pi(), 2, '.')). "<br>". "\n";

    /* fungsi min max */

        echo "nilai minimal : ".min(0, 150, 30, 20, -8, -200). "<br>". "\n"; // returns -200
        echo "nilai maximal : ".max(0, 150, 30, 20, -8, -200). "<br>". "\n" ; // returns 150)    

    /* fungsi absolute */

        echo "nilai absolute : ".abs(-6.72). "<br>". "\n";
    
    /* fungsi random */
        echo "nilai bulat : ".round(30.50). "<br>". "\n";    
    /* fungsi random */
        echo "nilai acak : ".rand(0,10). "<br>". "\n";
    
    /*constata */
        $hello = "Hello Word";

        define("GREETING", "Welcome to Xsis Academy!");
        define("PI", 3.14);
        define("isLogin",false);
        $GREETING = "Welcome to MLBB";
        echo GREETING;
        echo $hello. "<br>". "\n";
        $hello = "Hello Xsis";

        echo $hello."<br>". "\n";
        echo PI. "<br>". "\n";
        echo (int)isLogin. "<br>". "\n";

        var_dump(isLogin)."<br>";
        var_dump((int)PI). "<br>"."\n";

        define("XSIS", "Welcome to Xsis Mitra Utama"). "\n";

        function myXsis() {
            echo XSIS;
        }
        myXsis();

    /* if else statment
       if..else..statement digunakan untuk mengendalikan alur eksekusi kode
       berdasarkan kondisi tertentu. Memungkinkan untuk menjalankan satu blok kode
       jika kondisi tertentu terpenuhi (if) dan menjalankan blok lain jika kondisi
       tidak terpenuhi (else)
     */
     
     // Pernyataan if statment
     
        $nilai = 85;
        
        var_dump(85 >= 60);

        if ($nilai >= 60){
            // block statement
            echo "Anda Lulus". "<br>";
            echo "Anda Dapat Mobil". "<br>";
        }
        
    // Pernyataan if else statment
     
        $nilai = 45;
        if ($nilai >= 60){
            echo "Anda Lulus Ujian". "<br>"."\n";
        } else {
            echo "Anda Tidak Lulus". "<br>"."\n";
        }
    /* Pernyataan if..elseif..else digunakan untuk mengatasi kondisi secara
    berubah, Jika kondisi pertama tidak terpenuhi, maka pernyataan elseif
    berikut nya diperiksa, dan jika tidak ada yang terpenuhi maka blok else
    dijalankan
    */
        // $nilai = 75;
        $nilai = rand(0, 100);
        $grade = "";
        if ($nilai >= 90){
            $grade = "A";
        } elseif ($nilai >= 80){
            $grade = "B";
        } elseif ($nilai >= 70){
            $grade = "C";
        } elseif ($nilai >= 60){
            $grade = "D";
        } else {
            $grade = "E";
        }
        
        echo $grade."<br>"."\n";
        echo "Shopee!". "<br>"."\n";
    /* Swtich Case adalah konstruksi pengendalian alur yang digunakan untuk memilih
    satu dari banyak blok kode yang akan dieksekusi berdasarkan nilai ekpresi atau
    variabel tertentu. Kondisi ini berguna ketika kita memiliki banyak kasus yang
    berbeda dan ingin menjalankan kode berbeda untuk setiap kasus. */

        $hari = "Senin";
        switch ($hari) {
            case "Senin":
              echo "Hari ini adalah Senin";
              break;
            case "Selasa":
              echo "Hari ini adalah Selasa";
              break;
            case "Rabu":
              echo "Hari ini adalah Rabu";
              break;
            default:
              echo "Hari ini bukan hari kerja";
          }

   ?>    
</body>
</html>
