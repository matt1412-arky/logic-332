<?php

/* OOP atau objek oriented program

procedural/ functional programming adalah pemograman yang menggunakan procedure atau function
untuk operasi data; sedangkan oop adalah membuat objek yang berisi keduanya yaitu data dan prosedur/function

oop mempunyai kelebihan :
- lebih cepat dan mudah di execute
- menyediakan struktur yang jelas
- oop tegas dalam konsep "DRY - Dont repeat yourself".  ini menjadi mudah untuk di maintain, diubah ataupun di debug
- OOP juga memungkinkan untuk membuat reuseable code, sedikit code dan mempercepat waktu pemograman

*/

class Fruit{            // nama class harus pascal case yaitu besar di awal kara
    // $nama dan $warna adalah properties
    public $nama;
    public $warna;
}

$jeruk = new Fruit();  // new menyatakan reuseable
$jeruk->nama = "Jeruk Bali";
$jeruk->warna = "Hijau";
echo($jeruk->nama."\n");
echo($jeruk->warna."\n");

// -> berfungsi pointer atau penunjuk dari anggota dari class; seperti properti atau method2

$mangga = new Fruit();  // new menyatakan reuseable
$mangga->nama = "Mangga Madu";
$mangga->warna = "Orange";
echo($mangga->nama."\n");
echo($mangga->warna."\n");

//objek nya adalah jeruk dan mangga
// class Fruit
// properties : nama, warna

class cars{
    //properties
    private $name;  //ptivate hanya bisa dilakukan di class itu sendiri
    private $year;
    private $cc;
    private $value; 

    //function digunakan untuk getter and setter data
    //METHODs

    // name setter 
    public function setName($name){
        $this->name = $name;
    }
    //name getter
    public function getName(){
        return $this->name;
    }
    //setiap properties memiliki satu setter dan satu getter

    //year setter
    public function setYear($year){
        $this->year = $year;
    }
    //yeargetter
    public function getYear(){
        return $this->year;
    }
}


$volvo = new cars();
$volvo-> setName("Volvo");
echo($volvo->getName()."\n");    
$volvo-> setYear(2000);
echo($volvo->getYear()."\n");    
echo "\n";

$mercendes = new cars();
$mercendes-> setName("mercendes");
echo($mercendes->getName()."\n");    
$mercendes-> setYear(2009);
echo($mercendes->getYear()."\n");    
echo "\n";

class hitung{
    private $a;
    private $b;

    public function setData($x, $y){
        $this->a = $x;
        $this->b = $y;
    }
    public function jumlah(){
        return $this->a + $this->b;
    }
    public function kali(){
        return $this->a * $this->b;
    }
}

$math = new hitung();           // instansiasi (renew suatu class)
$math->setData(3,5);
echo($math->jumlah()."\n");
echo($math->kali()."\n");

// publik dapat diakses semua class
// class adalah blue print dari objek 
// gambaran objek adalah seperti 

// default value dari suatu properti didalam suatu class : constructor
// keyword : __construct

class House{
    public $name;
    public $address;
    public $city;

    function __construct($num = null, $addr = "", $city = ""){ // dapat diisi parameter atau tidak
        $this->number = $num;
        $this->address = $addr;
        $this->city = $city;
    }

    public function getData(){
        echo("Number : $this->number"."\n");
        echo("Address : $this->address"."\n");
        echo("City : $this->city"."\n");

    }

    function __destruct(){
        echo("Number : $this->number, address : $this->address, city : $this->city \n");
    }
}

$rumahGadang = new House(1,"Sumatera Barat","Padang");
$rumahGadang->getData();

$rumahBolon = new House();  //bisa diisi null value namun pada function construt harus diisi parameternya
$rumahBolon->getData();
echo("\n");
$rumahBolon->number = "2";
$rumahBolon->address = "Sumatera Utara";
$rumahBolon->city = "Siantar";
$rumahBolon->getData();


?>