<?php

/*
bila x = 7
1   3   5   7   9   11  13
13  11  9   7   5   3   1 

bila x = 11
1   3   5   7   9   11  13  15  17  19  21
21  19  17  15  13  11  9   7   5   3   1
*/

function newArr($x){
    $newArr =[];
    $newArrTwo =[];
    $num = 1;
        for ($i=0; $i<$x; $i++){
            $newArr[$i] = $num;
            $num+=2;
        }
            $str = implode(" ", $newArr);
            $newArrTwo = array_reverse($newArr);
            $strTwo = implode(" ", $newArrTwo);
 
    return $str . "\n" . $strTwo;
}

echo newArr(7);
echo "\n";
echo newArr(11);
echo "\n";
echo "\n";


/* ada berapa lembar kertas A6 yang bisa disatukan untuk membuat selembar kertas berukuran A x */

function aSix($luasA){
    $aSix = 6; //Luas
    $result = 0;
    for ($i=0; $i<$luasA; $i+=$aSix){
    $result+=1;
    }
    return $result;
}

echo aSix(24);
echo "\n";
echo aSix(7);
echo "\n";
echo "\n";


/*
Buat lah fungsi untuk kalkulasi tarif parkir berdasarkan ketentuan berikut; ketentuan tarif :
1. Delapan jam pertama : 1.000/jam
2. Lebih dari 8 jam s.d 24 jam : 8.000 flat
3. Lebih dari 24 jam : 15.000/24 jam dan selebihnya mengikuti ketentuan pertama dan kedua

Input : - Tanggal dan jam masuk
        - Tanggal dan jam keluar
Output :    Besarnya tarif parkir

contoh 
Input  : - Masuk : 28 Januari 2020 07:30:34
         - Keluar : 28 Januari 2020 20:03:35
Output : 8.000

Penjelasan : Lama parkir adalah 12 jam 33 menit 1 detik, sehingga perhitungan tarif parkir dibulatkan menjadi 13 jam. 
Mengacu pada ketentuan kedua, maka yang harus dibayarkan adalah 8000 rupiah.
*/

function Parkir($masuk,$keluar){
    $in  = new DateTime($masuk);
    $out = new DateTime($keluar); 
    $time  = $in->diff($out);   
    $pay=0;
    if ($time->i >= 30){
        $h=$time->h+1;
    }
    if ($time->d > 0){
        $d=($time->d*24);
        $h+=$d;
            if($h-$d < 8){
                $pay = ((($h-$d) * 1000) + ($d/24 * 15000));
            }
            else if(8 <= ($h-$d) || ($h-$d) >= 24){
                $pay = (8000 + ($d/24 * 15000));
            }
    }
    else{ 
        if($time->h < 8){
        $pay = $time->h * 1000;
        }
        else if(8 <= $time->h || $time->h >= 24){
        $pay = 8000;
        }
    }
    return $pay;
}

echo Parkir("28 January 2020 00:00:00","31 January 2020 09:33:00");
echo "\n";
echo "\n";


/* 
Tiap 1 orang dewasa laki-laki memakan 2 piring nasi goreng, 1 orang dewasa perempuan memakan 1 piring mie goreng,
2 remaja memakan 2 mangkok mie ayam, 1 orang anak-anak memakan 1/2 piring nasi goreng, 1 orang balita memakan 1 mangkok kecil bubur sehat.
Berapa total porsi makanan yang dimakan?
Constrait : 
    - Jika total yang sedang dimakan jumlahnya ganjil lebih dari 5 orang maka tiap orang dewasa perempuan tambah 1 piring nasi goreng.
    - Inputan bisa acak (misalnya : laki-laki dewasa 3, balita 2, laki-laki dewasa 2, balita 2, perempuan dewasa 3)

Contoh : 
Input : Laki-laki dewasa = 3 orang; Perempuan dewasa = 1 orang; Balita = 1 orang; Laki-laki dewasa = 1 orang
Output : 10 porsi
*/

class Porsi{
    protected $nasGor=0,$miGor=0,$miAy=0,$burSe=0;

    public function __construct($man, $woman, $young, $child, $baby){
        $this->nasGor = ($man*2)+($child*1/2);
        $this->miGor = $woman;
        $this->miAy = $young;
        $this->burSe = $baby;
    }

    public function Cetak(){
        $tPorsi = $this->nasGor+$this->miGor+$this->miAy+$this->burSe;
        if ($tPorsi % 2 != 0 && $tPorsi>5){
            $this->nasGor += $this->miGor;
            $tPorsi = $this->nasGor+$this->miGor+$this->miAy+$this->burSe;
        }
        else {
            $tPorsi = $this->nasGor+$this->miGor+$this->miAy+$this->burSe;
        }
        echo $tPorsi . " Porsi";
    }
}

$porsi1 = new Porsi(3,1,2,0,1);
$porsi1 -> Cetak();
echo "\n";
echo "\n";


/* 
Jika 1 botol = 2 gelas, 1 teko = 25 cangkir, 1 gelas = 2,5 cangkir.  Buatlah sistem konversi volume berdasarkan data diatas.
Contoh : 1 botol = ... cangkir? 
         1 botol = 5 cangkir 
*/
echo "Daftar Objek : Botol, Gelas, Teko, Cangkir \n";
function Konversi($objek1, $vol1, $objek2){
    $botol=0;
    $gelas=0;
    $teko=0;
    $cangkir=0;
    $objek2=$objek2;
    switch ($objek1){
    case "Botol": 
        $botol+=$vol1;
        $gelas=$botol*2;
        $teko=$botol*5/25;
        $cangkir=$botol*2*2.5;
        echo "$botol Botol = ";
        break;
    case "Gelas": 
        $gelas+=$vol1;
        $botol=$gelas/2;
        $teko=$gelas*2.5/25;
        $cangkir=$gelas*2.5;
        echo "$gelas Gelas = ";
        break;
    case "Teko": 
        $teko+=$vol1;
        $gelas=$teko/25*2.5;
        $botol=$teko*25*2.5/2;
        $cangkir=$teko/25;
        echo "$teko Teko = ";
        break;
    case "Cangkir": 
        $cangkir+=$vol1;
        $gelas=$cangkir/2.5;
        $teko=$cangkir/25;
        $botol=$cangkir/2.5/2;
        echo "$cangkir Cangkir = ";
        break;
    default:
        echo "Objek 1 idak bisa dikonversi, periksa objek konversi 1";
        break;
    }
    switch ($objek2){
    case "Gelas":
        echo "$gelas Gelas";
    break;
    case "Botol":
    echo "$botol Botol";
    case "Teko":
        echo "$teko Teko";
    break;
    case "Cangkir":
        echo "$cangkir Cangkir";
    break;
    default:
        echo "Objek 2 idak bisa dikonversi, periksa objek konversi 2";
    }
}

echo Konversi("Botol", 2 , "Gelas");
echo "\n";
echo Konversi("Botol", 2 , "Teko");
echo "\n";
echo Konversi("Botol", 2 , "Cangkir");
echo "\n";
echo "\n";


/* 
Berikut ini adalah recor penjualan buah dalam bentuk string
Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, jeruk:8; 

buat summary penjualan
input : string record penjualan
output : summary penjualan, dalam alphabetical order
Apel : 9 
Jeruk : 9
Mangga : 1
Pisang : 3
*/

function SumPen($data){
    $str1=str_replace(" ","",$data);
    $str2=str_replace(":",",",$str1);
    $arrStr = explode(",",$str2);
    $arrSum =array();
    $a=0;
    for ($i=0; $i<count($arrStr)/2; $i++){
        for ($j=0; $j<2; $j++){
        $arrSum[$i][$j]=$arrStr[$a];
        $a+=1;
    }
    }
    print_r($arrSum);
    
}

echo SumPen("Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, jeruk:8");
?>