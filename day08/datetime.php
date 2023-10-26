<?php

    //date digunakan untuk mengambil data DATE dari system
    //time digunakan untuk mengambil data TIME dari system

    //current date (tanggal saat ini)
    echo("Sekarang Tanggal : " . date("Y/m/d"."\n")); //Y=year, m=mount, d=day
    echo("Sekarang Tanggal : " . date("Y-m-d"."\n")); //Y=year, m=mount, d=day
    echo("Sekarang Tanggal : " . date("d/m/Y"."\n")); //Y=year, m=mount, d=day
    echo("Sekarang Tanggal : " . date("l, d/m/Y"."\n")); //l = merujuk ke nama hari
    
    //current time (waktu/jam saat ini)
    echo("Sekarang Jam : " . date("h:i:s"."\n")); //h = hours, i=minutes, s=seconds
    echo("Sekarang Jam : " . date("H:i:s"."\n")); //H = versi 24 jam
    echo("Sekarang Jam : " . date("h:i:s a"."\n")); //a = merujuk ke post A/P meridiem
    
    //current datetime
    echo("Sekarang : " . date("d/m/Y H:i:s"."\n"));
    
    //set timezone
    date_default_timezone_set("Asia/Jakarta");
    echo("Sekarang Jam : " . date("H:i:s"."\n")); //H = versi 24 jam
    
    date_default_timezone_set("Australia/Sydney");
    echo("Sekarang Jam : " . date("H:i:s"."\n")); //H = versi 24 jam

    //Differensial waktu (date diff)
    $startDate = new DateTimeImmutable('2023-10-20 14:00:00');
    $startDateNow = date('Y-m-d H:i:s');
    $endDate = new DateTimeImmutable($startDateNow);
    $interval = $startDate->diff($endDate);
    echo($interval->format('%a Hari %h Jam %i Menit %s Detik')."\n");




?>