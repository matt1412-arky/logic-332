<?php
/*
OOP atau Object Oriented Programming

Procedural / functional programming adalah pemerograman yang menggunakan procedure/function untuk operasi data : sedangkan OOP adalah tentang membuat
object yang terisi keduanya yaitu data dan procedure/function

OOP punya beberapa kelebihan :
- lebih cepat dan mudah di execute
- menyediakan struktur yang jelas
- OOP tegas dalam konsep "DRY - Don't repeat yourself", ini menjadi mudah untuk dimanintain, diubah atau di debug
- OOP juga memungkinkan untuk membuat reuseable code, sedikit code dan mempercepat waktu pemrograman
 */

class Fruit
{ //nama class harus PascalCase
    public $nama;
    public $warna;
}
$jeruk = new Fruit();
$jeruk->nama = "Jeruk Bali";
$jeruk->warna = "Hijau";
$mangga = new Fruit();
$mangga->nama = "Manalagi";
$mangga->warna = "Kuning";
echo ($jeruk->nama . " " . $jeruk->warna . "\n");
echo ($mangga->nama . " " . $mangga->warna . "\n");

class cars
{
    //properties
    private $name;
    private $year;
    private $cc;
    private $valve;

    //methods
    // name setter
    public function setName($nama)
    {
        $this->name = $nama;
    }
    public function setYear($tahun)
    {
        $this->year = $tahun;
    }

    //name getter
    public function getName()
    {
        return $this->name;
    }
    public function getYear()
    {
        return $this->year;
    }
}
$volvo = new cars();
$volvo->setName("Volvo");
echo ($volvo->getName() . "\n");
$volvo->setYear("2023");
echo ($volvo->getYear() . "\n");

class hitung
{
    private $a;
    private $b;

    public function setData($x, $y)
    {
        $this->a = $x;
        $this->b = $y;
    }
    public function jumlah()
    {
        return $this->a + $this->b;
    }
    public function kali()
    {
        return $this->a + $this->b;
    }
}
$math = new hitung();
$math->setData(3, 5);
echo $math->jumlah() . "\n";

// default value dari suatu properti diddalam suatu class : constructor
// keywordnya :_construct

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
        echo ("Number : " . $this->number . "\n");
        echo ("Alamat : " . $this->address . "\n");
        echo ("City : " . $this->city . "\n");
    }

    function __destruct()
    {
        echo ("Number : $this->number, Alamat : $this->address, City : $this->city \n");
    }
}

$gadang = new House(1, "Sumatra Barat", "Padang");
$gadang->getData();
$balon = new House();
$balon->getData();
$balon->number = "2";
$balon->address = "Sumatra Utara";
$balon->city = "Siantar";
$balon->getData();

/*
INHERITANCE (pewarisan)
dalam OOP inheritance adalah konsep yang sangat penting, 
konsep ini memungkinkan kita untuk membuat herarki dimana sebuah klas baru bisa menurunkan sifat2nya ke klas lain (subclass-nya)

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
        echo ($this->nama . " Bergerak\n");
    }
    public function bersuara()
    {
        echo ("Bersuara\n");
    }
}

//class turunan dari class hewan - keyword extends
class Kucing extends Hewan
{
    //overriding -> konserp polymorpishm - bersuara() adalah method yang ada pada class hewan
    public function bersuara()
    {
        echo ($this->nama . " Kucing berusara Meowwwwww.....\n");
    }
}

class Burung extends Hewan
{
    public function bersuara()
    {
        echo ($this->nama . " Burung berusara cicicuit.....\n");
    }
}

$kucing = new Kucing("Bocil", "Ayam");
$kucing->bergerak();
$kucing->bersuara();

$burung = new Burung("Boy", "Pelet");
$burung->bergerak();
$burung->bersuara();

/*
ABSTRACTION (class abstract)
 - class abstract adalah class yang tidak bisa di instansiasi
 - class abstract berisi deklarasi method2 abstract yang akan di implementasikan oleh subclass - nya
 - class abstract adalah kerangka dasar untuk class turunannya (subclass)
 - class abstract bisa berisi local method (method biasa - bukan method abstract)
*/

abstract class Mobil1
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
        echo ("Mobil $this->merk, tahun $this->tahun");
    }
}
class Sedan extends Mobil1
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

$sedan = new Sedan("Mercedes AMG", 2023);
$sedan->info();
$sedan->start();
$sedan->stop();
