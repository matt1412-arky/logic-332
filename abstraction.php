<?php 

/* 
ABSTRACTION (class abstract)
- class abstract adalah class yang tidak bisa di instansiasi
- class abstract berisi deklarasi methode-metode abstract yang akan diimplementasikan oleh subclass nya
- class abstract adalah kerangka dasar untuk class turunannya (subclass)
- subclass sendiri dapat berisi lokal method (dapat membuat method yg tidak abstrak / method biasa - bukan method abstract)
*/

abstract class Mobil{
    protected $merk;
    protected $tahun;

    public function __construct($merk, $tahun){
        $this->merk = $merk;
        $this->tahun = $tahun;
    }
    abstract public function start();
    abstract public function stop();
    public function info(){
        echo("Mobil $this->merk, tahun $this->tahun \n");
    }
}

class Sedan extends Mobil{
    public function start(){
        echo("Mobil $this->merk dinyalakan \n");
    }
    public function stop(){
        echo("Mobil $this->merk dimatikan \n");
    }
}

$sedan = new Sedan("Mercendes AMG", 2003);
$sedan->info();
$sedan ->start();
$sedan ->stop();

?>