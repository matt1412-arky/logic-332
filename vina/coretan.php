<?php 


// buat array 
// 1, 3, 5, 7
// 9, 11, 13, 15
//yang input datanya dilakukan dalam loop
$rows = 2; // Jumlah baris
$columns = 4; // Jumlah kolom

$array = array();

for ($i = 0; $i < $rows; $i++) {
    $row = array();
    for ($j = 1; $j <= $columns; $j++) {
        $value = ($i * $columns) + $j * 2 - 1;
        echo("$row . $value");
    }
    echo("$array . $row");
}

// Menampilkan array
foreach ($array as $row) {
    foreach ($row as $value) {
        echo $value . ' ';
    }
    echo "<br>";
}

?>