<?php
    
    require('config.php');
    echo("<pre>");
    print_r($_POST);

    try{
        $query = "insert into profil (name, city, email) values (
            '".$_POST['name']."',
            '".$_POST['city']."',
            '".$_POST['email']."'
       )";
       echo($query);
       $result = $connection->query($query);
    
       header('location:index.php');

    } catch(PDOException $e) {
        echo('Simpan Data Gagal! : '.$e->getMessage());
    }
      
?>
