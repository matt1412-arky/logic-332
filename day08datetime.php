<?php 

/*
date digunakan untuk mengambil data DATE dari system
time digunakan untuk mengambil data TIME dari system
*/

//current date (tanggal ssat ini)
echo ("Sekarang tanggal : ".date("Y/m/d")."\n"); //Y=year, m=month, d=day
echo ("Sekarang tanggal : ".date("Y-m-d")."\n"); //Y=year, m=month, d=day
echo ("Sekarang tanggal : ".date("d/m/Y")."\n"); //Y=year, m=month, d=day
echo ("Sekarang tanggal : ".date("l, d/m/Y")."\n"); //Y=year, m=month, d=day

//current time (waktu/jam saat ini)
echo ("Sekarang jam : ". date("h:i:s"). "\n"); //h=hours, i=minutes, s=second
echo ("Sekarang jam : ". date("H:i:s"). "\n"); //Versi 24 jam
echo ("Sekarang jam : ". date("h:i:sa"). "\n"); //a=merujuk ke post A/P meridiem

//current datetime
echo ("Sekarang : ". date("d/m/Y H:i:s")."\n");

//set timezone
date_default_timezone_set("Asia/Manila");
echo ("Sekarang jam : ".date("H:i:s")."\n");

date_default_timezone_set("Australia/Sydney");
echo ("Sekarang jam : ".date("H:i:s")."\n");

//Differensial waktu (date diff)
$startDate = new DateTimeImmutable('2023-10-20 14:00:00');
$strDateNow = date('Y-m-d H:i:s');
$endDate = new DateTimeImmutable($strDateNow);
$interval = $startDate->diff($endDate);
echo($interval->format('%a Hari %h Jam %i Menit %s Detik')."\n");


   
?>
