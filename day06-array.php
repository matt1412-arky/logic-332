/*
array adalah struktur data yang dipakai untuk menyimpan sekumpulan nilai dengan tipe data yang sama. sekumpulan nilai tersebut
disimpan dalam satu variable. disetiap elemen diidentifikasi oleh indeks, indeks biasanya dimulai dari 0;

variable = array()
*/
<?php
$mobil = array("A", "B", "C", "D", "E");
echo ($mobil[2] . "\n");

echo (count($mobil) . "\n");

for ($i = 0; $i < count($mobil); $i++) {
    echo ($mobil[$i] . "\n");
}

// php bukan pemrograman strong type, jadi bisa berbeda tipe data dalam satu array
$number = array(1, 3, 5, 6, 7, "Buldozer", "z", "$", "@");
for ($i = 0; $i < count($number); $i++) {
    echo ($number[$i] . "\n");
}
sort($number);
print_r($number);

$angka = array(99, 5, 7, 31, 85, 10, 15);
$panjangArray = count($angka);

// 1. Mencari Nilai Rata - Rata
$hasil = array_sum($angka) / $panjangArray;
echo "hasil Rata - Rata : " . $hasil . "\n";

// 2. Mencari Nilai Tengah
sort($angka);
if ($panjangArray % 2 == 0) {
    $middle1 = $angka[($panjangArray / 2) - 1];
    $middle2 = $angka[$panjangArray / 2];
    $median = ($middle1 + $middle2) / 2;
} else {
    $median = $angka[($panjangArray / 2)];
}

echo "Nilai Tengah (Median): " . $median . "\n";

// 3. Mencari Nilai Minimal
$min = min($angka);
echo "Nilai Minimal: " . $min . "\n";

// 4. Mencari Nilai Tengah
$max = max($angka);
echo "Nilai Maksimal: " . $max . "\n";

$a = array(1, 2, 3);
$b = array(3, 2, 1);
$c = array();
for ($i = 0; $i < 3; $i++) {
    $c[$i] = $a[$i] + $b[$i];
}
print_r($c);

// $x = bilangan ganjil
// $y = bilangan Genap
// $z = menyimpan hasil perkalian $x dan $y
$x = array();
$y = array();
$z = array();
$n = 10;
for ($i = 0; $i <= $n * 2; $i++) {
    if ($i % 2 == 0) {
        $y[] = $i;
    } else {
        $x[] = $i;
    }
}
for ($i = 0; $i < $n; $i++) {
    $z[] = $x[$i] * $y[$i];
}

print_r($z);

// jim jumping path
$path = '----o--o---o---';
$action = 'wwwwjwwjwwwjwww';

function jim_jump($path, $action){
    $jim = 15;
    $jump = 2;
    
    $len_path = strlen($path);
    $len_act = strlen($action);
    if($len_path != $len_act){
        return 'panjang tidak sama';
    }

    for($i = 0; $i < strlen($path); $i++){
        switch(true){
            case $path[$i] == 'o' && $action[$i] != 'j': return 'jim mati'; break;
            case $path[$i] == 'o' && $action[$i] == 'j': $jim -= $jump; break;
        }
    }
    return $jim;
} echo jim_jump($path, $action) . "\n";

// persamaan index abjad
$string = 'abcdzzz';
$array = [1,2,2,4,4,26,26];
function match_alphabet_index($string, $array){
    $alphabet = (range('a','z'));
    // constraint
        $alph = range('A', 'Z');
        for($i = 0; $i < count($alph); $i++){
            $char = $alph[$i];
            if(strpos($string, $char) !== false){
                return "Error Uppercase Detected";
            }
        }
        if(count($array) > 100){
            return "Error Array Count 100";
        }
    // constraint end

    print_r($alphabet);
    for($i = 0; $i < count($alphabet); $i++){
        for($j = 0; $j < strlen($string); $j++){
            if($alphabet[$i] == $string[$j]){
                $arr[] = $i + 1;
            }
        }
    }
    $res = '';
    for($i = 0; $i< count($arr); $i++){
        if($array[$i] != $arr[$i]){
            $res .= "false\n";
        } else{
            $res .= "true\n";
        }
    }
    return $res;
} echo match_alphabet_index($string, $array) . "\n";

// bilangan genap di 3
for($i = 1; $i < 10; $i++){
    if(($i * 3) % 2 == 0){
        echo $i * 3 . " ";
    }
} echo "\n";

// ceasar
$string = "ba ca"; $n = 98;
$n = $n % 26;
$ceaser_alpha = [];
$alphabet = range('a', 'z');
echo "Original Alphabet: " . join("", $alphabet) . "\n";
for($i = 0; $i < count($alphabet); $i++){
    $diff = $i + $n;
    if($diff > 25){
        $diff -= 26;
    }
    $ceasar_alpha[] = $alphabet[$diff];
} 
$str_ceasar = join("", $ceasar_alpha);
echo "Rotation'd Alphabet: $str_ceasar\n";

for($i = 0; $i < strlen($string); $i++){
    for($j = 0; $j < count($alphabet); $j++){
        if($string[$i] == $alphabet[$j]){
            $str_index[] = $j;
        }
    }
}
$res = '';
for($i = 0; $i < count($str_index); $i++){
    for($j = 0; $j < count($ceasar_alpha); $j++){
        if($str_index[$i] == $j){
            $res .= $ceasar_alpha[$str_index[$i]];
        }
    }
}
echo $res . "\n";



// tali
$z = 5; $x = 1; $res = 0;
while($z != $x){
    $z = round($z / 2);
    $res+=2;
}
echo $res . "\n";



?>