<?php
    /*
      Tugas
      Buatlah inheritance keals yang mencakup tiga tingkatan yaitu Kendaraan, Mobil, dan Motor.
      Kelas Kendaraan adalah kelas abstrak dengan properti abstrak nama dan metode abstrak bergerak().
      Kelas Mobil dan Motor adalah kelas turunan dari Kendaraan. Di dalam kelas Mobil,
      Anda haru mengimplementasikan metode bergerak() yang mencetak
      "Mobil bergerak dengan kecepatan tinggi".
      sedangkan di dalam kelas Motor, Anda harus mengimplementasikan metode bergerak()
      yang mencetak "Motor bergerak dengan kecepatan sedang."

      Kemudian, buatlah sebuah objek Mobil dan sebuah objek Motor,
      lalu tampilkan hasil pemanggilan metode bergerak() pada keduanya.
     */
        abstract class Vehical {
            protected $nama;

            abstract public function bergerak();
            
            public function __construct($nama)
            {
              $this ->nama =$nama; 
            }
        }
        
        class carss extends Vehical 
        {
          public function bergerak()
          {
            echo "$this->nama bergerak dengan kecepatan tinggi\n";
          }
        }

        class Motorcycle extends Vehical
        {
          public function bergerak()
          {
            echo "$this->nama bergerak dengan kecepatan sedang\n";
          }
        }

        $mitsubishi= new carss ("Mitsubishi EVO IX");
        $pcx = new Motorcycle ("PCX 160");
        
        $mitsubishi->bergerak();
        $pcx->bergerak();


?>     