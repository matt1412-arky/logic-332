<?php
    /*
    ------------------------------------------------------------
    TUGAS
    ------------------------------------------------------------
    Buatlah function-function seperti dibawah ini :
    =====================================
    Nomor 1:
    makeOutWord("<<>>", "Yay") → "<<Yay>>"
    makeOutWord("<<>>", "WooHoo") → "<<WooHoo>>"
    makeOutWord("[[]]", "word") → "[[word]]"
    ====================================
    */
    function makeOutWord($tag, $word) {
        $tagAwal = substr($tag, 0, 2);
        $tagAkhir = substr($tag, 2);
        return $tagAwal . $word . $tagAkhir;
    }    
    echo makeOutWord("<<>>", "Yay")."\n";
    echo makeOutWord("<<>>", "WooHoo")."\n";
    echo makeOutWord("[[]]", "word")."\n\n";
    
    
    /*
    Nomor 2:
    extraFront("Hello") → "HeHeHe"
    extraFront("ab") → "ababab"
    extraFront("H") → "HHH"
    ===================================
    */
    function extraFront($str) {
        $front = substr($str, 0, 2);
        return $front . $front . $front;
    }
    echo extraFront("Hello")."\n";
    echo extraFront("ab")."\n";
    echo extraFront("H")."\n\n";
    

    /*
    Nomor 3:
    repeatEnd("Hello", 3) → "llollollo"
    repeatEnd("Hello", 2) → "lolo"
    repeatEnd("Hello", 1) → "o"
    ====================================
    */
    function repeatEnd($str, $n) {
        $end = substr($str, -$n);
        return str_repeat($end, $n);
    }    
    echo repeatEnd("Hello", 3)."\n";
    echo repeatEnd("Hello", 2)."\n";
    echo repeatEnd("Hello", 1)."\n\n";
    

    /*
    Nomor 4:
    lihat di index 0 dan 2 cari yang terbesar
    maxEnd3([1, 2, 3]) → [3, 3, 3]
    maxEnd3([11, 5, 9]) → [11, 11, 11]
    maxEnd3([2, 11, 3]) → [3, 3, 3]
    ====================================
    */
    function maxEnd3($num) {
        $max = max($num[0], $num[2]);
        return array($max, $max, $max);
    }
    print_r(maxEnd3([1, 2, 3])); 
    print_r(maxEnd3([11, 5, 9]));
    print_r(maxEnd3([2, 11, 3]));
    

    /*
    Nomor 5:
    Constraint : panjang array ganjil > 1
    cari nilai tertinggi dari array tersebut
    maxTriple([1, 2, 3]) → 3
    maxTriple([1, 5, 3]) → 5
    maxTriple([5, 2, 3]) → 5
    =======================================
    */
    function maxTriple($num) {
        $constraint = count($num);        
        if ($constraint > 1 && $constraint % 2 == 1) {
            return max($num);
        } else {
            return "Panjang array tidak ganjil";
        }
    }
    echo maxTriple([1, 2, 3])."\n";
    echo maxTriple([1, 5, 3])."\n";
    echo maxTriple([5, 2, 3])."\n\n";
    

    /*
    Nomor 6:
    swapEnds([1, 2, 3, 4]) → [4, 2, 3, 1]
    swapEnds([1, 2, 3]) → [3, 2, 1]
    swapEnds([8, 6, 7, 9, 5]) → [5, 6, 7, 9, 8]
    ==========================
    */
    function swapEnds($num) {        
        $temp = $num[0];
        $num[0] = $num[count($num) - 1];
        $num[count($num) - 1] = $temp;    
        return $num;
    }    
    print_r(swapEnds([1, 2, 3, 4]));
    print_r(swapEnds([1, 2, 3]));
    print_r(swapEnds([8, 6, 7, 9, 5]));

    /*
    Nomor 7:
    Buat program (fungsi - bukan prosedur) untuk mengecek apakah suatu
    kata/kalimat termasuk palindrom atau bukan palindrom  
    ==========================
    */
    function palindrom($kata) {
        $kata = strtolower($kata);
        return $kata == strrev($kata);
    }
    $input_text = "kAsUr ruSaK";
    if (palindrom($input_text)) {
        echo "Palindrom\n\n";
    } else {
        echo "Bukan Palindrom\n\n";
    }

    /*
    Nomor 8:
    Buat program untuk mengecek suatu kalimat ada beberapa huruf vokal dan berapa huruf konsonan
    input : "Xsis Academy"
    output : 4 huruf vokal - aaei
             7 huruf konsonan - cdmssxy
    ==========================
    */
    // $strArray = array('x','s','i','s','a','c','a','d','e','m','y');
    // print_r($strArray);
    // sort($strArray);
    // print_r($strArray);
    
    $str = "Xsis Academy";  // init input
    $strrep = str_replace(" ", "", $str);   // deleting spaces
    $strlow = strtolower($strrep);  // spliting character
    $strsplit = str_split($strlow, 1);  // spliting character

    $countVokal = 0;
    $strVokal = [];
    $countKonsonan = 0;
    $strKonsonan = [];
    for ($i=0; $i<count($strsplit); $i++) {
        if ($strsplit[$i]=='a' || $strsplit[$i]=='i' || $strsplit[$i]=='u' || $strsplit[$i]=='e' || $strsplit[$i]=='o') {
            $countVokal++;
            $strVokal[] = $strsplit[$i];            
        } else {
            $countKonsonan++;
            $strKonsonan[] = $strsplit[$i];
        }
    }
    echo("$countVokal Huruf Vokal - ".implode("", $strVokal)."\n");
    sort($strVokal);
    // print_r($strVokal);
    echo("$countKonsonan Huruf Konsonan - ".implode("", $strKonsonan)."\n");
    sort($strKonsonan);
    // print_r($strKonsonan);


    


?>