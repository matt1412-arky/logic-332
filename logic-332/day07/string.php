<?php
    /*
    PHP string function
    */

    $kalimat = "Xsis Academy, Jalan Langsat III Nomor 5";
    $kata = "PHP";

    //  string exlpode = memisahkan string berdasarkan separator
    $explode = explode(" ", $kalimat);
    print_r($explode);
    print($kalimat."\n");

    //  print dengan format printf()
    printf("%s %s\n", $kalimat, $kata);

    //crypt() function untuk membuat hash dari suatu string
    $hash = crypt($kata, "salt");
    echo($hash."\n");

    //implode = menggabungkan kata2 dalam suatu array menjadi suatu string
    $strArray = array("Red", "Green", "Blue");
    echo(implode(" ", $strArray)."\n");

    //trim untuk membuang spasi dikanan atau kiri suatu string
    $str = "   Cibinong";
    echo($str." : ".ltrim($str)."\n");
    echo($str." : ".rtrim($str)."\n");
    echo($str." : ".trim($str)."\n");

    //str replace untuk mereplace karakter atau string dari suatu string
    echo(str_replace(" ", ";", "$kalimat"). "\n");
    echo(str_replace("Nomor", "Number", "$kalimat"). "\n");

    //str_split(String, banyaknya karakter (int)) - untuk memisahkan string menjadi satu atau lebih karakter
    $strArray = str_split($kalimat, 5);
    print_r($strArray);

    /*
    str_repeat(String, banyaknya string diulang) - untuk mengulang string menjadi beberapa,
    sesuai dengan parameter ke 2
    */
    echo(str_repeat("Hello", 5). "\n");

    //str_pad(String, panjang string yang baru, String yang akan ditambahkan)
    echo(str_pad("Hello", 10, "#"). "\n");
    echo(str_pad("Hello", 15, "$$"). "\n");

    //strpos(String, String yang dicari) - mencari substring dalam suatu string
    echo(strpos($kalimat, "5")."\n");

    //number_format(String Number, decimal, String decimal sign, String separator sign)
    echo(number_format("12000000",2)."\n");
    echo(number_format("12000000",2, ",", ".")."\n");

    //strrev(String) - digunakan untuk membalik string
    echo(strrev("Xsis Academy")."\n");

    //join(separator, String Array) - Alias dari implode()
    $strArray = array("Red", "Green", "Blue");
    echo(join(" ", $strArray)."\n");

    //strtolower(String) - merubah string ke huruf kecil
    echo(strtolower($kalimat)."\n");
    
    //strtoupper(String) - merubah string ke huruf besar
    echo(strtoupper($kalimat)."\n");

    //ucfirst(String) - Membuat uppercase untuk karakter pertama dalam suatu string
    echo(ucfirst("php batch 332 xsis academy")."\n");
    
    //ucwords(String) - Membuat uppercase untuk karakter pertama dalam suatu kata
    echo(ucwords("php batch 332 xsis academy")."\n");

    //md5(String) - hash string to md5 format
    echo(md5("password123")."\n");
    
    //sha1(String) - hash string to SHA format
    echo(sha1("password123")."\n");

    //mengecek 2 string sama atau tidak
    echo(("satu" == "satu")."\n");  //true (1)
    echo(("satu" == "Satu")."\n");  //false ()







    ?>