<?php
//date digunakan untuk mengambil data date dari system
//time digunakan untuk mengambil data time dari system

//tanggal saat ini
echo "Sekarang tanggal " .  date("l d-m-y"); //tanggal kata/hari, tanggal angka, bulan angka, tahun
echo "\n";
echo "Sekarang tanggal " .  date("l"); //tanggal kata/hari
echo "\n";
echo "Sekarang tanggal " .  date("M"); //bulan
echo "\n";
echo "Sekarang tanggal " .  date("Y"); //tahun
echo "\n";

//waktu saat ini
echo "Sekarang jam " .  date("h-i-s"); //waktu jam-menit-detik format am.pm
echo "\n";
echo "Sekarang jam " .  date("H-i-s"); //waktu jam-menit-detik versi 24 jam
echo "\n";
echo "Sekarang jam " .  date("h-i-s a"); //waktu jam-menit-detik format am.pm
echo "\n";

echo "Sekarang tanggal dan waktu " .  date("l, d M y, h-i-sa");
echo "\n";

//set timezone
date_default_timezone_set("Asia/Jakarta");
echo "Sekarang tanggal dan waktu " .  date("l d-m-y h-i-sa");
echo "\n";
date_default_timezone_set("Asia/Tokyo");
echo "Sekarang tanggal dan waktu " .  date("l d-m-y h-i-sa");
echo "\n";
date_default_timezone_set("Europe/London");
echo "Sekarang tanggal dan waktu " .  date("l d-m-y h-i-sa");
echo "\n";
date_default_timezone_set("America/New_York");
echo "Sekarang tanggal dan waktu " .  date("l d-m-y h-i-sa");
echo "\n";


//differensial waktu (daye diff)
$startDate = new DateTimeImmutable("2023-10-11 14:00:30");
$nowDate = date("y-m-d h:i:s");
$endDate = new DateTimeImmutable($nowDate);
$interval = $startDate->diff($endDate);

echo $interval -> format("%a days %h jam %i menit %s detik");



?>