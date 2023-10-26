<?php 

    //  -   -   -   OOP -   -   -   //
    
    class Fruit{        // industry use PascalCase
        // property(s)
        public $nama;
        public $warna;
    }

    $jeruk= new Fruit();
    $jeruk->nama = "jeruk bali";
    $jeruk->warna = "hijau";
    $jeruk->nama = "jeruk nipis";

    echo($jeruk->nama . "\n");
    echo($jeruk->warna . "\n");

    $mangga = new Fruit();
    $mangga->nama = "Mana lagi";
    $mangga->warna = "kuning";
    echo($mangga->nama . "\n");
    echo($mangga->warna . "\n");

    class Cars{
    //  -   -   -   properties
        private $name;
        private $year;
        private $cc;
        private $valve;

    //  -   -   -   methods
        // setter
        public function setName($name){
            $this->name = $name;
        }
        public function setYear($year){
            $this->year = $year;
        }

        // getter
        public function getName(){
            return $this->name;
        }
        public function getYear(){
            return $this->year;
        }
    }

    $volvo = new Cars();
    $volvo->setName("volvo");
    $volvo->setYear(2000);
    echo($volvo->getName() . "\n");
    echo($volvo->getYear() . "\n");

    class calculation{
        private $a;
        private $b;

        public function setData($x, $y){
            $this->a = $x;
            $this->b = $y;
        }
        public function add(){
            return $this->a + $this->b;
        }
        public function multiply(){
            return $this->a * $this->b;
        }
    }
    $math = new calculation();
    $math->setData(3, 4);
    echo $math->add();

    //  -   -   -   Constructor and Destructor

    class House{
        public $number;
        public $address;
        public $city;

        function __construct($num = null, $addr = "", $city = ""){  //  -   -   <<-- var value need to be initiated
            $this->number = $num;
            $this->address = $addr;
            $this->city = $city;
        }       //  -   -   -   -   -   -   -   -   <<-- Construct, get initial data if declared

        public function getData(){
            echo ("number    : $this->number" . "\n");
            echo ("address   : $this->address" . "\n");
            echo ("city      : $this->city" . "\n");
            echo ("-----------------------\n");
        }

        function __destruct(){      //  -   -   -   <<-- run at the end of script or the script is stopped
            echo ("Number\t: $this->number, \nAlamat\t: $this->address, \nCity\t: $this->city \n"); 
            echo ("-----------------------\n");
        }
    }

    $gadang = new House(1, "Sumatra Barat", "Padang");
    $gadang->getData();
    $balon = new House();
    $balon->number = "2";
    $balon->address = "Sumatra Utara";
    $balon->city = "Siantar";
    $balon->getData();

    //  -   -   -   Inheritance and Polymorphism
    
    class Hewan{
        protected $nama;
        protected $makanan;

        public function __construct($nama = "", $makanan = ""){
            $this->nama = $nama;
            $this->makanan = $makanan;
        }

        public function bersuara(){
            echo ($this->nama . " bersuara : \n");
        }
    }

    class Kucing extends Hewan{     //  -   -   -   <<-- extends mean inheritance from another class
        public function bersuara(){     //  -   -   <<-- polymorphism, override function from class
            echo $this->nama . " bersuara meow...\n";
        }
    }

    class Burung extends Hewan{
        public function bersuara(){
            echo $this->nama . " bersuara cicicuit...\n";
        }
    }

    $kucing = new Kucing("Si Belang", "Ikan");
    $kucing->bersuara();
    $burung = new Burung("Boy", "Kacang");
    $burung->bersuara();

    //  -   -   -   Abstraction (filled with method used by subclass / inherited to another class)
    abstract class Mobil{
        protected $merk;
        protected $tahun;

        public function __construct($merk = "", $tahun = "")
        {
            $this->merk = $merk;
            $this->tahun = $tahun;
        }

        abstract public function start();
        abstract public function end();

        public function info(){
            echo("Mobil $this->merk, Tahun $this->tahun\n");
        }
    }

    class Sedan extends Mobil{
        public function start()
        {
            echo "Mobil $this->merk dinyalakan\n";
        }
        public function end()
        {
            echo "Mobil $this->merk dimatikan\n";
        }
    }

    $sedan = new Sedan("Mercedes AMG", "2023");
    $sedan->info();
    $sedan->start();
    $sedan->end();

?>