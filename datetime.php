<?php

//date digunakan untuk mengambil data DATE dari sistem
//time digunakan untuk mengambil data time dari sistem

//current date (tanggal saat ini)
echo"sekarang tanggal : ".date("Y/m/d")."\n"; //tahun bulan hari
echo"sekarang tanggal : ".date("Y.m.d")."\n";
echo"sekarang tanggal : ".date("Y-m-d")."\n";
echo"sekarang tanggal : ".date("l Y.m.d")."\n"; //long date merujuk ke hari

//current time (waktu saat ini)
echo "The time is " . date("h:i:s")."\n"; //h jam;i menit; sa second
echo "The time is " . date("h:i:sa")."\n"; // merujuk ke post A/P meridien
echo "The time is " . date("H:i:sa")."\n";

date_default_timezone_set("Asia/Jakarta")."\n";
echo "The time is (jkt)  " . date("h:i:sa")."\n";
date_default_timezone_set("America/New_York")."\n";
echo "The time is (ny) " . date("h:i:sa")."\n";
date_default_timezone_set("Asia/Tokyo")."\n";
echo "The time is (tokyo) " . date("h:i:sa")."\n";

//diferensial waktu (daye diff)
$startDate = new DateTimeImmutable("2023-10-11");
$nowDate = date("y-m-d");
$endDate = new DateTimeImmutable("$nowDate");
$interval = $startDate->diff($endDate);

echo $interval -> format("%a days %h jam %i menit %s detik") ."\n";

//cara 1 time konversion
/*
function timeConversion($s) {
    return date('H:i:s', strtotime($s));
}
*/
//cara 2 time konversion 
/*
function timeConversion($s) {
    $time = date_create_from_format('h:i:sA', $s);
    
    if($time){
        return date_format($time, 'H:i:s');
    }
}
*/

//cara 3 time konversion
/*
function timeConversion($s) {
   // memisahkan jam, menit, detik dan am pm
    sscanf($s, "%d:%d:%d%s", $hour, $minute, $second, $ampm);

    // PM
    if ($ampm === 'PM' && $hour != 12) {
        $hour += 12;
    }

    // AM
    if ($ampm === 'AM' && $hour == 12) {
        $hour = 0;
    }

    // format ulang 24 jam
    $result = sprintf("%02d:%02d:%02d", $hour, $minute, $second);

    return $result;
} */
?>