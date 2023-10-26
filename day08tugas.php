<?php
/*
Buatlah inheritance kelas yang mencakup tiga tingkatan yaitu Kendaraan, Mobil, dan Motor. 
Kelas Kendaraan adalah kelas abstrak dengan properti abstrak nama dan metode abstrak bergerak(). 
Kelas Mobil dan Motor adalah kelas turunan dari Kendaraan. Di dalam kelas Mobil, 
Anda harus mengimplementasikan metode bergerak() yang mencetak 
"Mobil bergerak dengan kecepatan tinggi," 
sedangkan di dalam kelas Motor, Anda harus mengimplementasikan metode bergerak() 
yang mencetak "Motor bergerak dengan kecepatan sedang."

Kemudian, buatlah sebuah objek Mobil dan sebuah objek Motor, 
lalu tampilkan hasil pemanggilan metode bergerak() pada keduanya. 
*/

abstract class Vehicle
{
    protected $nama;

    abstract public function bergerak();

    public function __construct($nama)
    {
        $this->nama = $nama;
    }
}

class Cars extends Vehicle
{
    public function bergerak()
    {
        echo "$this->nama bergerak dengan kecepatan tinggi \n";
    }
}

class Motorcyle extends Vehicle
{
    public function bergerak()
    {
        echo "$this->nama bergerak dengan kecepatan sedang \n";
    }
}

$bmw = new Cars("BMW");
$vario = new Motorcyle("Vario");

$bmw->bergerak();
$vario->bergerak();
