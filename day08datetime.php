<?php
// date digunakan untuk mengambil data DATE dari sistem
// time digunakan untuk mengambil data TIME dari sistem

// current date(tanggal saat ini)
$date = date('Y/m/d');
echo "Sekarang tanggal : " . $date . "\n"; // Y=Year, m=month, d=day

$date = date('Y-m-d');
echo "Sekarang tanggal : " . $date . "\n"; // Y=Year, m=month, d=day

$date = date('d/m/Y');
echo "Sekarang tanggal : " . $date . "\n"; // Y=Year, m=month, d=day

$date = date('l, d/m/Y');
echo "Sekarang tanggal : " . $date . "\n"; // Y=Year, m=month, d=day, l=merujuk ke nama hari

// current time (waktu/jam saat ini)
$time = date('h:i:s');
echo "Sekarang jam : " . $time . "\n"; // h= 12 hour, isminutes, s=seconds

$time = date('H:i:s');
echo "Sekarang jam : " . $time . "\n"; // H= 24 hour, isminutes, s=seconds

$time = date('h:i:sa');
echo "Sekarang jam : " . $time . "\n"; // H= 24 hour, isminutes, s=seconds, a=merujuk ke post A/P meridiem 

// current datetime
$datetime = date('d/m/Y H:i:s');
echo "Sekarang  : " . $datetime . "\n";

// set timezone
date_default_timezone_set('Asia/Manila');
$datetime = date('H:i:s');
echo "Sekarang jam  : " . $datetime . "\n";

date_default_timezone_set('Australia/Sydney');
$datetime = date('H:i:s');
echo "Sekarang jam  : " . $datetime . "\n";

date_default_timezone_set('America/New_York');
$datetime = date('H:i:s');
echo "Sekarang jam  : " . $datetime . "\n";

// Differensial waktu(date diff)
$startDate = new DateTimeImmutable('2023-10-20 14:00:00');
$strDateNow = date('Y-m-d H:i:s');
$endDate = new DateTimeImmutable($strDateNow);
$interval = $startDate->diff($endDate);
echo $interval->format('%a Hari, %h Jam, %i Menit, %s Detik' . "\n");
