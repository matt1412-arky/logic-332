<?php
    echo ("Nilai Pi Asli : ").pi()."\n";
    //bulatkan nilai pi
    echo ("Nilai Pi yang dibulatkan : ").number_format((float) pi(), 2, ".")."\n";
    echo ("Nilai Pi yang dibulatkan : ").round(pi(), 2)."\n";

    echo("Nilai Minimal : ".min(0, 150, 30, 20, -8, -200))."\n";  // menghitung nilai minimal
    echo("Nilai Maximal : ".max(0, 150, 30, 20, -8, -200))."\n";  // menghitung nilai maximal

    echo("Nilai Absolut : ".abs(-6.7))."\n";  // returns 6.7
    echo("Nilai Bulat : ".round(0.60))."\n";  // membulatkan hasil nilai

    echo("Nilai Acak : ".rand(0, 10))."\n"; // menghitung nilai acak

?>