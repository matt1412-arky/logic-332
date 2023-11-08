<?php
    /* Switch case adalah konstruksi pengendalian alur yang digunakan untuk memilih satu dari banyak blok kode yang akan dieksekusi berdasarkan nilai ekspresi atau variabel tertentu. Kondisi ini berguna ketika kita memiliki banyak kasus yang berbeda dan ingin menjalankan kode berbeda untuk setiap kasus. */

    $hari = "Senin";

    switch($hari) {
        case "Senin":
            echo "Hari ini adalah Senin. \n";
            break;
        case "Selasa":
            echo "Hari ini adalah Selasa. \n";
            break;
        case "Rabu":
            echo "Hari ini adalah Rabu. \n";
            break;
        case "Kamis":
            echo "Hari ini adalah Kamis. \n";
            break;
        case "Jumat":
            echo "Hari ini adalah Jumat. \n";
            break;
        case "Sabtu":
            echo "Hari ini adalah Sabtu. \n";
            break;
        case "Minggu":
            echo "Hari ini adalah Minggu. \n";
            break;
        default:
            echo "Hari ini bukan hari kerja. \n";
    }

    // switch ($hari)
    $nilai = 4;
    switch ($nilai) {
        case 1:
            echo "Satu.";
            break;
        case 2:
            echo "Dua.";
            break;
        case 3:
            echo "Tiga.";
            break;
        case 4:
            echo "Empat.";
            break;
        default:
            echo "Default.";
            break;
    }
?>