<?php
    /*
     PHP String Function 
     */

     $kalimat = "Xsis Academy, Jalan Langsat III Nomor 5";
     $kata = "PHP";
     // string explode = memisahkan string berdasarkan separator
     $explode = explode("a", $kalimat);
     print_r($explode);
     print($kalimat."\n");
     //print dengan format printf()
     printf("%s %s\n", $kalimat, $kata);
     //crypt() function untuk membuat hash dari suatu string
     $hash = crypt($kata, "salt");
     echo($hash."\n");
     //implode = menggabungkan kata - kata dalam suatu array menjadi suatu string
     $strArray = array ("Red", "Green", "Blue");
     echo(implode(" ", $strArray)."\n");
     //trim untuk membuang spasi dikanan atau dikiri suatu string
     $str = "    Bandung City   ";
     echo($str." : ".ltrim($str)."\n");
     echo($str." : ".rtrim($str)."\n");
     echo($str." : ".trim($str)."\n");
     // str_replace untuk mereplace karakter atau string dari suatu string
     echo(str_replace(" ",";",$kalimat)."\n");
     echo(str_replace("Nomor","Number",$kalimat)."\n");

     echo "\n";

     /*
     str_split(String, banyaknya karakter(int)) - untuk memisahkan string menjadi
     satu atau lebih karakter
     */
     $strArray = str_split($kalimat,5);
     print_r($strArray);
     echo "\n";
     
     //str_repeat(String, banyaknya string diulang) - untuk mengulang string
     //menjadi beberapa sesuai dengan parameter ke 2
     echo(str_repeat("Holla",5)."\n");
     echo "\n";
     //str_pad(String, panjang string baru, String yang akan ditambahkan)
     echo(str_pad("Holla", 10, "##")."\n");
     echo(str_pad("Holla", 15, "$$")."\n");
     echo "\n";
     //strpost(String, String yang dicari) - mencari substring dalam suatu string
     echo(strpos($kalimat, "5")."\n");
     echo "\n";
     //number_format(String Number, decimal, String decimal sign, String separator sign)
     echo(number_format("15000000", 2)."\n");
     echo(number_format("15000000", 2, ",", ".")."\n");
     echo "\n";
     //strrev(String) - digunakan untuk membalik string
     echo(strrev("Xsis Academy")."\n");
     echo "\n";
     //join(separator, String Array) - Alias dari implode()
     $strArray = array ("Red", "Green", "Blue");
     echo(join(" ", $strArray)."\n");
     echo "\n";
     //strtolower(String) - merubah string ke huruf kecil
     echo(strtolower($kalimat)."\n");
     //strtoupper(String) - merubah string ke huruf besar
     echo(strtoupper($kalimat)."\n");
     echo "\n";
     //ucfirst(String) - Membuat uppercase untuk karakter pertama dalam suatu kalimat
     echo(ucfirst("php batch 332 xsis academy")."\n");
     //ucwords(String) - Membuat uppercase untuk karakter pertama dalam suatu kata
     echo(ucwords("php batch 332 xsis academy")."\n");
     echo "\n";
     //md5(String) - hash string to MD5 format
     echo(md5("password123")."\n");
     //shal(Sting) - hash string to SHA format
     echo(sha1("password123")."\n");
     echo "\n";
     //mengecek 2 string sama atau tidak
     echo(("satu" == "satu")."\n");
     echo(("satu" == "Satu" )."\n");
     echo "\n";



     /*
     ----------------------------------------------------------------------
     Tugas
     ----------------------------------------------------------------------
     Buatlah function-function seperti di bawah ini :
     ======================================================================
     Nomor 1:
     makeOutWord("<<>>","Yay") ->"<<Yay>>"
     makeOutWord("<<>>","WooHoo") -> "<<WooHoo>>"
     makeOutWord("[[]]","word") -> "[[word]]"
     */
        function makeOutWord($simbol,$word){
            echo substr($simbol,0 ,2).$word. substr($simbol,2 ,2)."\n";
        } 
        makeOutWord("<<>>","Yay")."\n";
        makeOutWord("<<>>","Woohoo")."\n";
        makeOutWord("[[]]","word")."\n";
        echo "\n";
    /*
     Nomor 2:
     extraFront("Hello") -> "HeHeHe"
     extraFront("ab") -> "ababab"
     extraFront("H") -> "HHH"
    */
        function extraFront($word){
            echo substr($word,0 ,2 ). substr($word,0, 2). substr($word,0 ,2)."\n";
        }
        extraFront("Hello");
        extraFront("ab");
        extraFront("H");
        echo "\n";
    /*
     Nomor 3:
     repeatEnd("Hello",3) -> "llollollo"
     repeatEnd("Hello",2) -> "lolo"
     repeatEnd("Hello",1) -> "o"
    */
        function repeatEnd($word,$no){
            $n = substr($word, - $no);
            for ($i = 0; $i < $no; $i++){
                echo $n;
            }
                echo "\n";
        }
        repeatEnd("Hello", 3);
        repeatEnd("Hello", 2);
        repeatEnd("Hello", 1);
        echo "\n";
    /*
     Nomor 4:
     lihat di index 0 dan 2 cari yang terbesar
     maxEnd3([1,2,3]) -> [3,3,3]
     maxEnd3([11,5,9]) -> [11,11,11]
     maxEnd3([2,11,3]) -> [3,3,3]
    */
        function maxEnd($max){
            $a = $max[0];
            $b = $max[count($max) - 1];
            $hasilmax = max ($a,$b);
            
            for ($i =0; $i < 3; $i++) {
                $result[] = $hasilmax;
            }

            return $result;
         }
        $maxEnd3=[1,2,3];
        $result = maxEnd($maxEnd3);
         print_r($result);
        $maxEnd2=[11,5,9];
        $result = maxEnd($maxEnd2);
         print_r($result);
        $maxEnd1= [2,11,3];
        $result = maxEnd($maxEnd1);
         print_r($result);
        echo "\n";
    /*
     Nomor 5:
     Constraint : panjang array ganjil > 1
     cari nilai tertinggi dari array tersebut
     maxTriple([1,2,3]) -> 3
     maxTriple([1,5,3]) -> 5
     maxTriple([5,2,3]) -> 5
    */
        function maxTriple($maxd){
            sort($maxd);
            $coun = count($maxd)- 1;
            $a = $maxd[$coun];
            echo ($a."\n");
        }
            //print_r($a);
        maxTriple([1,2,3]);
        maxTriple([1,5,3]);
        maxTriple([5,2,3]);
        echo "\n";
    /*
     Nomor 6:
     swapEnds([1,2,3,4]) -> [4,3,2,1]
     swapEnds([1,2,3]) -> [3,2,1]
     swapEnds([8,6,7,9,5]) -> [5,6,7,9,8]
    */
        $c1= [1,2,3,4];
        $c2= [1,2,3];
        $c3= [8,6,7,9,5];

        function swapEnds($wap){
            $first = [];
            $last = count($wap)-1 ;
            $first = $wap;
            $first [0] = $wap[$last];
            $first [$last] = $wap [0];
            return print_r($first); 
        }
        swapEnds($c1);
        swapEnds($c2);
        swapEnds($c3);
        echo "\n";
    /*
     Nomor 7:
    Buat program (fungsi - bukan procedure) untuk mengecek apakah suatu kata/kalimat 
     termasuk palindrom atau bukan palindrom*/
        function isPalindrome($str) {
            // Hapus spasi di awal dan akhir string, kemudian ganti semua spasi di dalam string menjadi tidak ada (”)
                $str = strlen($str);
                $str = str_replace(' ', " ", $str);
        
            // Balik string menggunakan fungsi strrev()
                $reverse = strrev($str);
        
            // Bandingkan string asli dengan string yang sudah dibalik. Jika sama, maka string tersebut adalah palindrome
                if ($str == $reverse) {
                    return true;
                } else {
                    return false;
                }
            }
            // Contoh penggunaan fungsi
                $str1 = "Kasur Rusak";
                $str2 = "Payung Sobek";

                if (isPalindrome($str1)) {
                    echo $str1 . " adalah kata atau kalimat palindrome" ."\n";
                } else {
                    echo $str1 . " bukan kata atau kalimat palindrome" ."\n";
                }

                if (isPalindrome($str2)) {
                    echo $str2 . " adalah kata atau kalimat palindrome" ."\n";
                } else {
                    echo $str2 . " bukan kata atau kalimat palindrome" ."\n";
                }
        
            echo "\n";
    
    /*
     nomor 8;
     Buat program untuk mengecek suatu kalimat ada berapa
     huruf vokal dan berapa huruf konsonan
     input : "Xsis Academy"
     output : 4 huruf vokal - aaei
              7 huruf konsonan - cdmssxy
    */
        function hitung_vocal($kalimat) {
            $arr = "Xsis Academy";           
            $kalimat = strtolower(str_replace(" ","",$arr));
            $kalimatArr = str_split($kalimat);
            sort($kalimatArr);
            $kalimat = implode("", $kalimatArr);
            $vocal = "a, i, u, e,o";
            $konsonan = "b, c, d, f, g, h, j, k, l, m, n, p, q, r, s, t, v, w, x, y, z";
            $countV = 0;
            $countK=0;
            $vocalArr = " ";
            $konsonanArr = " ";

            for ($i = 0; $i < strlen($kalimat); $i++) {
                $karakter = $kalimat[$i];
                if (strpos($vocal, $karakter) !== false) {
                    $countV++;
                    $vocalArr.=$karakter;
                } else if (strpos($konsonan, $karakter) !== false) {
                        $countK++;
                        $konsonanArr.=$karakter;
                }
                
            }
            
            echo "Ada ".($countV)." Huruf Vocal - ". $vocalArr . "\n";
            echo "Ada ".($countK)." Huruf Konsonan - ". $konsonanArr . "\n";
            
        }
        echo ("Xsis Academy")."\n";
        echo hitung_vocal($kalimat);
?>