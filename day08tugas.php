<?php 

abstract class Vehicle
{
    protected $nama;
    
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    abstract public function bergerak();
}

class Car extends Vehicle
{
    public function bergerak()
    {
        echo ("Mobil $this->nama bergerak dengan kecepatan tinggi \n");
    }
}

class Motorcycle extends Vehicle
{
    public function bergerak()
    {
        echo ("Motor $this->nama bergerak dengan kecepatan sedang \n");
    }
}
$car = new Car ("BMW");
$car->bergerak();
$motorcycle = new Motorcycle ("R15");
$motorcycle->bergerak();




?>