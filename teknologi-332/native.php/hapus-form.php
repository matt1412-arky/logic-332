<?php
    require('config.php');

    try{
        $query ='Select * from profil where id='.$_GET['id'];
    //    echo($query);
       $result = $connection->query($query);
       $row = $row =$result->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo('Hapus Data Gagal! : '.$e->getMessage());
    }
?>

<form action="hapus.php?id=<?=$_GET['id']?>" method="POST">
    Nama:<span><?=$row['name']?></span><br>
    Kota:<span><?=$row['city']?></span><br>
    Email:<span><?=$row['email']?></span><br><br>
    <button type="submit" class="btn btn-danger">Hapus</button>
    <button type="button" class="btn btn-warning" onclick="cancel()">Cancel</button>
</form>