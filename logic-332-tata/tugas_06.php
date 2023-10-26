<?php
    /**
     * Buat program untuk mengecek apakah suatu kata/kalimat
     * merupakan palindrom atau bukan palindrom
     */

     $string = "XSIS Academy";
     echo "program palindrom untuk string: " . $string . "\n";

     function palindrom($str){
        $strrev = strrev($str);
        if ($strrev == $str) {
            $res = "kalimat/kata palindrom!";
        } else{
            $res = "kalimat/kata bukan palindrom!";
        }
        return $res;
     }
     echo palindrom($string) . "\n";

     /**
      * Buat program untuk mengecek suatu kalimat
      * berapa huruf vokal dan berapa huruf konsonan
      */

      echo "Jumlah huruf vokal dan huruf konsonan pada kata/kalimat '" . $string . "' adalah =\n";

      function count_vocal($str){
        $vocal = "aiueo"; $voc_num = 0; $voc_str = "";          // init huruf vokal
        $str = str_replace(' ', '', strtolower($str));          // hapus spasi'
        $kon_str = str_replace(str_split($vocal), "", $str);    // buat kalimat tanpa huruf vokal
        $len = strlen($str);                                    // jumlah karakter dalam string untuk mencari jumlah huruf konsonan
        $str = str_split($str);                                 // ubah string menjadi array
        for($i = 0; $i < count($str); $i++){                    // looping kalimat
            for($j = 0; $j < 5; $j++){                          // looping huruf vokal
                switch($str[$i]){                                               // cek huruf vokal
                    case $vocal[$j]: $voc_num++; $voc_str .= $str[$i]; break;  // jumlah huruf vokal dan pisahkan huruf vokal untuk diprint
                }
            }
        }                                                       // hitung huruf konsonan
        $kon_num = $len - $voc_num;
        $res = "konsonan  =   $kon_num    |   $kon_str\nvocal     =   $voc_num    |   $voc_str\n";
        return $res;
      }
      echo count_vocal($string);

?>