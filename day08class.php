<?php

    /* 
        OOP atau Object Oriented Programming

        Procedural/functional programming adalah pemerograman yang menggunakan
        procedure/function untuk operasi data; sedangkan OOP adalah tentang membuat
        object yang berisi keduanya yaitu data dan procedure/function
    
        OOP punya beberapa kelebihan:
        - lebih cepat dan mudah di execute
        - Menyediakan struktur yang jelas
        - OOP tegas dalam konsep "DRY - Don't repeat yourself", ini menjadi mudah untuk
            dimaintain, diubah ataupun di-debug
        - OOP juga memungkinkan untuk membuat reuseable code, sedikit code dan
            mempercepat waktu pemrograman
    */
        class Fruit { // nama class harus pascalCase
            //property(s) dalam class
            public $nama;
            public $warna;

        }
        $jeruk = new Fruit(); // instansiasi (renew suatu class)
        $jeruk ->nama ="Jeruk Bali";
        $jeruk ->warna = "Hijau";
        echo($jeruk->nama."\n");
        echo($jeruk->warna."\n");
        echo "\n";

        $mangga = new Fruit(); // instansiasi (renew suatu class)
        $mangga ->nama = "Manalagi";
        $mangga ->warna= "Kuning";
        echo($mangga->nama."\n");
        echo($mangga->warna."\n");
        echo "\n";

        class cars {
            //properties
            private $name;
            private $year;
            private $cc;
            private $valve;

            //methods
            //name setter
            public function setName($name) {
                $this->name = $name;

            }
            public function getName() {
                return $this->name;
            }
            
            public function setYears($year) {
                $this->year = $year;

            }
            public function getYears() {
                return $this->year;
            }

            public function setCC($cc) {
                $this->cc = $cc;

            }
            public function getCC() {
                return $this->cc;
            }
            
            public function setValve($valve) {
                $this->valve = $valve;

            }
            public function getValve() {
                return $this->valve;
            }
            
        }
        $volvo = new cars(); // instansiasi (renew suatu class)
        $volvo ->setName("Volvo");
        $volvo ->setYears(1998);
        $volvo ->setCC(1500);
        $volvo ->setValve(4);
        echo($volvo ->getName()."\n");
        echo($volvo ->getYears()."\n");
        echo($volvo ->getCC()."\n");
        echo($volvo ->getValve()."\n");
        echo "\n";

        $mercedes = new cars(); // instansiasi (renew suatu class)
        $mercedes ->setName("AMG");
        $mercedes ->setYears(1991);
        echo($mercedes ->getName()."\n");
        echo($mercedes ->getYears()."\n");

        echo "\n";

        class hitung {
            private $a;
            private $b;
            
            public function setData($x, $y) {
                $this -> a = $x;
                $this -> b = $y;
            }

            public function jumlah() {
                return $this -> a + $this -> b;
            }
            public function kali() {
                return $this -> a * $this -> b;
            }
        }
        $math = new hitung(); // instansiasi (renew suatu class)
        $math ->setData(3, 5);
        echo($math ->jumlah()."\n");
        echo($math ->kali(). "\n");
    
    // default value dari suatu properti didalam suatu class : constructor
    // keywordnya : __construct

        class House {

            public $number;
            public $address;
            public $city;

            function __construct($num = null, $addr = "", $city = "")
            {

                $this->number = $num;
                $this->address = $addr;
                $this->city = $city;
                
            }

            public function getData() {
                echo("Number : $this->number"."\n");
                echo("Address : $this->address"."\n");
                echo("City : $this->city"."\n");
            }

            function __destruct()
            {
                echo("Number : $this->number, Address: $this->address, City : $this->city\n");
            }
        }

        $rumahGadang = new House(1,"Sumatra Barat","Padang");
        $rumahGadang ->getData();
        echo "\n";
        $rumahBolon = new House();
        $rumahBolon->getData();
        echo "\n";
        $rumahBolon->number = "2";
        $rumahBolon->address = "Sumatra Utara";
        $rumahBolon->city = "Siantar";
        $rumahBolon->getData();
        echo "\n";
    /*
        INHERITANCE (Pewarisan)
        dalam OOP inheritance adalah konsep yang sangat penting, konsep ini memungkinkan kita untuk
        membuat hiraki dimana sebuah class baru bisa menurunkan sifat - sifat nya ke class lain (subclass-nya).

        POLYMORPHISM
        kosep OOP yang membolehkan method dengan nama yang sama 
    */
        class Hewan {
            protected $nama;
            protected $makanan;

            public function __construct($nama, $makanan)
            {
                $this->nama = $nama;
                $this->makanan = $makanan;
            }

            public function bergerak()
            {
                echo ($this->nama." bergerak\n");
            }

            public function bersuara()
            {
                echo ("Hewan bersuara\n");
            }
        }
    // class turunan dari class hewan - keyword extends
        class Kucing extends Hewan { // extends = penanda inheritance
            //overriding - konsep polymorpishm - bersuara() adalah method yang ada di class hewan
            public function bersuara() {
                echo($this->nama. " bersuara meow...\n");
            }
        }

        class Burung extends Hewan { // extends = penanda inheritance
            //overriding - konsep polymorpishm - bersuara() adalah method yang ada di class hewan
            public function bersuara() {
                echo($this->nama. " bersuara cicicuit...\n");
            }
        }

        $kucing = new Kucing("Si Belang","Ikan");
        $kucing->bergerak();
        $kucing->bersuara();
        echo "\n";
        $burung = new Burung("Boy", "Pelet");
        $burung->bergerak();
        $burung->bersuara();
        echo "\n";

    /*
        ABSTRACTION (class abstract)
        - class abstract adalah class yang tidak bisa di instansiasi
        - class abstract berisi deklarasi method - method abstract yang akan diimplementasikan oleh subclass-nya
        - class abstract adalah kerangka dasar untuk class turunannya (subclass)
        - class abstract bisa berisi local method (method biasa - bukan method abstract)

    */
        abstract class Mobil {
            protected $merk;
            protected $tahun;

            public function __construct($merk, $tahun)
            {
                $this->merk = $merk;
                $this->tahun = $tahun;
            }

            abstract public function start();
            abstract public function stop();

            public function info () {
                echo("Mobil $this->merk, Tahun $this->tahun\n");
            }
        }
        
        class Sedan extends Mobil {
            public function start()
            {
                echo("Mobil $this->merk dinyalakan\n");
            }
            public function stop()
            {
                echo("Mobil $this->merk dimatikan\n");
            }
        }

        $sedan = new Sedan("Mercedes AMG", 2003);
        $sedan->info();
        $sedan->start();
        $sedan->stop();
        
?>