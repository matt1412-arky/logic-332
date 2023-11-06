<?php
    function isValidUsername($username) {
        // Cek panjang username
        if (strlen($username) < 5 || strlen($username) > 10) {
            return "invalid";
        }
    
        // Cek karakter yang dibolehkan
        if (preg_match('/[^a-zA-Z0-9_]/', $username)) {
            return "invalid";
        }
    
        // Cek apakah username mengandung garis bawah
        if (strpos($username, '_') === false) {
            return "invalid";
        }
    
        return "valid";
    }
    

    $username1 = readline("Masukan Data : ");
    
    echo "Username is " . isValidUsername($username1) . "\n";
    
?>