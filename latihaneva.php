<?php

/*
bila x = 7
1   3   5   7   9   11  13
13  11  9   7   5   3   1 

bila x = 11
1   3   5   7   9   11  13  15  17  19  21
21  19  17  15  13  11  9   7   5   3   1
*/

$x = 11;

function latihan2($x){
    for($i = 1; $i <= ($x*2); $i += 2){
        echo $i . " ";
    }

    echo "\n";

    for ($i = ($x*2)-1; $i >= 1; $i -= 2) {
        echo $i . " ";
    } 
}

echo latihan2($x);
echo "\n";
echo "=================================================";
echo "\n";
/* ada berapa lembar kertas A6 yang bisa disatukan untuk membuat selembar kertas berukuran A x */

$An = 6;        //luas kertas A6
$An1 = 5;      //luas kertas Ax
$result = 1;
if ($An > $An1){
    for ($i = $An; $i > $An1; $i--){
        $result *= 2;
        //$A6 = $result;
    }
} else {
    for ($i = $An; $i <= $An1; $i++){
        //$A6 = $result;
        $result /= 2;
        
        }
}

echo"lembar kertas A6 yang disatukan untuk membuat selembar kertas A $An1 sebanyak $result \n";

echo "\n";
echo "=================================================";
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


echo "\n";
echo "=================================================";
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
    

//cari jumlah porsi 
function hitungPorsiMakanan($lakiDewasa, $perempuanDewasa, $remaja, $anakAnak, $balita){
    $totalPorsi = 0;

    //Hitung total Porsi berdasarkan makanan yang dikonsumsi tiap kelompok 
    $totalPorsi += $lakiDewasa * 2;
    $totalPorsi += $perempuanDewasa *1;
    $totalPorsi += $remaja *2;
    $totalPorsi += $anakAnak * 0.5;
    $totalPorsi += $balita *1;

    //cek jumlah orang
    $totalOrang = $lakiDewasa + $perempuanDewasa + $remaja + $anakAnak + $balita;

    if (($totalOrang > 5) && ($totalOrang % 2 != 0)) {
        $totalPorsi += $perempuanDewasa;
    }
    return $totalPorsi;
}

$lakiDewasa = readline("Masukan Jumlah laki-laki dewasa : ");
$perempuanDewasa = readline("Masukan Jumlah perempuan dewasa : ");
$remaja = readline("Masukan Jumlah remaja : ");
$anakAnak = readline("Masukan Jumlah anak anak : ");
$balita = readline("Masukan Jumlah balita : ");

$totalPorsi = hitungPorsiMakanan($lakiDewasa,$perempuanDewasa,$remaja,$anakAnak,$balita);
echo "total porsi yang dimakan : $totalPorsi porsi";
echo "\n";
echo "=================================================";
echo "\n";
*/
/* 
Jika 1 botol = 2 gelas, 1 teko = 25 cangkir, 1 gelas = 2,5 cangkir.  Buatlah sistem konversi volume berdasarkan data diatas.
Contoh : 1 botol = ... cangkir? 
         1 botol = 5 cangkir 
*/

function konversiVo($input1,$input2){
    // input jumlah barang yang akan dikonversi
    $jumlahGelas = 10;
    $jumlahBotol = 1;
    $jumlahCangkir = 25;
    $jumlahTeko = 1;

    // definisi dari setiap konversi
    $botolToGelas = 2;
    $tekoToCangkir = 25;
    $gelasToCangkir = 2.5;

    if (($input1 == "botol") && ($input2 == "gelas")) {
        $jumlahBotol = $jumlahGelas * $botolToGelas;
        echo"konversi dari $jumlahBotol Botol == $jumlahGelas  Gelas. \n";
        
    } elseif (($input1 == "botol") && ($input2 == "cangkir")) {
        $jumlahGelas = $jumlahBotol * $botolToGelas;
        $jumlahCangkir = $jumlahGelas * $gelasToCangkir;
        echo"konversi dari $jumlahBotol botol = $jumlahCangkir Cangkir. \n";

    } elseif (($input1 == "botol") && ($input2 == "teko")) {
        $jumlahGelas = $jumlahBotol * $botolToGelas;
        $jumlahCangkir = $jumlahGelas * $gelasToCangkir;
        $jumlahTeko = $jumlahCangkir / $tekoToCangkir;
        echo"konversi dari $jumlahBotol botol = $jumlahTeko Teko. \n";

    } elseif (($input1 == "gelas") &&   ($input2 == "cangkir")) {
        $jumlahCangkir = $jumlahGelas * $gelasToCangkir;
        echo"konversi dari $jumlahGelas gelas = $jumlahCangkir cangkir. \n";

    } elseif (($input1 == "gelas") &&   ($input2 == "teko")) {
        $jumlahCangkir = $jumlahGelas * $gelasToCangkir;
        $jumlahTeko = $jumlahCangkir / $tekoToCangkir;
        echo"konversi dari $jumlahGelas gelas = $jumlahTeko teko. \n";

    } elseif (($input1 == "cangkir") &&   ($input2 == "teko")) {
        $jumlahTeko = $jumlahCangkir / $tekoToCangkir;
        echo"konversi dari $jumlahCangkir cangkir = $jumlahTeko teko. \n";

    } elseif (($input1 == "teko") &&   ($input2 == "cangkir")) {
        $jumlahCangkir= $jumlahTeko * $tekoToCangkir;
        echo"konversi dari $jumlahTeko teko = $jumlahCangkir cangkir. \n";

    } elseif (($input1 == "teko") &&   ($input2 == "gelas")) {
        $jumlahCangkir = $jumlahTeko * $tekoToCangkir;
        $jumlahGelas = $jumlahCangkir / $gelasToCangkir;
        echo"konversi dari $jumlahTeko teko = $jumlahGelas gelas. \n";

    } elseif (($input1 == "teko") &&   ($input2 == "botol")) {
        $jumlahCangkir = $jumlahTeko * $tekoToCangkir;
        $jumlahGelas = $jumlahCangkir / $gelasToCangkir;
        $jumlahBotol = $jumlahGelas / $botolToGelas;
        echo"konversi dari $jumlahTeko teko = $jumlahBotol botol. \n";

    } elseif (($input1 == "cangkir") &&   ($input2 == "gelas")) {
        $jumlahGelas= $jumlahCangkir / $gelasToCangkir;
        echo"konversi dari $jumlahCangkir cangkir = $jumlahGelas gelas. \n";

    } elseif (($input1 == "cangkir") &&   ($input2 == "botol")) {
        $jumlahGelas = $jumlahCangkir / $gelasToCangkir;
        $jumlahBotol = $jumlahGelas / $botolToGelas;
        echo"konversi dari $jumlahCangkir cangkir = $jumlahBotol botol. \n";

    } else {
        $jumlahBotol = $jumlahGelas / $botolToGelas;
        echo"konversi dari $jumlahGelas gelas = $jumlahBotol botol. \n";
    }
}

echo konversiVo("cangkir","botol");

echo "\n";
echo "=================================================";
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
Pisang:3
 */

$penjualan = "Apel:1, Pisang:3, Jeruk:1, Apel:3, Apel:5, jeruk:8, Mangga:1";
//$penjualan = strtolower(str_replace(' ','',$penjualan));  
$penjualan = str_replace(' ','',$penjualan);  
//echo "$penjualan";

//ubah string menjadi array 
$explodePenjualan = explode(",", $penjualan); //array
//print_r($explodePenjualan);

$result = array();

for ($i = 0; $i < count($explodePenjualan);$i++){
    $temp = $explodePenjualan[$i];
    list($buah,$jumlah) = explode(":",$temp);

    if (array_key_exists($buah, $result)) {
        $result[$buah] += $jumlah;
    } else {
        $result[$buah] = $jumlah;
    }
}
// Mengurutkan summary berdasarkan nama buah (alphabetical order)
ksort($result);
//$result = implode(" ", $result);
//print_r($result);

// Menampilkan summary penjualan
foreach ($result as $buah => $jumlah) {
    echo  " $buah : $jumlah\n";
}



?>