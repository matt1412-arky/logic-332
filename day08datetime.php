<?php

    //date digunakan untuk mengambil data DATE dari system
    //time digunakan untuk mengambil data TIME dari system

    //current date (tanggal saat ini)
    echo ("Sekarang tanggal : ".date("Y/m/d")."\n"); // Y= year, M = month, D = day
    echo ("Sekarang tanggal : ".date("Y-m-d")."\n"); // Y= year, M = month, D = day
    echo ("Sekarang tanggal : ".date("d/m/Y")."\n"); // Y= year, M = month, D = day indonesia version
    echo ("Sekarang tanggal : ".date("l d/m/Y")."\n"); // l= merujuk ke nama hari, Y= year, M = month, D = day

    //current time (waktu/jam saat ini)
    echo ("Sekarang jam : ".date("h:i:s")."\n"); // h = hours, i = minutes, s = seconds
    echo ("Sekarang jam : ".date("H:i:s")."\n"); // h = hours, i = minutes, s = seconds versi 24 jam
    echo ("Sekarang jam : ".date("h:i:sa")."\n"); // h = hours, i = minutes, s = seconds, a = merujuk ke post A/P meridiem
    
    //current datetime
    echo ("Sekarang : ".date("d/m/Y H:i:s")."\n"); // 

    //set timezone
    date_default_timezone_set("Asia/Manila");
    echo ("Sekarang jam : ".date("H:i:s")."\n"); // h = hours, i = minutes, s = seconds Versi 24 jam
    
    date_default_timezone_set("Australia/Sydney");
    echo ("Sekarang jam : ".date("h:i:s")."\n"); // h = hours, i = minutes, s = seconds Versi 24 jam
    
    //Differensial waktu (date diff)
    $startDate = new DateTimeImmutable('2023-10-20 14:00:00');
    $strDateNow= date('Y-m-d H:i:s');
    $endDate = new DateTimeImmutable($strDateNow);
    $interval = $startDate->diff($endDate);
    echo($interval->format('%a Hari %h Jam %i menit %s Detik')."\n");
        
?>