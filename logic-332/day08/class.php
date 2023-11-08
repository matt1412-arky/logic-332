<?php

    /*
    OOP atau Object Oriented Programming
    Procedural/functional programming adalah programan yang menggunakan procedure/function untuk operasi data,
    sedangkan OOP adalah tentang membuat object yang berisi keduanya yaitu data dan procedure/function

    OOP punya beberapa kelebihan:
    - lebih cepat dan mudah di execute
    - menyediakan struktur yg jelas
    - OOP tegas dalam konsep "DRY - Don't Repeat Yourself", ini menjadi mudah untuk dimaintain, diubah ataupun
      di-debug
    - OOP juga memungkinkan untuk membuat reuseable code, sedikit code dan mempercepat waktu pemrograman
    */

    // tanda -> untuk pointer 

    class Fruit {   // nama class harus PascalCase
        // property(s)
        public $nama;
        public $warna;
    }

    $jeruk = new Fruit();   // instansiasi (re-new suatu class)
    $jeruk->nama = "Jeruk Bali";
    $jeruk->warna = "Hijau";
    echo($jeruk->nama."\n");
    echo($jeruk->warna."\n");
    
    $mangga = new Fruit();  // instansiasi (re-new suatu class)
    $mangga->nama = "Manalagi";
    $mangga->warna = "Kuning";
    echo($mangga->nama."\n");
    echo($mangga->warna."\n");

    class cars {
        private $name;
        private $year;
        private $cc;
        private $valve;

        //  methods
        //  name setter
        public function setName($nama) {
            $this->name = $nama;
        }
        //  name getter
        public function getName() {
            return $this->name;
        }

        //  year setter
        public function setYear($nama) {
            $this->year = $nama;
        }
        //  year getter
        public function getYear() {
            return $this->year;
        }
    }

    $volvo = new cars();    // instansiasi (re-new suatu class)
    $volvo->setName("Volvo");
    echo($volvo->getName()."\n");
    $volvo->setYear(2000);
    echo($volvo->getYear()."\n");

    $mercedes = new cars(); // instansiasi (re-new suatu class)
    $mercedes->setName("AMG");
    echo($mercedes->getName()."\n");
    $mercedes->setYear(2020);
    echo($mercedes->getYear()."\n");

    class hitung {
        private $a;
        private $b;

        public function setData($x, $y) {
            $this->a = $x;
            $this->b = $y;
        }

        public function jumlah() {
            return $this->a + $this->b;
        }

        public function kali() {
            return $this->a * $this->b;
        }

    }

    $math = new hitung();   // instansiasi (re-new suatu class)
    $math->setData(3, 5);
    echo($math->jumlah()."\n");
    echo($math->kali()."\n");


    /*
    default value dari suatu properti didalam suatu class : constructor
    keywordnya : __construct
    */

    class House {
        public $number;
        public $address;
        public $city;

        function __construct($num = null, $addr = "", $city = "") {
            $this->number = $num;
            $this->address = $addr;
            $this->city = $city;

        }

        public function getData() {
            echo("Number : $this->number"."\n");
            echo("Address : $this->address"."\n");
            echo("City : $this->city"."\n");
        }

        // function __destruct() {
        //     echo("Number : $this->number, Address : $this->address, City : $this->city\n");
        // }
    }

    $rumahGadang = new House(1, "Sumatera Barat", "Padang");
    $rumahGadang->getData();

    $rumahBolon = new House();
    $rumahBolon->getData();
    $rumahBolon->number = 2;
    $rumahBolon->address = "Sumatera Utara";
    $rumahBolon->city = "Siantar";
    $rumahBolon->getData();

    $rumahBetawi = new House(3, "Jakarta Timur", "DKI Jakarta");
    $rumahBetawi->getData();


    /*
    INHERITANCE (Pewarisan)
    Dalam OOP inheritance adalah konsep yang sangat penting, konsep ini memungkinkan kita untuk membuat
    hirarki dimana sebuah class baru bisa menurunkan sifat2nya ke class lain (subclass-nya).

    POLYMORPHISM
    Konsep OOP yang membolehkan method dengan nama yang sama
    */

    class Hewan {
        protected $nama;
        protected $makanan;

        public function __construct($nama, $makanan) {
            $this->nama = $nama;
            $this->makanan = $makanan;
        }

        public function bergerak() {
            echo ($this->nama . " Bergerak\n");
        }
        
        public function bersuara() {
            echo (" Hewan Bersuara\n");
        }
    }

    //class turunan dari class hewan - keywordnya extends
    class Kucing extends Hewan {    //extends = penanda inheritance
        //overriding - konsep polymorphism - bersuara() adalah method yang ada di class Hewan
        public function bersuara() {
            echo($this->nama . " Kucing Bersuara Meow...\n");
        }
    }

    class Burung extends Hewan {    //extends = penanda inheritance
        //overriding - konsep polymorphism - bersuara() adalah method yang ada di class Hewan
        public function bersuara() {
            echo($this->nama . " Burung Bersuara Cukurukuk...\n");
        }
    }

    $kucing = new Kucing("Si Putih", "Ikan");
    $kucing->bergerak();
    $kucing->bersuara();
    
    $burung = new Burung("Perkutut", "Pelet");
    $burung->bergerak();
    $burung->bersuara();


    /*
    ABSTRACTION (class abstract)
    - class abstract adalah class yang tidak bisa di intansiasi
    - class abstract berisi deklarasi method2 abstract yang akan di implementasikan oleh subclass-nya
    - class abstract adalah kerangka dasar untuk class turunannya (subclass)
    - class abstract bisa berisi local method (method biasa - bukan method abstract)
    */

    abstract class Mobil {
        protected $merk;
        protected $tahun;

        public function __construct($merk, $tahun) {
            $this->merk = $merk;
            $this->tahun = $tahun;
        }

        abstract public function start();
        abstract public function stop();

        public function info() {
            echo("Mobil $this->merk, Tahun $this->tahun \n");
        }
    }

    class Sedan extends Mobil {
        public function start() {
            echo("Mobil $this->merk dinyalakan\n");
        }
        
        public function stop() {
            echo("Mobil $this->merk dimatikan\n");            
        }
    }

    $sedan = new Sedan("Mercedes AMG", 2003);
    $sedan->info();
    $sedan->start();
    $sedan->stop();
?>