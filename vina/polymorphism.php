<?php
/*
POLIMORPHISM    
konsep oop yang membolehkan method dengan nama yang sama */


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
class kucing extends Hewan{
    //overriding = konsep polymorphism - bersuara () adalah metode yang ada di class hewan
    public function bersuara(){
        echo($this->nama . " bersuara meawww....");
    }
}

class burung extends Hewan{ 
    //overriding = konsep polymorphism - bersuara () adalah metode yang ada di class hewan
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