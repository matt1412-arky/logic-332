<?php

	function parkir($hParkir)
		{
            
            $nowTime = date("h:i:s");
            $plat = readline("Masukan Plat...");
            $inTime = readline("Masukan Jam Masuk Jam:Menit:Detik...");
            $tJam = diff($inTime,$nowTime);
                echo ("\n" . "No Plat : " . $plat . "\t");
                echo ("\t" . "Masuk = " . $inTime. "\t");
                echo ("\t" . "Keluar = " . $nowTime . "\t");
                echo ("\t" . "Total Jam = " . $tJam . "\t");
                echo ("\t" . "Total Bayar = " . $tJam * $hParkir . "\t");
            $bayar = readline("...");
                echo ("\t" . "Bayar = " . $bayar . "\t");
                echo ("\t" . "Kembalian = " . $bayar - parkir($tJam) . "\t");
        }
		
parkir(500);
?>