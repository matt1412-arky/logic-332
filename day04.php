<?php 
// loop
// for loop 
/* for (init counter) conditional counter; increment counter){
    code;
 }

// init counter : menentukan nilai/ counter atau hitungan awal.
// conditional counter : menentukan batas akhir dari counter
// expresionList counter : menentukan banyaknya lompatan tiap counter
*/

//increment
for($i=1; $i<=5; $i+=1){
    echo "Nilai x ke  $i  = ". $i . "\n" ;
}

for($t=2015; $t<=2020; $t+=1){
    echo "Tahun ". $t . "\n" ;
}

//decrement
for($i=5; $i>=1; $i-=1){
    echo "Nilai x ke  $i  = ". $i . "\n" ;
}

for($t=2023; $t>=2019; $t-=1){
    echo "Tahun ". $t . "\n"  ;
}

//conditional/ditambah variabel
$a=0;
for($t=1; $t<=5; $t+=1){
    echo $t . " + " . $a . "\n"  ;
    $a += $t;
}
echo $a . "\n" ;

echo  "\n"  ;

for($t=1; $t<=20; $t+=2){
    echo $t . "\n"  ;
}

echo  "\n"  ;

for($t=0; $t<=20; $t+=1){
    if ( $t % 2 != 0){
    echo $t . " = Bilangan Ganjil "  . "\n"  ;
    }
    else{
        echo $t . " = Bilangan Genap "  . "\n"  ;
    }

}

for($t=2000; $t<=2023; $t+=4){
        echo $t . " = Tahun Kabisat "  . "\n"  ;
    }

echo  "\n"  ;


$count = 0;
$tahunAwal = 2000;
$tahunAkhir = 2023;
    for($i=$tahunAwal; $i<=$tahunAkhir; $i+=1){
        if(($i % 4) == 0){
            echo $i . " Tahun Kabisat"  . "\n"  ;
            $count+= 1;
        }
        else{
            echo $i . "\n"  ;
        }
    
    }
    echo  "Ada $count Tahun Kabisat "  . "\n"  ;


echo  "\n"  ;

// 
$a=0;
$nilaiAwal = 2001;
$nilaiAkhir = 2006;
for($t=$nilaiAwal; $t<=$nilaiAkhir; $t+=1){
    if(($t % 2) != 0){
       $a = $t +1 ;
    echo $t . " + " . $a . " = " . $t+$a . "\n"  ;
    } 
}

echo  "\n"  ;

//versi lain
$nilaiAwal = 2001;
for($i=1; $i<=3; $i+=1){
    echo $nilaiAwal . " + " . $nilaiAwal+1 . " = " . $nilaiAwal + $nilaiAwal+1 . "\n";
    $nilaiAwal+=2;
}

echo  "\n"  ;

//latihan rata-rata
$total = 0;
$jBil = 0;
$nilaiAwal = 1;
$nilaiAkhir = 15;
for($i=$nilaiAwal; $i<=$nilaiAkhir; $i+=2){
   $jBil++;
   $total += $i;


}
echo "Total Nilai " .  $total . " \n";
echo "Jumlah Bilangan " . $jBil . " \n";
echo "Rata-rata = " . $total/$jBil . " \n";
?>    
