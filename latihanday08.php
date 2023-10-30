<?php

/* TUGAS =DAY8 
buatlah inheritance kelas yang mencakup tiga tingkatan yaitu kendaraan, mobil dan motor. v
kelas kendaraan adalah kelas abstrak dengan properti abstrak nama dan metode abstrak bergerak().v
kelas mobil dan motor adalah kelas turunan dari kendaraan.  
Didalam kelas mobil, anda harus mengimplementasikan metode Bergerak() yang mencetak "Mobil bergerak dengan kecepatan tinggi." v
sedangkan di dalam kelas motor, anda harus mengimplementasikan metode bergerak() yang mencetak "Motor Bergerak dengan kecepatan sedang." v

kemudia buatlah sebuah objek mobil dan sebuah objek motor.
lalu tampilkan hasil pemanggilan metode bergerak keduanya.
*/

abstract class Kendaraan {
    protected $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }
    abstract public function bergerak();
}


class Mobil extends Kendaraan {
    public function bergerak() {
        echo " $this->nama bergerak dengan kecepatan tinggi \n";
    }
}

class Motor extends Kendaraan {
    public function bergerak() {
        echo "$this->nama bergerak dengan kecepatan sedang \n";
    }
}

// Membuat objek Mobil dan Motor
$volvo = new Mobil("volvo");
$yamaha = new Motor("yamaha");

// Memanggil metode bergerak untuk objek Mobil
$volvo->bergerak();

// Memanggil metode bergerak untuk objek Motor
$yamaha->bergerak();


?>