<?php
/*
OOP atau Object Oriented Programming

Precedural/functional programming adalah pemrograman yang menggunakan procedure/function untuk operasi
data; sedangkan OOP adalah tentang membuat object yang berisi keduanya yaitu data dan procedure/function

OOP punya beberapa kelebihan:
-lebih cepat dan mudah dieksekusi(execute)
-menyediakan struktur yang jelas 
-OOP tegas dalam konsep "DRY - Don't repeat yourself*, ini menjadi lebih mudah untuk dimaintain, diubah 
ataupun di-debug
-OOP juga memungkinkan untuk membuat reuseable code, sedikit code dan mempercepat waktu pemrograman
*/

class Fruit // nama class harus PascalCase
{
    // Properti(properties)
    public $nama;
    public $warna;
}

$jeruk = new Fruit();
$jeruk->nama = "Jeruk Bali";
$jeruk->warna = "Hijau";

echo $jeruk->nama . "\n";
echo $jeruk->warna . "\n";

$mangga = new Fruit();
$mangga->nama = "Manalagi";
$mangga->warna = "Kuning";

echo $mangga->nama . "\n";
echo $mangga->warna . "\n";

/*
class Cars
{
    // Properties
    private $name;
    private $year;
    private $cc;
    private $valve;

    // Methods
    // name setter
    public function setName($name)
    {
        $this->name = $name;
    }

    // name getter
    public function getName()
    {
        return $this->name;
    }

    // year setter
    public function setYear($year)
    {
        $this->year = $year;
    }

    // year getter
    public function getYear()
    {
        return $this->year;
    }
}

$volvo = new Cars();
$volvo->setName("Volvo");
$volvo->setYear(2000);

echo $volvo->getName() . "\n";
echo $volvo->getYear() . "\n";

$mercedes = new Cars();
$mercedes->setName("AMG");
$mercedes->setYear(2020);

echo $mercedes->getName() . "\n";
echo $mercedes->getYear() . "\n";
*/

class Hitung
{
    private $a;
    private $b;

    public function setData($x, $y)
    {
        $this->a = $x;
        $this->b = $y;
    }

    public function tambah()
    {
        return $this->a + $this->b;
    }

    public function kurang()
    {
        return $this->a - $this->b;
    }

    public function kali()
    {
        return $this->a * $this->b;
    }

    public function bagi()
    {
        return $this->a / $this->b;
    }
}

$math = new Hitung(); // instansiasi (renew suatu class)
$math->setData(3, 5);

echo $math->tambah() . "\n";
echo $math->kurang() . "\n";
echo $math->kali() . "\n";
echo $math->bagi() . "\n";

// default value dari suatu properti didalam suatu class : contructor
// keywordnya : __construct
class House
{
    public $number;
    public $address;
    public $city;

    function __construct($num = null, $addr = "", $city = "")
    {
        $this->number = $num;
        $this->address = $addr;
        $this->city = $city;
    }

    public function getData()
    {
        echo "Number : $this->number" . "\n";
        echo "Address : $this->address" . "\n";
        echo "City : $this->city" . "\n";
    }

    function __destruct()
    {
        echo ("Number : $this->number, Address : $this->address, City : $this->city \n");
    }
}

$rumahGadang = new House(1, "Sumatera Barat", "Padang");
$rumahGadang->getData();

// Data kosong dikarenakan dari contructornya berisi nilai default kosong / null
$rumahBolon = new House();
$rumahBolon->getData();

// Data sudah terisi / sudah ada
$rumahBolon->number = 2;
$rumahBolon->address = "Sumatera Utara";
$rumahBolon->city = "Siantar";
$rumahBolon->getData();

/*
INHERITANCE (Pewarisan)
dalam OOP inheritance adalah konsep yang sangat penting, konsep ini memungkinkan kita untuk membuat
hirarki dimana sebuah class baru bisa menurunkan sifat2nya ke class lain (subclass-nya) 

POLYMORPHISM
konsep OOP yang membolehkan method dengan nama yang sama 
*/

class Animal
{
    protected $nama;
    protected $makanan;

    public function __construct($nama, $makanan)
    {
        $this->nama = $nama;
        $this->makanan = $makanan;
    }

    public function bergerak()
    {
        echo $this->nama . " bergerak \n";
    }

    public function sound()
    {
        echo "Hewan bersuara \n";
    }
}

// Class turunan dari class animal - keywordnya extends
class Cat extends Animal
{
    // Overriding - konsep polymorphism - sound() adalah method yg ada di class Animal
    public function sound()
    {
        echo $this->nama . " bersura meow... \n";
    }
}

class Bird extends Animal // extends = penanda inheritance
{
    // Overriding - konsep polymorphism - sound() adalah method yg ada di class Animal
    public function sound()
    {
        echo $this->nama . " bersuara cicicuit... \n";
    }
}

$kucing = new Cat("Si Belang", "Ikan");
$kucing->bergerak();
$kucing->sound();

$burung = new Bird("Boy", "Pelet");
$burung->bergerak();
$burung->sound();

/*
ABSTRACTION (class abstract)
-class abstract adalah class yg tdk bisa di instansiasi
-class abstract berisi deklarasi method2 abstract yg akan diimplementasikan oleh subclass-nya 
-class abstract adalah kerangka dasar untuk class turunannya (subclass)
-class abstract bisa berisi local method (method biasa - bukan method abstract) 
*/

abstract class Mobil
{
    protected $merk;
    protected $tahun;

    public function __construct($merk, $tahun)
    {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    abstract public function start();
    abstract public function stop();

    public function info()
    {
        echo "Mobil $this->merk, tahun $this->tahun \n";
    }
}

class Sedan extends Mobil
{
    public function start()
    {
        echo "Mobil $this->merk dinyalakan \n";
    }

    public function stop()
    {
        echo "Mobil $this->merk dimatikan \n";
    }
}

$sedan = new Sedan("Mercedes AMG", 2003);
$sedan->info();
$sedan->start();
$sedan->stop();
