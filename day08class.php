<?php 

/* 
OOP atau Object Oriented Programming

Procedural/functional programming adalah pemograman yang menggunakan procedure/function
untuk operasi data; sedangkan OOP adalah tentang membuat object yang berisi keduanya yaitu data 
dan procedure/function 

OOP punya beberapa kelebihan :
- lebih cepat dan mudah di execute
- menyediakan struktur yang jelas
- OOP tegas dalam konsep "DRY - Don't repeat yourself", ini menjadi mudah untuk dimaintain, 
  diubah ataupun di-debug
- OOP juga memungkinkan untuk membuat reuseable code, sedikit code dan mempercepat waktu pemograman

*/

class Fruit //nama class harus PascalCase
{
    //property(s)
    public $nama;
    public $warna;
}

$jeruk = new Fruit();
$jeruk->nama = "Jeruk Bali";  // -> = pointer
$jeruk->warna = "Hijau";
echo ($jeruk->nama. "\n");
echo ($jeruk->warna. "\n");

$mangga = new Fruit();
$mangga->nama = "Manalagi";
$mangga->warna = "Kuning";
echo ($mangga->nama. "\n");
echo ($mangga->warna. "\n");


class Cars
{
    //properties
    private $name;
    private $year;
    private $cc;
    private $valve;

    //methods name
    // -name setter
    public function setName($name){
        $this->name = $name;
    }
    // -name getter
    public function getName(){
        return $this->name;
    }

    //methods year
    // -year setter
    public function setyear($year){
        $this->year = $year;
    }
    // -year getter
    public function getyear(){
        return $this->year;
    }

    //methods cc
    // -cc setter
    public function setcc($cc){
        $this->cc = $cc;
    }
    // -cc getter
    public function getcc(){
        return $this->cc;
    }

    //methods valve
    // -valve setter
    public function setvalve($valve){
        $this->valve = $valve;
    }
    // -valve getter
    public function getvalve(){
        return $this->valve;
    }
}

$volvo = new Cars();
$volvo->setName("Volvo");
echo($volvo->getName(). "\n");
$volvo->setyear(2000);
echo($volvo->getyear(). "\n");

$mercedes = new Cars();
$mercedes->setName("AMG");
echo($mercedes->getName(). "\n"); //AMG
$mercedes->setyear(2020);
echo($mercedes->getyear(). "\n"); //2020

class Hitung {
    private $a;
    private $b;
    public $hasil;

    public function setData($x,$y)
    {
        $this->a = $x;
        $this->b = $y;
    }
    
    public function sum()
    {
        return $this->a + $this->b;
    }
    
    public function kali()
    {
        return $this->a * $this->b;
    }
}

$math = new Hitung(); //instansiasi (renew suatu class)
$math->setData(3, 5);
echo ($math->sum()."\n");
echo ($math->kali()."\n");


//default value dari suatu properti didalam suatu class : constructor
//keywordnya : __construct 

class Houses {
    public $number;
    public $address;
    public $city;

    function __construct($num=null, $addr="", $city="")
    {
        $this->number = $num;
        $this->address = $addr;
        $this->city = $city;
    }

    public function getData()
    {
        echo("Number : $this->number"."\n");
        echo("Address : $this->address"."\n");
        echo("City : $this->city"."\n");
    }

    function __destruct()
    {
        echo ("Number : $this->number, address : $this->address, city : $this->city \n");
    }
}

$rumahGadang = new Houses(1, "Sumatera Barat", "Padang");
$rumahGadang->getData();
$rumahBolon = new Houses();
$rumahBolon->getData();
$rumahBolon->number=2;
$rumahBolon->address="Sumatera Utara";
$rumahBolon->city="Siantar";
$rumahBolon->getData();


/*
INHERITANCE (Pewarisan)
dalam OOP inheritance adalah konsep yang sangat penting, konsep ini memungkinkan kita untuk
membuat hirarki dimana sebuah klas baru bisa menurunkan sifat2nya ke klas lain (subclass-nya).

POLYMORPHISM
konsep OOP yang membolehkan method dengan nama yang sama
*/
class Hewan 
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
        echo($this->nama ." bergerak \n");
    }
    
    public function bersuara()
    {
        echo($this->nama ." bergerak \n");
    }
}

//class turunan dari class Hewan - keyword extends
class Kucing extends Hewan // extends = penanda inheritance
{
    //overriding - konsep polymorpishm - bersuara() adalah method yg ada di class Hewan
    public function bersuara()
    {
        echo($this->nama . " Kucing bersuara meow...\n");
    }
}

class Burung extends Hewan // extends = penanda inheritance
{
    //overriding - konsep polymorpishm - bersuara() adalah method yg ada di class Hewan
    public function bersuara()
    {
        echo($this->nama . " Kucing bersuara ciciciut...\n");
    }
}

$kucing = new Kucing("Si Belang", "Ikan");
$kucing->bergerak();
$kucing->bersuara();

$burung = new Burung("Boy","Pelet");
$burung->bergerak();
$burung->bersuara();

/*
ABSTRACTION (class abstract)
- class abstract adalah class yang tidak bisa di instansiasi
- class abstract berisi deklarasi method2 abstract yg akan diimplementasikan oleh subclass-nya
- class abstract adalah kerangka dasar untuk class turunannya (subclass)
- class abstract bisa berisi lokal method (method biasa - bukan method abstract)
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
        echo ("Mobil $this->merk, tahun $this->tahun\n");
    }
}

class Sedan extends Mobil
{
    public function start()
    {
        echo ("Mobil $this->merk dinyalakan \n");
    }

    public function stop()
    {
        echo ("Mobil $this->merk dimatikan \n");
    }
}

$sedan = new Sedan ("Mercedes AMG", 2023);
$sedan->info();
$sedan->start();
$sedan->stop();

?>