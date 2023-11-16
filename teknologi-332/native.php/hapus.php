<?php
    
    require('config.php');

    try{
        $query = "delete from profil where id=".$_GET['id'];
    //    echo($query);
       $result = $connection->query($query);
    
       header('location:index.php');

    } catch(PDOException $e) {
        echo('Hapus Data Gagal! : '.$e->getMessage());
    }
      
?>