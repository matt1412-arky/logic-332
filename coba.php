<?php
// function hitungNextTanggal($a, $b)
// {
//     $gcd = gcd($a, $b);
//     $lcm = ($a * $b) / $gcd;

//     // Tanggal awal
//     $start_date = strtotime('2021-02-25');

//     // Tambahkan kelipatan LCM ke tanggal awal
//     $next_date = strtotime('+' . $lcm . ' days', $start_date);

//     // Cek apakah tahun kabisat
//     $is_leap_year = date('L', $next_date);

//     // Jika tahun kabisat dan tanggal lebih dari 365, tambahkan 1 hari
//     if ($is_leap_year && date('z', $next_date) >= 365) {
//         $next_date = strtotime('+1 day', $next_date);
//     }

//     return date('Y-m-d', $next_date);
// }

// function gcd($a, $b)
// {
//     if ($b == 0) {
//         return $a;
//     } else {
//         $remainder = $a % $b;
//         return gcd($b, $remainder);
//     }
// }

// $a = 3; // Periode Mary
// $b = 2; // Periode Susan

// $nextCommonDate = hitungNextTanggal($a, $b);
// echo "Tanggal kembali bersama berikutnya dalam tahun kabisat adalah: $nextCommonDate";


$z = strtotime('2020-02-25');

$x = 4;

$y = 2;

$jumHari = 0;

while (true) {
    $z = strtotime('+1 day', $z);

    if (date('N', $z) != 6 && date('N', $z) != 7) {
        $jumHari++;
    }

    if ($jumHari % $x == 0 && $jumHari % $y == 0) {
        break;
    }
}

$hariBerikutnya = date('Y-m-d', $z);


$tahun = date('Y', $z);

$cekKabisat = (date('L', strtotime($tahun . '-01-01')) == 1);

if ($cekKabisat) {
    echo "Andi dan Budi akan berenang bersama lagi pada tanggal $hariBerikutnya di tahun kabisat. \n";
} else {
    echo "Andi dan Budi akan berenang bersama lagi pada tanggal $hariBerikutnya di tahun biasa. \n";
}
$x = 7;
$y = 1;
for ($i = 0; $i < $x; $i++) {
    $y_arr[] = $y;
    $y += 2;
}
$len = (count($y_arr) - 1);
for ($i = 0; $i < $x; $i++) {
    $y_rev[$i] = $y_arr[$len];
    $len--;
}
$y = join(" ", $y_arr);
$y_rev = join(" ", $y_rev);

echo "$y \n";
echo "$y_rev \n";

$pilihUkuran = readline("Masukkan Ukuran Kertas : ");
$pilihUkuran = strtolower($pilihUkuran);
switch ($pilihUkuran) {
    case "a1":
        $a1 = [
            'panjang' => 594,
            'lebar' => 841
        ];

        $a6 = [
            'panjang' => 105,
            'lebar' => 148
        ];
        $perkecilan_panjang = ceil($a1['panjang'] / $a6['panjang']);
        $perkecilan_lebar = ceil($a1['lebar'] / $a6['lebar']);
        $jumlah_perkecilan = max($perkecilan_panjang, $perkecilan_lebar);
        echo "Untuk mengubah satu lembar kertas A1 menjadi A6, diperlukan sekitar $jumlah_perkecilan lembar kertas A1.";
        break;

    case "a2":
        $a2 = [
            'panjang' => 420,
            'lebar' => 594
        ];

        $a6 = [
            'panjang' => 105,
            'lebar' => 148
        ];
        $perkecilan_panjang = ceil($a2['panjang'] / $a6['panjang']);
        $perkecilan_lebar = ceil($a2['lebar'] / $a6['lebar']);
        $jumlah_perkecilan = max($perkecilan_panjang, $perkecilan_lebar);
        echo "Untuk mengubah satu lembar kertas A2 menjadi A6, diperlukan sekitar $jumlah_perkecilan lembar kertas A2.";
        break;
    case "a3":
        $a3 = [
            'panjang' => 297,
            'lebar' => 420
        ];

        $a6 = [
            'panjang' => 105,
            'lebar' => 148
        ];
        $perkecilan_panjang = ceil($a3['panjang'] / $a6['panjang']);
        $perkecilan_lebar = ceil($a3['lebar'] / $a6['lebar']);
        $jumlah_perkecilan = max($perkecilan_panjang, $perkecilan_lebar);
        echo "Untuk mengubah satu lembar kertas A3 menjadi A6, diperlukan sekitar $jumlah_perkecilan lembar kertas A3.";
        break;
    case "a4":
        $a4 = [
            'panjang' => 210,
            'lebar' => 297
        ];

        $a6 = [
            'panjang' => 105,
            'lebar' => 148
        ];
        $perkecilan_panjang = ceil($a4['panjang'] / $a6['panjang']);
        $perkecilan_lebar = ceil($a4['lebar'] / $a6['lebar']);
        $jumlah_perkecilan = max($perkecilan_panjang, $perkecilan_lebar);
        echo "Untuk mengubah satu lembar kertas A4 menjadi A6, diperlukan sekitar $jumlah_perkecilan lembar kertas A4.";
        break;
    case "a5":
        $a5 = [
            'panjang' => 148,
            'lebar' => 210
        ];

        $a6 = [
            'panjang' => 105,
            'lebar' => 148
        ];
        $perkecilan_panjang = ceil($a5['panjang'] / $a6['panjang']);
        $perkecilan_lebar = ceil($a5['lebar'] / $a6['lebar']);
        $jumlah_perkecilan = max($perkecilan_panjang, $perkecilan_lebar);
        echo "Untuk mengubah satu lembar kertas A5 menjadi A6, diperlukan sekitar $jumlah_perkecilan lembar kertas A5.";
        break;
    case "a6":
        $a6 = [
            'panjang' => 105,
            'lebar' => 148
        ];

        $a6 = [
            'panjang' => 105,
            'lebar' => 148
        ];
        $perkecilan_panjang = ceil($a6['panjang'] / $a6['panjang']);
        $perkecilan_lebar = ceil($a6['lebar'] / $a6['lebar']);
        $jumlah_perkecilan = max($perkecilan_panjang, $perkecilan_lebar);
        $luas_target = 105 * 148;
        echo "Untuk mengubah satu lembar kertas A6 menjadi A6, diperlukan sekitar $jumlah_perkecilan lembar kertas A6.";
        break;

    default:
        echo "Ukuran Kertas Tidak Ada";
}
// hitung jumlah ukuran a6 yang ada pada aX
$ukuran_a = 5;
function jumlah_a6($a)
{
    //readLine("Jumlah lembar A6 yang muat di kertas A: ");
    echo "Jumlah lembar A6 yang muat di kertas A$a = ";
    $diff = 6 - $a;
    $luas_target = 2 * $diff;
    if ($luas_target > 0) {
        $res = $luas_target;
    } elseif ($a == 0) {
        $res = 1;
    } else {
        $res = "A6 tidak muat dalam kertas A" . $a;
    }
    return $res;
}
echo Jumlah_a6($ukuran_a) . "\n";

// buat array sebanyak X dan output array + output array terbalik
$x = 11;
function make_and_rev_array($n)
{
    $x = 1;
    for ($i = 0; $i < $n; $i++) {
        $x_arr[] = $x;
        $x += 2;
    }
    $len = (count($x_arr) - 1);
    for ($i = 0; $i < $n; $i++) {
        $x_rev[$i] = $x_arr[$len];
        $len--;
    }
    $x = join(" ", $x_arr);
    $x_rev = join(" ", $x_rev);

    return "$x\n$x_rev\n";
}
echo make_and_rev_array($x);

// konversi volume botol ke cangkir
function botol_to_cangkir($x)
{
    $botol_gelas = 2;
    $teko_cangkir = 25;
    $gelas_cangkir = 2.5;

    $botol_cangkir = ($x * $botol_gelas) * $gelas_cangkir;

    return $x . " Botol = " . $botol_cangkir . " Cangkir\n";
}
echo botol_to_cangkir(1);

// cari jumlah porsi
$str = "Laki-laki dewasa = 3 orang, Perempuan dewasa = 1 orang, balita = 1 orang, laki-laki dewasa = 1 orang";

function cari_porsi($str)
{
    $str = strtolower($str);
    $str = str_replace("orang", "", $str);
    $str = str_replace(" ", "", $str);
    $str = explode(",", $str);
    $sum = $add = 0;

    for ($i = 0; $i < count($str); $i++) {
        $str[$i] = explode("=", $str[$i]);
    }
    print_r($str);
    for ($i = 0; $i < count($str); $i++) {

        switch ($str[$i][0]) {
            case "laki-lakidewasa":
                $sum += $str[$i][1] * 2;
                break;
            case "perempuandewasa":
                $sum += $str[$i][1] * 1;
                $add = $str[$i][1];
                break;
            case "remaja":
                $sum += $str[$i][1] * 1;
                break;
            case "anak-anak":
                $sum += $str[$i][1] * 0.5;
                break;
            case "balita":
                $sum += $str[$i][1] * 1;
                break;
        }
        echo $sum . "\n";
    }
    echo $sum . "\n";

    if ($sum > 5 && $sum % 3 == 0) {
        $add = $add + 1;
        return $sum + $add . " Porsi\n";
    } else {
        return $sum . " Porsi\n";
    }
}
echo cari_porsi($str) . "\n";

// cari biaya parkir
$start = new DateTime("28 January 2020 07:30:34");
$end = new DateTime("28 January 2020 20:03:34");

function biaya_parkir($start, $end)
{

    $delta = $start->diff($end);

    $hour = $delta->format("%H");
    if ($delta->format("%i") > 30) {
        $hour += 1;
    }
    if ($delta->format("%d") >= 1) {
        $hour += 24 * $delta->format("%d");
    }

    if ($hour <= 8) {
        $price = $hour * 1000;
    } elseif ($hour >= 8 && $hour < 24) {
        $price = 8000;
    } elseif ($hour > 24) {
        $hour = round($hour / 24);
        $price = $hour * 15000;
    }
    return $price;
}
echo biaya_parkir($start, $end) . "\n";

// cari tanggal libur bersama
$x = 5;
$y = 2;
$z = new DateTime("2020-02-25");

function find_same_day($find_1, $find_2, \DateTime $date)
{
    $z = $date;
    $x = $find_1 + 1;
    $y = $find_2 + 1;
    $len = $x * $y;
    $a = $x;
    $b = $y;

    for ($i = 0; $i < $len; $i++) {
        $x_arr[] = $x;
        $y_arr[] = $y;
        $x += $a;
        $y += $b;
    }

    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len; $j++)
            if ($x_arr[$i] == $y_arr[$j]) {
                $sameDay[] = $y_arr[$j];
            }
    }

    $same = $sameDay[0];
    while ($same > 0) {
        $z->modify("+1 days");
        $same--;
    }

    $newDate = $z->format("l, Y F d");

    $leap = $z->format("Y");
    if ($leap % 4 == 0) {
        $leap = "leap year";
    } else {
        $leap = "";
    }
    return $newDate . " " . $leap . "\n";
}
echo find_same_day($x, $y, $z) . "\n";

//1 teko = ?botol

// function konversi_volume(){
//     $botol = 5;
//     $teko = 25;
//     $gelas = 2.5;
//     $cangkir = 1;

//     echo "Konversi Volume\n";
//     $x = $a = readline("dari : ");
//     $n = readline("jumlah $x: ");
//     $y = $b = readLine("ke   : ");

//     switch ($x) {
//         case 'botol': $x = $botol; break;
//         case 'teko': $x = $teko; break;
//         case 'cangkir': $x = $cangkir; break;
//         case 'gelas': $x = $gelas; break;
//     }

//     switch ($y) {
//         case 'botol': $y = $botol; break;
//         case 'teko': $y = $teko; break;
//         case 'cangkir': $y = $cangkir; break;
//         case 'gelas': $x = $gelas; break;
//     }

//     $res = "$n $a = " . (($x * $n) / $y) . " $b";
//     return $res;
// } echo konversi_volume();

$str = "Apel:1,Pisang:3,Jeruk:1,Apel:3,Apel:5,Jeruk:8,Mangga:1";

function readArray($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . "\n";
    }
}

function jeruk_pisang($str)
{
    $str = explode(",", $str);
    $result = array();

    for ($i = 0; $i < count($str); $i++) {
        list($fruit, $quantity) = explode(":", $str[$i]);

        if (array_key_exists($fruit, $result)) {
            $result[$fruit] += (int)$quantity;
        } else {
            $result[$fruit] = (int)$quantity;
        }
    }

    $formattedResult = array();
    $fruits = array_keys($result);
    for ($i = 0; $i < count($fruits); $i++) {
        $fruit = $fruits[$i];
        $formattedResult[] = $fruit . ':' . $result[$fruit];
    }

    return $formattedResult;
}

$inputData = jeruk_pisang($str);
readArray($inputData);


/*
jim berjalan melewati sebuah path ----0--0---0---
jim berjalan dengan path          wwwjwjwwjwwjwww
energi awal jim adalah 15
jika melompat (j) energi jim berkurang 2
jim harus melompat (j) jika melihat path (0)
berapakah energi terakhir jim
*/
//1
$a = "----o--o---o---";
$ceka = strlen($a);
$b = "wwwwjwwjwwwjwww";
$cekb = strlen($b);
$c = 15;
$d = 2;

if ($ceka != $cekb) {
    echo "Panjangnya tidak sama";
} elseif ($ceka == $cekb) {
    for ($i = 0; $i < $ceka; $i++) {
        if ($a[$i] == "o" && $b[$i] == "j") {
            $c -= $d;
        } else if ($a[$i] == "o" && $b[$i] != "j") {
            echo "Jim Mati";
        }
    }
    echo "Energi terakhir Jim: " . $c . "\n";
}
//2
/*
huruf alfabet dalam huruf kecil dibawah ini mengandung bobot yang ditentukan sebagai berikut
a=1;b=2;c=3;d=4; sampai dengan z=26;
tentukan apakah dalam sebuah inputan string sudah memiliki bobot yang sesuai

constraint :
- 0<=n<=100
- string hanya mengandung huruf kecil

input :
string mengandung kata/kalimat
array n : mengandung array yang harus dicocokkan terhadap string

example
string : abbcdzzz
array : [1,2,2,4,4,26,26]

output true, true, false, true, false, true, true

explanation :
a = 1 -> true
b = 2 -> true
c = 2 -> false
d = 4 -> true
z = 4 -> false
z = 26 -> true
z = 26 -> true
*/

print_r($b);
//3
$a = 3;
for ($i = 1; $i <= 10; $i++) {
    if (($i * 3) % 2 == 0) {
        echo $i * 3 . " ";
    }
}
echo "\n";

//4
function alfabet($string, $n)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $result = '';

    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        $isLowercase = ($char >= 'a' && $char <= 'z');

        if ($isLowercase) {
            $index = strpos($alphabet, $char);
            if ($index !== false) {
                $shiftedIndex = ($index + $n) % 26;
                $shiftedChar = $alphabet[$shiftedIndex];
                $result .= $shiftedChar;
            } else {
                $result .= $char;
            }
        } else {
            $result .= $char;
        }
    }

    return $result;
}

$z = range("a", "z");
$inputString = join("", $z);
$n = 3;
$encryptedString = alfabet($inputString, $n);

echo "String Asli: $inputString\n";
echo "String Terenkripsi: $encryptedString\n";