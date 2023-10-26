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
abstract class Kendaraan
{
    protected $name;

    public function __construct($nama = "")
    {
        $this->name = $nama;
    }

    abstract public function bergerak();
}

class Mobil extends Kendaraan
{
    public function bergerak()
    {
        echo "Mobil " . $this->name . " bergerak dengan kecepatan tinggi.\n";
    }
}

class Motor extends Kendaraan
{
    public function bergerak()
    {
        echo "Motor " . $this->name . " bergerak dengan kecepatan sedang.\n";
    }
}

$mobil = new Mobil("Sedan");
$mobil->bergerak();
$motor = new Motor("Klasik");
$motor->bergerak();


?>