<?php 

/*
// buat array 
// 1, 3, 5, 7
// 9, 11, 13, 15
//yang input datanya dilakukan dalam loop
$rows = 2; // Jumlah baris
$columns = 4; // Jumlah kolom

$array = array();

for ($i = 0; $i < $rows; $i++) {
    $row = array();
    for ($j = 1; $j <= $columns; $j++) {
        $value = ($i * $columns) + $j * 2 - 1;
        echo("$row . $value");
    }
    echo("$array . $row");
}

// Menampilkan array
foreach ($array as $row) {
    foreach ($row as $value) {
        echo $value . ' ';
    }
    echo "<br>";
}



echo "<h3>Postincrement</h3>";
$a = 5;
echo "\$a = $a \n";
echo "\$a akan bernilai 5: " . $a++ . " (\$a++)\n";
echo "\$a akan bernilai 6: " . $a . "\n";
echo"\n";
echo "<h3>Preincrement</h3>";
$a = 5;
echo "\$a = $a \n";
echo "\$a akan bernilai 6: " . ++$a . " (++\$a)\n";
echo "\$a akan bernilai 6: " . $a . "\n";
echo"\n";
echo "<h3>Postdecrement</h3>";
$a = 5;
echo "\$a = $a \n";
echo "\$a akan bernilai 5: " . $a-- . " (\$a--)\n";
echo "\$a akan bernilai 4: " . $a . "\n";
echo"\n"; 
echo "<h3>Predecrement</h3>";
$a = 5;
echo "\$a = $a \n";
echo "\$a akan bernilai 4: " . --$a . " (--\$a)\n";
echo "\$a akan bernilai 4: " . $a . "\n";
echo"\n";



$a = 3;
for($i=0; $i<=5; $i++){
    $a = $a + $i;
    echo("$a \n");
}
echo("======== \n");
$b = 3;
for($i=0; $i<=5; ++$i){
    $b = $b + $i;
    echo("$b \n");
}


// latihan soal 
/* Mary mendapat libur setiap x hari, sedangkan susan mendapatkan libur setiap y hari.  
jika mereka terakhir mendapatkan libur dihari yang sama pada tanggal z, kapan tanggal terdekat mereka akan libur bersama kembali?

input : int x; y; date/varchar z
output : tanggal libur bersama selanjutnya 

contoh = x =3; y=2;z=25 februari 2020; output = 8 maret 2020 

function findNextCommonHoliday($x, $y, $z) {

    $nextHoliday = max($x,$y); // Inisialisasi dengan salah satu liburan terdekat (x atau y)
    
    while (true) {
        if ($nextHoliday % $x == 0 && $nextHoliday % $y == 0) {
            return date('j F Y', strtotime($z . ' + ' . ($nextHoliday - 1) . ' days'));
        }
        $nextHoliday++;
    }
}

$x = 3; // Ganti dengan nilai x yang sesuai
$y = 2; // Ganti dengan nilai y yang sesuai
$z = "25 February 2020"; // Ganti dengan tanggal z yang sesuai

$result = findNextCommonHoliday($x, $y, $z);
echo "Tanggal libur bersama selanjutnya: $result\n";

echo"\n";

$datetime = new DateTime('06-08-2021');
echo $datetime->format('j F Y');


function findLCM($x, $y) {
    $lcm = max($x, $y);
    while (true) {
        if ($lcm % $x == 0 && $lcm % $y == 0) {
            return $lcm;
        }
        $lcm++;
        echo "$lcm \n";
    }
}

echo(findLCM(3,2));




function hitungParkir ($entryDateTime, $exitDateTime){
    //konversi tanggal dan waktu masuk dan keluar ke DateTime
    $entryDateTime = DateTime::createFromFormat("d F Y H:i:s", $entryDateTime);
    $exitDateTime = DateTime::createFromFormat("d F Y H:i:s", $exitDateTime);

    //periksa apakah format konversi berhasil 
    if (!$entryDateTime || !$exitDateTime){
        echo"Format tanggal dan waktu tidak valid!. Pastikan anda memasukan format yang benar. \n";
        return;
    }
    //hitung selisih waktu dalam detik 
    $timeDifference = $exitDateTime->getTimestamp() - $entryDateTime->getTimestamp();

    //hitung selisih dalam jam
    $hours = ceil($timeDifference /3600);

    //hitung tarif parkir berdasarkan ketentuan
    if ($hours <= 8){
        $parkingFee = $hours * 1000;
        $roundeHourse = $hours;
        $feeExplanation = "dibulatkan menjadi $roundeHourse jam mengacu pada ketentuan pertama";
    } elseif ($hours <= 24){
        $parkingFee = 8000;;
        $roundeHourse = $hours;
        $feeExplanation = "dibulatkan menjadi $roundeHourse jam mengacu pada ketentuan kedua";
    } else{
        $additionalDays = floor(($hours-24)/24);
        $additionalFee = $additionalDays * 15000;
        $remainingHours = $hours - (24 + $additionalDays *24);
        $parkingFee = 8000 + $additionalFee + $remainingHours * 1000;
        $roundeHourse = $hours;
        $feeExplanation = "dibulatkan menjadi $roundeHourse jam mengacu pada ketentuan ketiga";
    }
}

//penggunaan
$entryDateTime = readline("Masukan tanggal dan waktu masuk: ");
$exitDateTime = readline("Masukan tanggdal dan waktu keluar: ");

echo (hitungParkir($entryDateTime,$exitDateTime));
*/

/* 
Berikut ini adalah recor penjualan buah dalam bentuk string
Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, jeruk:8; 

buat summary penjualan
input : string record penjualan
output : summary penjualan, dalam alphabetical order
Apel : 9 
Jeruk : 9
Mangga : 1
Pisang:3


$record_penjualan = "Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, jeruk:8, mangga:1";

// Memecah string record penjualan menjadi elemen-elemen
$penjualan_arr = explode(", ", strtolower($record_penjualan));
print_r($penjualan_arr);

//inisial array untuk penjumlahan hasil penjualan
$summary = array();

// Memproses setiap elemen penjualan
foreach ($penjualan_arr as $penjualan) {
    // Memecah setiap elemen menjadi nama buah dan jumlah
    list($buah, $jumlah) = explode(":", $penjualan);

    // Menghapus spasi dan mengonversi nama buah menjadi huruf kecil
    $buah = trim($buah);
    $jumlah = intval($jumlah);

    // Menambahkan jumlah penjualan ke dalam summary
    if (array_key_exists($buah, $summary)) {
        $summary[$buah] += $jumlah;
    } else {
        $summary[$buah] = $jumlah;
    }
}

// Mengurutkan summary berdasarkan nama buah (alphabetical order)
ksort($summary);

// Menampilkan summary penjualan
foreach ($summary as $buah => $jumlah) {
    echo ucfirst($buah) . " : $jumlah\n";
}

 */

 /* Berikut ini adalah recor penjualan buah dalam bentuk string
Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, jeruk:8; 

buat summary penjualan
input : string record penjualan
output : summary penjualan, dalam alphabetical order
Apel : 9 
Jeruk : 9
Mangga : 1
Pisang:3



$penjualan = "Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, jeruk:8, Mangga:1";
//$penjualan = strtolower(str_replace(' ','',$penjualan));  
$penjualan = str_replace(' ','',$penjualan);  
//echo "$penjualan";

//ubah string menjadi array 
$explodePenjualan = explode(",", $penjualan); //array
//print_r($explodePenjualan);

$result = array();

for ($i = 0; $i < count($explodePenjualan);$i++){
    $temp = $explodePenjualan[$i];
    list($buah,$jumlah) = explode(":",$temp);

    if (array_key_exists($buah, $result)) {
        $result[$buah] += $jumlah;
    } else {
        $result[$buah] = $jumlah;
    }
}
// Mengurutkan summary berdasarkan nama buah (alphabetical order)
ksort($result);
//$result = implode(" ", $result);
print_r($result);

// Menampilkan summary penjualan
// foreach ($result as $buah => $jumlah) {
//     echo ucfirst($buah) . " : $jumlah\n";
// }

$summaryKeys = array_keys($result);
$totalBuah = count($summaryKeys);
for ($i = 0; $i < $totalBuah; $i++) {
    $buah = $summaryKeys[$i];
    $jumlah = $result[$buah];
    echo "". $buah ."". $jumlah ."\n";
}



//echo"sekarang tanggal : ".date("l Y.m.d")."\n"; // output : Thursday 2023.10.26
// date_default_timezone_set("Asia/Jakarta")."\n"; // mengatur timezone 
// echo "The time is (jkt)  " . date("h:i:sa")."\n"; //output 08:54:26 am 

function hitungParkir ($entryDateTime, $exitDateTime){
    //konversi tanggal dan waktu masuk dan keluar ke DateTime
    $entryDateTime = DateTime::createFromFormat("d F Y H:i:s", $entryDateTime);
    $exitDateTime = DateTime::createFromFormat("d F Y H:i:s", $exitDateTime);

    //periksa apakah format konversi berhasil 
    if (!$entryDateTime || !$exitDateTime){
        echo"Format tanggal dan waktu tidak valid!. Pastikan anda memasukan format yang benar. \n";
        return;
    }
    //hitung selisih waktu dalam detik 
    $timeDifference = $exitDateTime->getTimestamp() - $entryDateTime->getTimestamp();

    //hitung selisih dalam jam
    $hours = ceil($timeDifference /3600);

    //hitung tarif parkir berdasarkan ketentuan
    if ($hours <= 8){
        $parkingFee = $hours * 1000;
        $roundeHourse = $hours;
        $feeExplanation = "dibulatkan menjadi $roundeHourse jam mengacu pada ketentuan pertama";
    } elseif ($hours <= 24){
        $parkingFee = 8000;;
        $roundeHourse = $hours;
        $feeExplanation = "dibulatkan menjadi $roundeHourse jam mengacu pada ketentuan kedua";
    } else{
        $additionalDays = floor(($hours-24)/24);
        $additionalFee = $additionalDays * 15000;
        $remainingHours = $hours - (24 + $additionalDays *24);
        $parkingFee = 8000 + $additionalFee + $remainingHours * 1000;
        $roundeHourse = $hours;
        $feeExplanation = "dibulatkan menjadi $roundeHourse jam mengacu pada ketentuan ketiga";
    }
}

//penggunaan
$entryDateTime = readline("Masukan tanggal dan waktu masuk: ");
$exitDateTime = readline("Masukan tanggdal dan waktu keluar: ");

echo (hitungParkir($entryDateTime,$exitDateTime));



$s = "12:01:00PM";



function timeConversion($s) {
    // Extract hours, minutes, and seconds
    sscanf($s, "%d:%d:%d%s", $hour, $minute, $second, $ampm);

    // Adjust hour for PM
    if ($ampm === 'PM' && $hour != 12) {
        $hour += 12;
    }

    // Adjust hour for midnight (12:00:00AM)
    if ($ampm === 'AM' && $hour == 12) {
        $hour = 0;
    }

    // Format the result in 24-hour format
    $result = sprintf("%02d:%02d:%02d", $hour, $minute, $second);

    return $result;
}


echo (timeConversion($s));


$s = "12:01:00PM";
$s = str_replace(":","", $s);
$split = str_split($s,2);

$ampm = array($split[count($split)-1]);
$hour = array($split[0]);
$minute = array($split[1]);
$second = array($split[2]);

$hourImplode = implode(", ", $hour);
$minuteImplode = implode(", ", $minute);
$secondImplode = implode(", ", $second);
$ampmImplode = implode(", ", $ampm);

echo ($hourImplode . $minuteImplode . $secondImplode . $ampmImplode);
echo ($ampmImplode);


function diagonalDifference($arr) {
    $jumlahDiagonalKiri = 0;
    $jumlahDiagonalKanan = 0;
    $n = count($arr);
    for($i=0; $i<$n; $i+=1){            //di loop terlebih dahulu 
        for($j=0; $j<$n; $j+=1){        // di loop hingga selesai
            //if(($i+$j) == ($n+1))     // untuk silang kanan
            if ($i == $j){      // untuk silang kiri
                $jumlahDiagonalKiri += $arr[$i][$j];
            } 
            elseif (($i+$j) == ($n-1)){
                $jumlahDiagonalKanan += $arr[$i][$j];
            }
        }
    }
    $result = abs($jumlahDiagonalKiri - $jumlahDiagonalKanan);
    return $result;
}


function separateNumbers($s) {
    // Write your code here
    $sLen = strlen($s);
    $isValid = false;
    $firstNum ='';

    for ($i = 0; $i < $sLen/2; $i++){
        $firstNum = substr($s, 0 ,$i);
        $num = (int)$firstNum;
        $validString = $firstNum;
        
        if (strlen($validString)< $sLen){
            $num++;
            $validString .= (string)$num;
        }

        if ($s === $validString){
            $isValid = true;
            echo "YES $firstNum \n";
            break;
        } 

    }
    if (!$isValid){
        echo "NO \n";}
}


$arr = ['abc','abc','bc'];
function gemstones($arr) {
    // Write your code here
    $gemstoneArray = str_split($arr[0]);

    for ($i = 0; $i < count($arr); $i++){
        $mineralArray = str_split($arr[$i]);
        $commonMineral = array();
        foreach ($mineralArray as $mineral) {
            if(in_array($mineral, $gemstoneArray)){
                $commonMineral[] = $mineral;
           }
        }
    $gemstoneArray = $commonMineral;
    }
    $gemstoneArray = array_unique($gemstoneArray);
    return count($gemstoneArray);
}
*/

$s1 = "hello";
$s2 = "world";
function twoStrings($s1, $s2) {

    for ($i = 0; $i < strlen($s1);$i++){
        for ($i = 0; $i < strlen($s2); $i++){
            if ($s1[$i] == $s2[$i]){
                $i++;
                return "YES";
            } else {
                return "NO";
            }
    }
    }   
}

echo twoStrings("$s1","$s2");




?>