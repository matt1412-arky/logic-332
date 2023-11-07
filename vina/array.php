<?php

/*
array adalah struktur data yang dipakai meyimpan sekumpulan nilai dengan tipe data yang sama.
sekumpulan nilai tersebut disimpan dalam satu variabel. setiap elemen diidentifikasi oelh indexs. 
indexs biasanya dimulai dari 0.

variabel = array(1,2,3,4,5,6,6);
variabel = array("a","c","d","h");


$mobil = array("Mercendes","Jaguar","Masserati","Mustang","Shelby"); //penomoran indeks dimulai dari 0
echo($mobil[2]."\n");
echo($mobil[4]."\n");
echo($mobil[1]."\n");
//echo($mobil[5]."\n"); -> hasil output ini akan error karena melebihi indeks || memberikan warning 

echo(count($mobil)."\n"); // untuk mengetahui banyak nya nilai dalam array

for($i=0;$i<count($mobil);$i++){                  //pemberian batas /panjang array yg hard code
    echo($mobil[$i]."\n");
}

// bukan tipe strong tipe sehingga dapat berbeda tipe data dalam satu array
$numbers = array(1,2,3,4,"a",'@');
for($i=0;$i<count($numbers);$i++){                  
    echo($numbers[$i]."\n");
}
sort($numbers);
print_r($numbers); // untuk memeriksa apakah data benar 
*/

//==========================================================================================================
/*
$vehicle = array(
    array("Mobil",4,8),
    array("Truk",8,2,2000),
    array("Motor",2,2)
);

echo($vehicle[0][0]. " | " . $vehicle[0][1] . " | " . $vehicle[0][2] . "\n");
echo($vehicle[1][0]. " | " . $vehicle[1][1] . " | " . $vehicle[1][2] . "\n");
echo($vehicle[2][0]. " | " . $vehicle[2][1] . " | " . $vehicle[2][2] . "\n");

$vehicle[0][0] = "Car";                         //merubah data dalam array di index [0][0]

echo("Kendaraan, \t Jumlah Roda, \t Jumlah Penumpang, \t Tahun \n");
for ($i=0;$i<count($vehicle);$i++){
    for ($j=0;$j<count($vehicle[$i]);$j++){     // $vehicle[$i] ditambahkan $i untuk menghindari salah indeks // dapat dioperasikan pada panjang array yg berbeda2
        echo(($vehicle[$i][$j]).".\t\t");       // \t untuk menyamakan tab
    }
    echo("\n");
}

print_r($vehicle);

echo($vehicle[0][0]."\n");
echo($vehicle[1][0]."\n");
echo($vehicle[2][0]."\n");
*/

//===========================================================================================

$matriksA = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

/*
for ($i=0;$i<count($matriksA);$i++){
        for ($j=0;$j<count($matriksA[$i]);$j++){     
            echo(($matriksA[$i][$j])."\t\t");       
        }
        echo("\n");
}
*/

$matriksB = array(
    array(2,2,3),
    array(3,5,6),
    array(4,8,9)
);

$matriksC = array(
    array(2,2),
    array(3,5),
    array(8,9)
);


//agar dapat for dibawah ini dapat digunakan berulang ulang digunakan function

function readArray($arr){
    for ($i=0;$i<count($arr);$i++){
        for ($j=0;$j<count($arr[$i]);$j++){     
            echo(($arr[$i][$j])."\t\t");       
        }
        echo("\n");
    }
}

readArray($matriksA);
echo"\n";
readArray($matriksB);
echo"\n";
readArray($matriksC);


$matriksD = array(array());
$matriksD[0][0] = "Blue";
$matriksD[0][1] = "Red";
$matriksD[0][2] = "Green";

echo"\n";
readArray($matriksD);

$hasilMatriks = array();
for ($i=0;$i<count($matriksA);$i++){
    for ($j=0;$j<count($matriksA[$i]);$j++){     
        $hasilMatriks[$i][$j] = $matriksA[$i][$j]+$matriksB[$i][$j];            //perhatikan tanda [i][j] pada hasil matriks, sudah berbentuk array atau belum 
    }
}
readArray($hasilMatriks);


?>