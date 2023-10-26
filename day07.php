<?php
$vehicle = array(
    array("mobil", 4, 8),
    array("Truk", 8, 2),
    array("Motor", 2, 2),
);
echo ($vehicle[0][0] . "|" . $vehicle[0][1] . "|" . $vehicle[0][2] . "\n");
echo ($vehicle[1][0] . "|" . $vehicle[1][1] . "|" . $vehicle[1][2] . "\n");
echo ($vehicle[2][0] . "|" . $vehicle[2][1] . "|" . $vehicle[2][2] . "\n");

echo ("Kendaraan, \tjumlah Roda, \tJml Penumpang, \tTahun \n");
for ($i = 0; $i < count($vehicle); $i++) {
    for ($j = 0; $j < count($vehicle[$i]); $j++) {
        echo ($vehicle[$i][$j] . "\t\t");
    }
    echo "\n";
}

$matrixA = array(
    array(1, 4, 8),
    array(6, 8, 2),
    array(7, 2, 2),
);

$matrixB = array(
    array(2, 4, 8),
    array(4, 8, 2),
    array(6, 2, 2),
);

$matrixC = array(
    array(1, 4),
    array(6, 8),
    array(7, 2),
);
function readArray($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            echo ($arr[$i][$j] . "\t\t");
        }
        echo "\n";
    }
}
readArray($matrixA);
readArray($matrixB);
readArray($matrixC);

$matrixD = array(array());
$matrixD[0][0] = "Blue";
$matrixD[0][1] = "Red";
$matrixD[0][2] = "Green";
readArray($matrixD);

$array1 = array();
$n = 1;
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $array1[$i][$j] = $n;
        $n += 2;
    }
}
readArray($array1);

$sum_array = array();
for ($z = 0; $z < 4; $z++) {
    $sum_array[$z] = $array1[0][$z] + $array1[1][$z];
}
print_r($sum_array);

/*
 php list()
 list adalah function yang digunakan untuk memasukan nilai kedalam list dalam sekali operasi
 */

$buah = array("manga", "apel", "jeruk");
array_push($buah, "pisang");
list($a, $b, $c, $d) = $buah;
echo ("buah yang ada adalah $a $b $c $d");
