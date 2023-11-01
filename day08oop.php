<?php 
// class = property dan method(seperti function atau prosedural)
// class seperti sebuah lahan untuk membuat suatu objek yang mana nantinya dapat dipanggil berulang
// didalam class dapat diisi beberapa objek

/* OOP Object Oriented Programming

procedural/function programming adalah pemrograman yang menggunakan procedure/function untuk operasi
data;sedangkan OOP untuk membuat objek yang berisi keduanya yaitu data dan procedural/functional.

Kelebihan OOP:
- lebih cepat dan mudah di execute
- menyediakan struktur yang jelas
- OOP tegas dalam konsep "DRY - Dont repeat yourself", ini menjadi mudah untuk dimaintenance, diubah ataupun didebug.
- OOP juga memungkinkan untuk membuat reusable code, sedikit code dan mempercepat waktu pemrograman
*/


class Vegetable {
    public $nama;
    public $warna;
    public $for;
}
$tomat = new Vegetable();
$tomat ->nama = "Tomat Merah";
$tomat ->warna = "Merah";
$tomat ->for = "untuk membuat sop";

echo "\n";
echo $tomat->nama;
echo "\n";
echo $tomat->warna;
echo "\n";
echo $tomat->for;
echo "\n";
echo "\n";



class Rokok {
    //properties
    private $name;
    private $batang;
    private $harga;

    //method
    //name setter
    public function setName($name){
        $this->name = $name;
    }
    //name getter
    public function getName(){
        return $this->name;
    }

    //batang setter
    public function setBatang($batang){
        $this->batang = $batang;
    }
    //batang getter
    public function getbatang(){
        return $this->batang;
    }

    //harga setter
    public function setHarga($harga){
        $this->harga = $harga;
    }
    //harga getter
    public function getHarga(){
        return $this->harga;
    }
}
$garpit = new Rokok();
$garpit -> setName("Gudang Garam International"); 
$garpit -> setBatang("12 Btg");
$garpit -> setHarga(20000);

echo ($garpit->getName()."\n");
echo ($garpit->getBatang()."\n");
echo ($garpit->getHarga()."\n");
echo "\n";
echo "\n";


$juara = new Rokok();
$juara -> setName("Juara Kretek"); 
$juara -> setBatang("12 Btg");
$juara -> setHarga(14000);

echo ($juara->getName()."\n");
echo ($juara->getBatang()."\n");
echo ($juara->getHarga()."\n");
echo "\n";
echo "\n";


class Hitung{
    private $a;
    private $b;

    public function setnum($a,$b){
        $this->a = $a;
        $this->b = $b;
    }
    public function sum(){
        return $this->a + $this->b;
    }
    public function kali(){
        return $this->a * $this->b;
    }
}

$num1 = new Hitung();
$num1 ->setnum(2,3);
echo ($num1->sum()."\n");
echo ($num1->kali()."\n");
echo "\n";
echo "\n";


?>