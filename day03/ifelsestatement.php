    <?php
    /* if..else..statement digunakan untuk mengendalikan alur eksekusi kode berdasarkan kondisi tertentu. Memungkinkan untuk menjalankan satu blok kode jika kondisi tertentu terpenuhi (if) dan menjalankan blok lain jika kondisi tidak terpenuhi (else).
    */

    // Pernyataan if statement

    $nilai = 85;
    var_dump(85 >= 60);
    if ($nilai >= 60) {
        // blok statement
        echo "Anda Lulus! \n";
        echo "Anda dapat mobil \n";
    }

    // Pernyataan If Else Statement

    $nilai = 45;

    if($nilai >= 60) {
        echo "Anda lulus ujian \n";
    } else {
        echo "anda kurang beruntung \n";
    }

    /* Pernyataan if..elseif..else digunakan untuk mengatasi kondisi secara berututan. Jika kondisi pertama tidak terpenuhi, maka pernyataan elseif berikutnya diperiksa, dan jika tidak ada yang terpenuhi, maka blok else dijalankan. */

    $nilai = 75;
    // $nilai = rand(0, 100); // mengeluarkan nilai random
    $grade = "";
    if ($nilai >= 90) {
        $grade = "A";
    } elseif ($nilai >= 80) {
        $grade = "B";
    } elseif ($nilai >= 70) {
        $grade = "C";
    } elseif ($nilai >= 60) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    echo $grade."\n";
?>