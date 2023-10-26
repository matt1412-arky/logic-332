<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
    /* Switch case adalah konstruksi pengendalian alur yang digunakan 
    untuk memilih satu dari banyak blok kode yang akan dieksekusi 
    berdasarkan nilai ekspresi atau variable tertentu. Kondisi ini juga 
    berguna ketika kita memiliki banyak kasus yang berbeda dan ingin 
    menjalankan kode berbeda untuk setiap kasus. */

    // $hari = "Senin";
    /* switch ($hari) {
        case "Senin":
            echo "Hari Senin";
            break;
        case "Selasa":
            echo "Hari Selasa";
            break;
        case "Rabu":
            echo "Hari Rabu";
            break;
        case "Kamis":
            echo "Hari Kamis";
            break;
        case "Jumat":
            echo "Hari Jumat";
            break;
            // case "Sabtu":
            //     echo "Hari Sabtu";
            //     break;
            // case "Minggu":
            //     echo "Hari Minggu";
            //     break;
        default:
            echo "Hari ini bukan hari kerja";
            break;
    }
    */

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
</body>

</html>