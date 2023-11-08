<?php
    $hello = "Hello World";
    define("GREETING", "Welcome to Xsis Academy");
    define('PI', 3.13);
    define('isLogin', false);
    
    $GREETING = "Welcome ";
    echo GREETING."\n";
    echo $hello."\n";
    $hello = "Hello Xsis"."\n";

    echo $hello."\n";
    echo PI."\n";
    echo (int)isLogin."\n";

    var_dump(isLogin);
    var_dump((int)PI);

    define('XSIS', 'Welcome to Xsis Mitra Utama');
    echo XSIS."\n";

    function myXsis() {
        echo XSIS;
    }
    
    myXsis();

?>