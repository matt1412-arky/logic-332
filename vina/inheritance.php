<?php

/*  
INHERITANCE (Pewarisan)
dalam oop inheritance adalah konsep yang sangat penting, konsep ini memungkinkan kita untuk membuat hierarki dimana sebuah kelas baru 
bisa menurunkan sifat-sifatnya ke kelas lain (sub-classnya)
*/

class Hewan{
    protected $nama;            // bertujuan agar bisa digunakan kelas sendiri dan turunan nya
    protected $makanan;

    public function __construct($nama, $makanan){
        $this->nama = $nama;
        $this->makanan = $makanan;
    }

    public function bergerak(){
        echo($this->nama . " bergerak \n");
    }
}
//class turunan dari class hewan - keywords extends
class kucing extends Hewan{  //extend penanda inheritance
    public function bersuara(){
        echo($this->nama . " bersuara meawww....");
    }
}

class burung extends Hewan{
    public function bersuara(){
        echo($this->nama . " bersuara cicicuit....");
    }
}

$kucing = new kucing("Si belang","Ikan");
$kucing->bergerak();
$kucing->bersuara();

$burung = new burung("Si elang","pelet");
$burung->bergerak();
$burung->bersuara();






?>