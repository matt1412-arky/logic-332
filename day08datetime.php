<?php
//current date (tanggal saat ini)
echo ("Sekarang Tanggal : " . date("Y/m/d") . "\n");
echo ("Sekarang Tanggal : " . date("Y-m-d") . "\n");
echo ("Sekarang Tanggal : " . date("d/m/Y") . "\n");
echo ("Sekarang Tanggal : " . date("l, d/m/y") . "\n"); // l = menunjukan hari

//current date (Jam Saat ini)
echo ("Sekarang Jam : " . date("h:i:s") . "\n");
echo ("Sekarang Jam : " . date("H:i:s") . "\n"); // versi 24 jam
echo ("Sekarang Jam : " . date("h:i:s a") . "\n"); // a = merujuk ke post A/P meridiem

//current datetime
echo ("Sekarang Jam : " . date(" d/m/Y h:i:s") . "\n");

// set timezone
date_default_timezone_set("Asia/manila");
echo ("Sekarang Jam" . date("H:i:s") . "\n");

date_default_timezone_set("Australia/Sydney");
echo ("Sekarang Jam" . date("H:i:s") . "\n");

//Differensial Waktu (date diff)
$startDate = new DateTimeImmutable('2023-10-20 14:00:00');
$strDateNow = date('Y-m-d H:i:s');
$endDate = new DateTimeImmutable($strDateNow);
$interval = $startDate->diff($endDate);
echo ($interval->format('%a Hari %h Jam %i Menit %s Detik Days') . "\n");


