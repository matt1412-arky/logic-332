<?php 
/* case 1.
output = 
- - - - 1
- - - 2 -
- - 3 - -
- 4 - - -
5 - - - -
*/

/*
$i = 1; 
$j = 1;
$n = 5; //jumlah matriks
while($i <= $n){
    while($j <= $n){
        if(($i+$j) == ($n+1))      // untuk silang kiri
            echo("$i");
        else
            echo("-");
        $j++;
    }
    $i++;
    echo"\n";
} 


//case 2
$n = 9;                               // banyaknya data
$temp = 2; 
$temp2 = 53;
for($i=1; $i<=$n; $i+=1){            //di loop terlebih dahulu 
    for($j=1; $j<=$n; $j+=1){        // di loop hingga selesai
        if((($i==1) && ($j==($n+1)/2)) || (($i==$n) && ($j==($n+1)/2))){
            $temp+=3;
            echo("X ");
        } elseif(($i==2) &&($j==1) || (($i==2) && ($j==$n))){
            echo("X ");
        }elseif(($i==($n-1)) &&($j==1) || (($i==($n-1)) && ($j==$n))){
            //$temp2-=3;
            echo("X "); 
        }elseif ($i==1){
            echo("$temp ");
            $temp+=3;
        } elseif($j==$n){
            echo("$temp ");
            $temp+=3;
        } elseif($j==1){
            echo("$temp2 ");
            $temp2-=3;
        } elseif($i==$n){
            $temp2-=3;
            echo("$temp2 ");
        }elseif(($i==($n-1)) &&($j==1) || (($i==($n-1)) && ($j==$n))){
            $temp2-=3;
            echo("$temp2 ");
            echo("3 "); 
        } elseif($i==$n){
            echo("$temp2 ");
        } else{
            echo("   ");
        }
    }
    echo"\n";
} 

//output : hasil nilai output tidak tersusun



$angka = array(99, 5, 7, 31, 85, 10, 15, 56);
$panjangArray = count($angka);

//1. Hitung nilai rata-rata

$sigma = array_sum($angka);
echo ("Jumlah nilai $sigma \n");
echo ("Jumlah array $panjangArray \n");

$average = $sigma / $panjangArray;
echo ("average $average \n");

//3. mencari nilai minimum dari angka

$maxNilai = max($angka);
echo "nilai max $maxNilai \n";
//4. mencari nilai maksimum dari angka
$minNilai = min($angka);
echo "nilai min $minNilai \n";


//2. Mencari nilai tengah dari angka
$sortAngka = sort($angka); //
$panjangArray = count($angka); //

print_r($angka);
if($panjangArray % 2 > 0 ){
    $median = $angka[($panjangArray - 1) / 2];
    echo "Median : " . $median . "\n";
} else {
    echo($angka[$panjangArray / 2]);
    echo($angka[($panjangArray / 2)-1]);
    $median = ($angka[$panjangArray / 2] + $angka [($panjangArray / 2)-1])/2 ;
    echo "Median : " . $median . "\n";
}


$a = array(1,2,3);
$b = array(1,2,3);
$c = array();

for($i=0;$i<count($a);$i++){
    $c[$i] = $a[$i]+$b[$i];
}
print_r($c);



//$X = bilangan genap
//$Y = bilangan ganjil
//$Z = menyimpan hasil perkalian

$X = array();
$Y = array();
$Z = array();

for($i=1; $i<=5; $i+=1){
    if(($i%2)!=0) {
        $X[]=$i;
        print_r("$X");
    } else {
        $Y[]=$i;
        print_r("$Y");
    }
}
$h = count($X);
print_r($X);
print_r($Y);

for($i=0;$i<count($X);$i++){                  
    $Z[] = $X[$i] * $Y[$i];
} 

print_r($Z);
*/

$X = array();
$Y = array();
$Z = array();

for($i=1;$i<= 5;$i+=2){                  
    $X[$i] = $i;
}
for($i=2;$i<= 6;$i+=2){                  
    $Y[$i] = $i;
}

print_r($X);
print_r($Y);

for($i=0;$i<count($X);$i++){                  
    $Z[$i] = $X[$i] * $Y[$i];
} 
print_r($Z);

?>